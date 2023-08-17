<?php

//new curl prep
$id = $_GET['id']; 
$ch = curl_init();

$headers = array(
    "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3",
    "X-User-Agent: Model: MAG250; Link: WiFi",
    "Referer: http://watch.push4k.tv/stalker_portal/c/",
    "Cookie: mac=00:1A:79:58:CC:80; stb_lang=en; timezone=GMT",
    "Accept: */*",
    "Host: watch.push4k.tv",
    "Connection: Keep-Alive"
);

$url = "http://watch.push4k.tv/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F".$id."&JsHttpRequest=1-xml";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo $response; // Output the response
}

curl_close($ch);


if ($response !== false) {
    $response_data = json_decode($response, true);

    if ($response_data !== null && isset($response_data['js']['cmd'])) {
        $cmd = $response_data['js']['cmd'];

        // Convert the "cmd" to its usual form
        $cmd = str_replace('\/', '/', $cmd);
        $cmd = str_replace('ffmpeg', '', $cmd);
       
    } else {
        echo "Invalid JSON or missing 'cmd' field in the response.\n";
    }
} else {
    echo "Failed to read the response file.\n";
}


header("Location: ".$cmd);
















?>
