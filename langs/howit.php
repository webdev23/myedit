<?php
header('Content-Type: text/html; charset=utf-8');

if ($_REQUEST['parle'] == fr ){
	$custlang = "?parle=fr";
include_once("fr_lang.php");}
else( include_once("en_lang.php"));

if ($_REQUEST['speak'] == en ){
include_once("en_lang.php");
$cookie_name = 'en';
$cookie_value = 'en';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
}
if ($_REQUEST['hablo'] == es ){
include_once("es_lang.php");
}

echo $desc;
?>

