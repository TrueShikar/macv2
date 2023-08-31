<?php
$n = $_GET['n'];
$url = 'http://stb.vooiptv.com:80/play/live.php?mac=00:1A:79:AA:2B:B5&stream='.$n.'&extension=m3u8&play_token=rREBYMtfdv';

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        'User-Agent: HttpCanary/3.3.5',
        'Host: sansat.net:25461',
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
$parsed_url = parse_url($locationHeader);

// Reconstruct the base URL
$elink = $parsed_url['scheme'] . "://" . $parsed_url['host'] . ":" . $parsed_url['port'];




$opts = array(
  'http'=>array(
    'method'=>"GET",
  
  )
);
$context = stream_context_create($opts);
$f = preg_replace("/(?<=ts).*/", "", file_get_contents($locationHeader));
$g = preg_replace("/.*ts/", "ts.php?ts=".$elink."$0", $f);



echo $g;





?>
