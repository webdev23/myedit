<?php
//~ error_reporting(0);
include_once("config.php");

$handle = curl_init();
$url = $_REQUEST['url'];
$domain = preg_replace("(^https?://)", "", $url );
$newtitl = $_REQUEST["title"];
$header = array('Accept-Language: fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3');
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLINFO_HEADER_OUT, 1);
curl_setopt($handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:41.0) Gecko/20100101 Firefox/41.0.1');
curl_setopt($handle, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($handle, CURLOPT_NOSIGNAL, true);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, false); 
curl_setopt($handle, CURLOPT_HTTPHEADER, $header); 
curl_setopt($handle, CURLOPT_HEADER, false);

header('Content-Type: text/html');
header("Access-Control-Allow-Origin: *");

echo '<script src="js/zepto.js"></script>';
echo '<script src="js/keypress.js"></script>
      <script src="js/iframeResizer.contentWindow.js"></script>
      <meta name="viewport" content="width=340, initial-scale=0.85">'; 
echo'<base href="//'.$domain.'">';
echo'<meta property="og:url" content="&nbsp;&nbsp;'.$url.'">';
echo'<meta property="og:title" content="&nbsp;'.$url.'">';
echo'<meta name="author" content="'.$domain.'">';
echo'<meta name="url" content="'.$url.'">';
echo'<karot property="title" content="'.$newtitl.'">';
echo'<karot property="description" content="">';
echo'<karot property="url" content="'.$domain.'">';
echo'<style>body {background-color:#fff;overflow: hidden !important}</style>';

$result = curl_exec($handle);
var_dump($result);


if ($_REQUEST['edit'] == off ){
echo '<script>document.designMode = "off";</script>';
}
else {
	echo '<script>document.designMode = "on";</script>';
};

//~ echo '<script>document.body.innerHTML.replace(/http\:/gi, '');</script>';

echo '
	<form id="yeahbrotherthisform">
		 <input type="submit" id="NoWaythisIdExistAlready" style="display:none"/>
		 </form>
	<script>
		(function()
		{
		$("#yeahbrotherthisform").submit(function()
		    {
		        $.post("'.$ServerAdress.'/fake/set.php",
		        {
		        content:document.documentElement.innerHTML,
		        }, function(data)
		        {
		        if(data)
		        {
		        console.log(data)
		        } 
		        window.location = "'.$ServerAdress.'/fake/gtlstfl.php"   
		        });
		        return false;
		    });
		})();
		
		function allyourbase() {
		document.getElementById("NoWaythisIdExistAlready").click();
		};
		
		var listener = new window.keypress.Listener();
		listener.simple_combo("ctrl shift s", function() {
		    allyourbase();
		});
		listener.sequence_combo("o k", function() {
		    allyourbase(); 
		}, true);
	
	</script>
';

echo '<input style="display:none" type="text" name="titlepagebroO" id="titlepagebro" value="'.$newtitl.'">';

if ($_REQUEST['rename'] == on ){
	echo '<script>$("title").text("'.$newtitl.'");</script>';
	echo '<script>$("h1").text("'.$newtitl.'");</script>';
	echo '<script>$("h2").text("'.$newtitl.'");</script>';
	echo '<script>$("h3").text("'.$newtitl.'");</script>';
};

echo '
	<button id="launchfulzz" onclick="launchFullscreen(document.documentElement);"
	  style="display:none;position:absolute;top:0px;left:0px">Launch Fullscreen</button>
	<script>
		$("img").attr( "ondblclick", "rplcimg(this)");
		 function rplcimg(el) {
		   chsptn = prompt("Replace this image:\nType 1 for URL change\nOr use the file uploader on the top bar\nThen drop wherever you need",  "");
		if (chsptn === "1") {  
		var imu = prompt("Replace image URL by:\n","'.$ServerAdress.'/img/troll_face.png");
		el.src=imu;
		   };
		if (chsptn === "2") { 

		    };
		if (chsptn === "3") {  };
		};   
		                
		function gofulzzeditzz() {
		$("#launchfulzz").click();
		};
		function launchFullscreen(element) {
		  if(element.requestFullScreen) {
		    element.requestFullScreen();
		  } else if(element.mozRequestFullScreen) {
		    element.mozRequestFullScreen();
		  } else if(element.webkitRequestFullScreen) {
		    element.webkitRequestFullScreen();
		  }
		}
		    
		listener.sequence_combo("e d i t", function() {
		karotagain(); 
		}, true);
		listener.sequence_combo("ctrl shift e", function() {
		karotagain(); 
		}, true);
		function karotagain() {
		document.designMode = "on";
		};
		listener.sequence_combo("ctrl shift r", function() {
		karotoff(); 
		}, true);
		function karotoff() {
		document.designMode = "off";
		};
	    
	    
	    
	</script>
';

curl_close($handle);
?>
