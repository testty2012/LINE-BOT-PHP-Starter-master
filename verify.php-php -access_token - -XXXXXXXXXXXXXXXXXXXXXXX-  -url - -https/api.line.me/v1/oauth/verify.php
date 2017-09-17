<?php
$access_token = 'PI9lOPkN3Zd0GiAquYBes5GpPnxxg8SwOq40gtbPOaf1L4WJCTM13lcoKr9uXDzx7dDGCVD2lF1tGKJM8/Itxbe12nz8vrO+vUYs3IePx2nrrWfVev1WHLrtneyWgRCXta0bpbnjoAeHxuyHav3plAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
