<?php

// Start Rate LTC From BX
$url_str = 'http://nikyuu.myds.me:57/getinfo.php?action=alarm';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url_str);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING ,"utf-8");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
$data = curl_exec($ch);
curl_close($ch);
echo $data;

?>
