<?php
$id = $_GET['id'];
$url = 'http://softott.live:80/play/live.php?mac=00:1A:79:00:07:91&stream='.$id.'&extension=m3u8&play_token=shikari';
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.200',
        'Host: kuchini.site:8080',
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











?>
