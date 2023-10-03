<?php

$v= $_GET['v'];
$url= "https://pipcast.cc/embed.php?v=".$v."&vw=100%&vh=100%";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Referer: https://crichdplayer.xyz/",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

function lpcode($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
     }
     $start="source: '";
     $end="',";
     $myoutput=lpcode($resp,$start,$end);

$shikari = str_replace('"','',$myoutput);
$shikari1 = str_replace(',','',$shikari);
$shikari2 = stripslashes($shikari1);


// Remove "https://"
$url3 = str_replace("https://", "", $shikari2);
$oglink2 = "https://".$url3;


//lp code
function lpcode1($string1, $start1, $end1){
    $string1 = ' ' . $string1;
    $ini1 = strpos($string1, $start1);
    if ($ini1 == 0) return '';
    $ini1 += strlen($start1);
    $len1 = strpos($string1, $end1, $ini1) - $ini1;
    return substr($string1, $ini1, $len1);
     }
     $start1='https://';
     $end1=$v.".m3u8";
     $oglink=lpcode1($shikari2,$start1,$end1);

$save='https://'.$oglink;




//new curl

$curl1 = curl_init($oglink2);
curl_setopt($curl1, CURLOPT_URL, $oglink2);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);

$headers1 = array(
   "Referer: https://pipcast.cc/",
);
curl_setopt($curl1, CURLOPT_HTTPHEADER, $headers1);
//for debug only!
curl_setopt($curl1, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl1);
curl_close($curl1);

//hls setup and hls//
$cc= "?=".$v;
$elink = $save;
$opts = array(
  'http'=>array(
    'method'=>"GET",
    
  )
);
$context = stream_context_create($opts);
$f = preg_replace("/(?<=ts).*/", "", $resp1);
$g = preg_replace("/(".$cc.").*ts/", $elink."$0", $f);



echo $g.PHP_EOL;

?>