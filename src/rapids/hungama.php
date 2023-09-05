<?php
// URL to send the POST request to
$url = "https://delta.rapidstreams.io/gt.rstrm/";

// Data to send in the POST request
$data = "referer=rapidstreamz&meta=ko4mlQZLLo1SaG3EEpqsEimxHgbqr5Q5UjTW37yN1nd4EE%2BVmDjSSnl5jecOlV%2BmyUMebkKEBnPBenX5FCj5lV5inGc%2FRjK1yEB6EVtBjtdt3EEJzwlusf0knoSgI2vx";

// Headers to include in the request
$headers = [
    "referer: rapidstreamz",
    "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
    "User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; RMX2030 Build/QKQ1.200209.002)",
    "Host: delta.rapidstreams.io",
    "Connection: Keep-Alive",
    "Content-Length: " . strlen($data)
];

// Initialize cURL session
$curl = curl_init($url);

// Set cURL options
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request and get the response
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    echo "cURL Error: " . curl_error($curl);
}

// Close cURL session
curl_close($curl);

// Output the response
header("Location: http://zx.rpstv.xyz:8081/ind2/hungamahindi/playlist.m3u8".$response)
?>
