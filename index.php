<?php 

$filename = 'log.txt';
$dataTime = date("d/m/Y H:i:s");
echo $log = $dataTime . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\tname=" . (string) $_GET['name'] . "\r\n";

$fp = fopen($filename, "a+");
fputs ($fp, $log);
fclose ($fp);

