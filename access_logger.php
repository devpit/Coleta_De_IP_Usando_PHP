<?php

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
  $ipaddr = $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ipaddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ipaddr = $_SERVER['REMOTE_ADDR'];
}

if (strpos($ipaddr, ',') !== false) {
  $ipaddr = preg_split("/\,/", $ipaddr)[0];
}

date_default_timezone_set('America/Sao_Paulo');
$dataHora = date('H:i - d/m');

$fp = fopen('./temp/config-acess.txt', 'a');
fwrite($fp, "IP: " . $ipaddr . "\r\n" . "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . " \r\n" . "Hora: " . $dataHora . "\n\n");
fclose($fp);
?>
