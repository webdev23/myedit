<?php
//~ error_reporting(0);
include_once("config.php");

$id = $_REQUEST["id"];
$todel = $ServerHost.'/fake/'.$id;
echo $todel;
$cache = $ServerHost.'/cache/cache.'.$id;
$token = $_REQUEST["key"];
$pretoken = $id;
$md5 = md5($pretoken);
$cpu1 = bin2hex($pretoken);
$cpu2 = $cpu1 * 0.23;
$aftmd5 = md5($cpu2);
$enc = MCRYPT_SERPENT;
$mode = MCRYPT_MODE_CBC;
$salt = pack('H*', $fingerprint);
$crypto = bin2hex(mcrypt_encrypt($enc, $aftmd5, $pretoken, $mode, $salt));
$erasekey = substr($crypto,5,11);
if ($erasekey!=$token) {
echo 'Token invalid or page already deleted';
} 
else {
fclose($todel);		
fclose($cache);
unlink($todel);
unlink($cache);
echo 'Page destroyed';
}

