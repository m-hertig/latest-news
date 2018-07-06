<?php
header('Content-type: application/xml');

// $ip = $_SERVER['REMOTE_ADDR'];
// $data = file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip);
// $data = json_decode($data);
// $country = $data->geoplugin_countryCode;
// $lang = $_REQUEST['lang'];
$url ='https://news.google.com/news?output=atom&ned=de_ch'.$country;
$handle = fopen($url, "r");

if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
