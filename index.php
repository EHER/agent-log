<?php 

$filename = 'log.txt';
$dateTime = date("d/m/Y H:i:s");

echo $log = json_encode(
    array(
        'dateTime' => $dateTime,
        'remoteAddress' => $_SERVER['REMOTE_ADDR'],
        'userAgent' => $_SERVER['HTTP_USER_AGENT'],
        'name' => (string) $_GET['name'],
    )
) . "\n";

$fp = fopen($filename, "a+");
fputs ($fp, $log);
fclose ($fp);
