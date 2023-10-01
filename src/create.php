<?php
error_reporting(false);
$id = $_GET['id'];
$url = 'http://epg.protv.cc:80/play/live.php?mac=00:1A:79:BC:11:62&stream='.$id.'&extension=m3u8&play_token=shikari';
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.200',
        'Host: epg.protv.cc:80',
        'Accept: */*'
    ),
    CURLOPT_HEADER => true,
    CURLOPT_FOLLOWLOCATION => false  // Disable automatic redirects
);

$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);


if ($response === false) {
    $error = curl_error($ch);
    // Handle the error
} else {
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $headerSize);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode === 302) {
        $locationHeader = getHeaderValue($header, 'Location');
        
        }
    }


curl_close($ch);

// Helper function to extract header values by name
function getHeaderValue($header, $name) {
    $pattern = '/^' . preg_quote($name) . ': ?(.+?)$/m';
    if (preg_match($pattern, $header, $matches)) {
        return $matches[1];
    }
    return null;
}

// Parse the URL
$parsedUrl = parse_url($locationHeader);

// Reconstruct the base URL
$baseUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . ':' . $parsedUrl['port'] . '/';
$opts = array(
  'http'=>array(
    'method'=>"GET",
  
  )
);
$context = stream_context_create($opts);
$f = preg_replace("/(?<=ts).*/", "", file_get_contents($locationHeader));
$g = preg_replace("/.*ts/", "ts.php?ts=".$baseUrl."$0", $f);

echo $g;


// $ch = curl_init();

// // Set the cURL options
// curl_setopt($ch, CURLOPT_URL, 'http://letmein.fun:808/server/load.php?type=itv&action=create_link&cmd=ffmpeg%20http%3A%2F%2Flocalhost%2Fch%2F'.$id.'&JsHttpRequest=1-xml');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
//     'X-User-Agent: Model: MAG250; Link: WiFi',
//     'Referer: http://letmein.fun:808/c/',
//     'Cookie: mac=00:1A:79:76:6D:BE; stb_lang=en; timezone=GMT',
//     'Accept: */*',
//     'Host: letmein.fun:8080',
//     'Connection: Keep-Alive'
// ));

// // Execute the cURL request
// $response = curl_exec($ch);
// echo $response;
// if (curl_errno($ch)) {
//     echo 'Error: ' . curl_error($ch);
// }

// // Close the cURL session
// curl_close($ch);

// // Parse the JSON
// $data = json_decode($response, true);
// // Check if parsing was successful
// if ($data !== null && isset($data['js']['cmd'])) {
//     $cmd = $data['js']['cmd'];
// } else {
//     echo "Unable to extract 'cmd' value from JSON.";
// }
?>


