<?php
header("Access-Control-Allow-Origin: *");
include_once("../config.php");

if(isset($_POST['content']))
{
$date = date("dm"); 
$daterand = date("s");
$img7 = '';
$img8 = ++$img7;
$karotdir = '.nk';
$range_start = 0;
$range_end   = 9;
$random_string = "";
$rand = bin2hex(mcrypt_create_iv(4, MCRYPT_DEV_RANDOM));
$random_string_length = 1;
for ($i = 0; $i < $random_string_length; $i++) {
  $ascii_no = round( mt_rand( $range_start , $range_end ) ); 
  $random_string .= chr( $ascii_no );
}
$img10 = $date.$rand;
file_put_contents($img10, $_POST['content']);

$pretoken = $img10;
$md5 = md5($pretoken);
$cpu1 = bin2hex($pretoken);
$cpu2 = $cpu1 * 0.23;
$aftmd5 = md5($cpu2);
$enc = MCRYPT_SERPENT;
$mode = MCRYPT_MODE_CBC;
$salt = pack('H*', $fingerprint);
$crypto = bin2hex(mcrypt_encrypt($enc, $aftmd5, $pretoken, $mode, $salt));
$line = $crypto;
$erasekey = substr($line,5,11);

file_put_contents($file, $erasekey . PHP_EOL, FILE_APPEND);
}
else
{
echo 'Something fucked';
}
?> 
