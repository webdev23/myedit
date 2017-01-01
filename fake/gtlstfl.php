<?php
header('Content-Type: text/html; charset=utf-8');
include_once("../config.php");

if ($_REQUEST['parle'] == fr ){
include_once("../langs/fr_lang.php");}
else( include_once("../langs/en_lang.php"));


if ($_REQUEST['speak'] == en ){
include_once("../langs/en_lang.php");
$cookie_name = 'en';
$cookie_value = 'en';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
};


if ($_REQUEST['hablo'] == es ){
include_once("../langs/es_lang.php");
};

//~ $path = "";

$latest_ctime = 0;
$latest_filename = '';    
$d = dir($path);
while (false !== ($entry = $d->read())) {
$filepath = "{$path}/{$entry}";
    if(is_file($filepath) && filectime($filepath) > $latest_ctime) {
    $latest_ctime = filectime($filepath);
    $latest_filename = $entry;
    }
}
echo '<link rel="stylesheet" href="'.$ServerAdress.'/img/myeditIo.css" />
<style>
body {color:#FAFAFA;background-color:#313732;opacity:.8;text-align:center;margin:0 0 0 20px;font-size:1.2em}
.shaa {margin:1% 16%;cursor:pointer}
.remo {margin:0 26px 0 -43px;cursor:pointer}
#frmz11 {text-align:center}
#finallink {text-align:center}
</style>';

echo '
<br><br>
<h1><big>Une nouvelle page d&#39;internet vient d&#39;être créée!</big></h1>
    <div class="shaa">
<br>

<a id="finallink" style="margin:34px 0 0 0;text-decoration:underline" target="blank" href="'.$ServerAdress.'/v.php?is='.$latest_filename.'">Voici son lien:</a>

<br><br>
<input type="text" autofocus id="put" style="width:370px;font-size:0.66em;margin:0 0 18px -3px" placeholder="" onclick="javascript:this.focus();this.select();" value="'.$ServerAdress.'/v.php?is='.$latest_filename.'"/>
<div></h2>
';

echo '
    <p>
        <a target="_blank" onmouseover href="'.$ServerAdress.'/img/sh_icons/redir/ml.php?url='.$ServerAdress.'/v.php?is='.$latest_filename.'" rel="nofollow"><span style="background-color:red"><img src="'.$ServerAdress.'/img/sh_icons/ml.png"/></span></a>
        <a target="_blank" onmouseover href="sms://?body='.$ServerAdress.'/v.php?is='.$latest_filename.'"><img src="'.$ServerAdress.'/img/sh_icons/sms.png"/></a>
        <a target="_blank" onmouseover href="'.$ServerAdress.'/img/sh_icons/redir/tw.php?url='.$ServerAdress.'/v.php?is='.$latest_filename.'" rel="nofollow"><img src="'.$ServerAdress.'/img/sh_icons/tw.png"/></a>
        <a target="_blank" onmouseover href="'.$ServerAdress.'/img/sh_icons/redir/fb.php?url='.$ServerAdress.'/v.php?is='.$latest_filename.'" rel="nofollow"><img src="'.$ServerAdress.'/img/sh_icons/fb.png"/></a>
        <a target="_blank" onmouseover href="'.$ServerAdress.'/img/sh_icons/redir/gl.php?url='.$ServerAdress.'/v.php?is='.$latest_filename.'" rel="nofollow"><img src="'.$ServerAdress.'/img/sh_icons/gl.png"/></a>

    </div>
';

echo '<script>window.parent.hidefrmz();</script>';

$desactive = "<style>body {overflow:scroll !important}</style><script>document.designMode = 'off';$('#NoWaythisIdExistAlready').css('display', 'none');window.stop();if ($.browser.msie) {document.execCommand('Stop');};</script>";

file_put_contents($latest_filename, $desactive , FILE_APPEND);

$data = file($file,FILE_IGNORE_NEW_LINES);
$lasttoken = $data[count($data)-1];

echo '
<br>
<div class="remo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i>'.$lang_erase.'</i><br><br>
<input type="text" id="put" autofocus style="width:370px;font-size:0.7em" placeholder="" onclick="javascript:this.focus();this.select();" value="'.$ServerAdress.'/kill.php?id='.$latest_filename.'&key='.$lasttoken.'"/>
</div>
';
?>

<style>body {overflow:scroll !important}</style>
<script>
	document.designMode = 'off';$('#NoWaythisIdExistAlready').css('display', 'none');window.stop();if ($.browser.msie) {document.execCommand('Stop');};</script>
