<?php 
header('Content-Type: text/html; charset=utf-8');
include_once("config.php");

  $custlang = "?speak=en";
  $varlang = "&speak=en";
if ($_REQUEST['parle'] == fr ){
	$custlang = "?parle=fr";
	$varlang = "&parle=fr";
include_once("langs/fr_lang.php");}
else( include_once("langs/en_lang.php"));
if ($_REQUEST['speak'] == en ){
include_once("langs/en_lang.php");
	$custlang = "?speak=en";
	$varlang = "&speak=en";
}
if ($_REQUEST['hablo'] == es ){
include_once("langs/es_lang.php");
	$custlang = "?hablo=es";
	$varlang = "&hablo=es";
}
?>

<head>
 <meta name="viewport" content="width=device-width,initial-scale=1" id="viewport-meta" />
 <link rel="stylesheet" href="img/myeditIo.css" />
 <script src="js/zepto.js"></script>
 
 		<meta name="keywords" content="web editor modificator internet create tool expression INTERNET! anonymous editor gorafi sans-frontières">
        <meta name="description" content="Live internet editor. Modify any web-page and create a link with your edit.">
        <meta property="og:description" content="Nous modifions authentiquement INTERNET et publions vos changements, depuis 1752!">
        <meta name="subject" content="Live internet editor. Modify any web-page and create a link with your edit.">
        <meta name="copyright" content="Live internet editor. Modify any web-page and create a link with your edit.">
        <meta name="language" content="FR, EN, ES">
        <meta property="og:title" content="Live internet editor. Modify any web-page and create a link with your edit.">
        <meta property="og:url" content="<?php echo $ServerAdress ?>">        
        <meta property="og:image" content="<?php echo $ServerAdress ?>/img/io.png">       
        <link rel="image_src" href="<?php echo $ServerAdress ?>/img/io.png">
        <meta name="robots" content="index,follow">
        <meta name="revised" content="2014">
        <meta name="abstract" content="Live internet editor. Modify any web-page and create a link with your edit.">
        <meta name="Classification" content="Editor">
        <meta name="author" content="Anonymous">
        <meta name="designer" content="Anonymous">
        <meta name="copyright" content="wtf">
        <meta name="reply-to" content="">
        <meta name="owner" content="Anonymous">
        <meta name="url" content="<?php echo $ServerAdress ?>">
        <meta name="identifier-URL" content="<?php echo $ServerAdress ?>">
        <meta name="directory" content="editor submission">
        <meta name="category" content="editor submission">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="1 days">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
<div id="index">
<div id="bar">	
	<span id="barctrlsctzL">
		<a href="<?php echo $ServerAdress ?>" alt="@www"><span id="leftcolor">@</span><span id="rightcolor">www</span></a>
		<a id="showhow" href="<?php echo $lang_howitLink;?>" alt="Discover how it work" onclick="">
		<span id="leftcolor"><?php echo $lang_howit1;?>
		</span>
		</a>
		
		
<span class="flagzz">
	<a id="eng" href="?speak=en"><img src="img/en_flag.png" class="flagzzz" title="en"></a>
	<a href="?parle=fr"  id="Lfr"  onclick="location.replace('<?php echo $custlang;?>')"><img src="img/fr_flag.png" class="flagzzz"title="fr"></a>
	<a href="?hablo=es"><img src="img/es_flag.png" class="flagzzz" title="es"></a>&nbsp;</span>
    		
		
<span id="cssmenu">
<ul>
<li><i>&darr;</i>
<ul>
<li class="downmenu prems">
<a onclick="launchFullscreen(document.documentElement)+fulzz();" id="fulzz" style="cursor:pointer;"><?php echo $lang_fulzz; ?></a>
<a onclick="cancelFullscreen()+hidzz();" id="hidzz"><?php echo $lang_hidzz; ?></a>
</li>
<li class="downmenu">
<a ondragend="this.click();" title="Drag me on your bookmark bar for later direct access"
href="javascript:void(window.location='https://ponyhacks.com/@/www/?load=now&url='+encodeURIComponent(window.location.href)+'&t='+prompt('Titre'));">Bookmarklet</a>
</li>
<li  class="downmenu">
<a style="cursor:pointer;" onclick="fly()">Valley background</a>
</li>         
</ul>
</li>
</ul>
</span>   
		
		</span>
	<span id="loadimgbar" style="text-align:center;display:none;margin:1px 0 0 0">&nbsp;&nbsp;&nbsp;&nbsp;Sélecteur d'image: <input type='file' id="imgupgtrs2000"/>
	&nbsp;<button onmouseover="" type="button" onclick="arebelongtoUs()+setloadz()"><img src="img/lock.png"><?php echo $lang_save; ?></button>
	</span>
	

   <img style="text-align:center" id="imgcitroenBX" src="" />
 </div>
 
<h4 class="semititl"> <?php echo $LABEL_MENU; ?><span class="blink">.</span></h4>
<br>

<div id="howbody">
 </div>
 
<div class="controls">
 </div><br><br><br><br><br><br><br><br>

<br><br><br><br><br>
<div id="fakebody">
	<form>
		<input type="text" id="put" type="url" placeholder="<?php echo $lang_input; ?>" name="url" value="<?php echo $_REQUEST["url"] ?>"/>
		<input type="text" id="titre" type="url" placeholder="<?php echo $lang_inputB; ?>" name="title" value="<?php echo $_REQUEST["t"] ?>"/>
		<span id="edb"><small>Edit title </small><input onmouseover="" type="checkbox" autocomplete="on" checked="false" style="cursor:pointer" id="titreon" ></input></span>
	 <div id="ctrlsbuttz">
		<input type="hidden" id="titz" name="t" value="&t=yes">
	</form>
	
	<button onmouseover="" href="#herebro" type="submit" id="urlclick"><img style="margin:0 5px 0 0" src="img/go.png"/><?php echo $lang_launch; ?></button>
		&nbsp;<button onmouseover="" type="button" id="setthis" onclick="arebelongtoUs()+setloadz()"><img src="img/lock.png"><?php echo $lang_save; ?></button>
		 <p><br>
 </div>

<div id="loadimgXXX">&nbsp;&nbsp;Sélecteur d'image: <input type='file' id="imgupgtrs2000" />
   </div>
	&nbsp;<img id="imgcitroenBX" draggable="true" src="" />
	 </div>
 
<div id="dot" style="position:absolute;top:336px;left:0px;">
   </div>
 
<div class="loadz" onmouseover="" style="display:none">
   </div>
 
<div id="frmzcontainz">
	<iframe allowfullscreen frameborder="0" width="100%" scrolling="no" src="" id="frmz686780" ></iframe><br>
  </div>

<a style="float:right;position:fixed;right:16px;bottom:0px" href="https://ponyhacks.com">@nk:2015/2016 ponyhacks.com</a>

<!-- <a style="float:right" id="viewmobile">Vue mobile</a> --> 


<?php 

echo '
<script>
window.smoothScrollTo = (function () {
  var timer, start, factor;
  return function (target, duration) {
    var offset = window.pageYOffset,
    delta  = target - window.pageYOffset; 
    duration = duration || 1900; 
    start = Date.now(); 
    factor = 0;   
    if( timer ) {
      clearInterval(timer);
    }
    
function step() {
      var y;
      factor = (Date.now() - start) / duration; 
      if( factor >= 1 ) {
        clearInterval(timer);
        factor = 1;
      } 
      y = factor * delta + offset;
      window.scrollBy(0, y - window.pageYOffset);
    }   
    timer = setInterval(step, 10);
    return timer;
  };
}());

rnm = "";
$("#titreon").click(function(){
    if (this.checked) {
        rnm = "&rename=on"
    }
    else {rnm = "&rename=off";}
});
 
if($("#titreon").prop("checked"))
    rnm = "&rename=on"
else rnm = "&rename=off";
';

if ($_REQUEST["edit"] == off ){
  echo '	
document.getElementById("urlclick").onclick = function() {
var tt1 = "";
var editoff = "&edit=off";
    $(".loadz").css("display", ""); 
    $("#frmz686780").css("height", "100%");
    $("#frmzcontainz").css("height", "960px");
    $("#frmz686780").attr("scrolling", "yes");
    $("#closedesk").css("display", "none"); 
    document.getElementById("frmz686780").src = "p.php?url="+$("#put").val()+$("#titz").val()+"&title="+$("#titre").val()+rnm+editoff;
    smoothScrollTo(document.getElementById("dot").offsetTop);
    return false;    
  }';
}
else {
 echo '	
document.getElementById("urlclick").onclick = function() {
var tt1 = "";
    $(".loadz").css("display", ""); 
    $("#frmz686780").css("height", "100%");
    $("#frmzcontainz").css("height", "960px");
    $("#frmz686780").attr("scrolling", "yes");
    $("#closedesk").css("display", "none"); 
    document.getElementById("frmz686780").src = "p.php?url="+$("#put").val()+$("#titz").val()+"&title="+$("#titre").val()+rnm;
    smoothScrollTo(document.getElementById("dot").offsetTop);
    return false;    
  }';
  }; 
  
echo '</script>';  
  
?> 


<script> 
function arebelongtoUs() { 
  document.getElementById('frmz686780').contentWindow.allyourbase();
};

function editzzfzz() { 
  $('#frmz686780').contentWindow.gofulzzeditzz();
};

$(document).ready(function(){
  $("#exp").click(function(){
    $("#explique").toggle();
  });
});

$(document).ready(function () { $('#frmz686780').on('load', function () { $('.loadz').hide() }); });

function setloadz() { 
	 $('.loadz').css('display', ''); 
};

function setloadzz() { 
	 $('.loadz').css('display', '');   
};

function closeload() { 
	 $('.loadz').css('display', 'none'); 	  
};

$('.loadz').click(function() {
	 $('.loadz').css('display', 'none'); 
});

window.hidefrmz = function () {
};

window.rszfrmz = function () {
  var heigee = document.getElementById('frmz686780').contentWindow.getszz();
  $('#frmzcontainz').css('height', heigee);
};

function readImage(input) {
    if ( input.files && input.files[0] ) {
        var FR= new FileReader();
        FR.onload = function(e) {
			$('#imgcitroenBX').css('display', 'block'); 
             $('#imgcitroenBX').attr( "src", e.target.result );
        };       
        FR.readAsDataURL( input.files[0] );
    }
};

$("#imgupgtrs2000").change(function(){
    readImage( this );
});

$('#yousaidlunch').click(function() {
  $('#frmzcontainz').css({
      position:'absolute',
      top: $(window).scrollTop(),
      left: 0,
      height: '100%',
      width: '100%'
  });
   $('#yousaidcloseenough').css({
      display:block,    
  }); 
   $('#yousaidlunch').css({
      display:none,      
  }); 
});

function launchFullscreen(element) {
  if(element.requestFullScreen) {	
    element.requestFullScreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }
};

function fulzz(){
		$('#fulzz').css('display', 'none'); 
	$('#hidzz').css('display', 'block');
	};
	
function hidzz(){
		$('#fulzz').css('display', 'block'); 
	$('#hidzz').css('display', 'none');
	};
	
function cancelFullscreen() {
  if(document.cancelFullScreen) {
    document.cancelFullScreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitCancelFullScreen) {
    document.webkitCancelFullScreen();
  }
};

$( "#titre" ).change(function() {
if($("#titre").val().length > 2)
  $( "#titreon" ).prop( "checked", true );
else 
  $( "#titreon" ).prop( "checked", false );
});
		
$(document).ready(function() {  
  $(window).scroll(function () {
    if ($(window).scrollTop() > 280) {
      $('#bar').css('position', 'fixed');
      $('#loadimgbar').css('display', 'block');
      $('#barctrlsctzR').css('margin', '-50px 0 0 0');
      $('#imgcitroenBX').css('opacity', '.88');
    }
    if ($(window).scrollTop() < 281) {
      $('#bar').css('position', 'absolute');
      $('#loadimgbar').css('display', 'none');
      $('#barctrlsctzR').css('margin', '0 0 0 0');
      $('#imgcitroenBX').css('opacity', '0');   
    }
  });
});

var viewport_meta = document.getElementById('viewport-meta');
var viewports = {
		default: viewport_meta.getAttribute('content'),
		landscape: 'width=960px,initial-scale=.6'
	};
var viewport_set = function() {
		if ( screen.width > 381 )
			viewport_meta.setAttribute( 'content', viewports.landscape );
		else
			viewport_meta.setAttribute( 'content', viewports.default );
	}
viewport_set();
window.onresize = function() { 
	viewport_set(); 
}

// Session storage
 var field = document.body.innerHTML;
 if ( sessionStorage.autosave ) {
     field = sessionStorage.autosave;
 }
 setInterval(function(){
     sessionStorage.autosave = document.body.innerHTML;
 }, 30000);
</script>

<script src="js/iframeResizer.js"></script>

<script>
iFrameResize({
	log                     : false,              
	enablePublicMethods     : true,                 
	resizedCallback         : function(messageData){ 
		$('p#callback').html(
			'<b>Frame ID:</b> '    + messageData.iframe.id +
			' <b>Height:</b> '     + messageData.height +
			' <b>Width:</b> '      + messageData.width + 
			' <b>Event type:</b> ' + messageData.type
		);
	},
	messageCallback         : function(messageData){ 
		$('p#callback').html(
			'<b>Frame ID:</b> '    + messageData.iframe.id +
			' <b>Message:</b> '    + messageData.message
		);
		alert(messageData.message);
	},
	closedCallback         : function(id){
		$('p#callback').html(
			'<b>IFrame (</b>'    + id +
			'<b>) removed from page.</b>'
		);
	}
});


function fly() {
	$("#index").css("background-image", "linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%), url('./img/gre.jpeg');");
	};fly();
	
	
</script>


<?php echo '

<script>
var ajaxhow = "'.$ServerAdress.'/langs/howit.php'.$custlang.'";
$(document).ready(function(){
  $("#showhow").click(function(){
	  $("#fakebody").css("display", "none"); 
	  $("#howbody").css("display", "block");
	  $("#index").css("position", "scroll");
	  document.getElementById("Lfr").setAttribute("href", "?help=me&parle=fr");
      $.ajax({url:ajaxhow,success:function(result){
      $("#howbody").prepend(result);
    }});
  });
});</script>
';

echo '<script>
var ajaxPGP= "'.$ServerAdress.'langs/sub/contact_PGP.php'.$custlang.'";
$(document).ready(function(){
  $("#PGPmail").click(function(){
	  $("#fakebody").css("display", "none"); 
	  $("#howbody").css("display", "block");
	  $("#howbody").css("height", "550px");
	  $("#index").css("position", "scroll");
      $.ajax({url:ajaxPGP,success:function(result){
      $("#howbody").prepend(result);
    }});
  });
});</script>
';

if ($_REQUEST['load'] == now ){
echo '<script>document.getElementById("urlclick").click();
      $("#bar").css("position", "fixed");
      $("#loadimgbar").css("display", "block");
      $("#barctrlsctzR").css("margin", "-50px 0 0 0");
      $("#imgcitroenBX").css("opacity", ".88");
</script>';
echo ' <script> $("#explique").toggle() ;</script>;
';
};

if ($_REQUEST['help'] == "me"){
	echo'<script>
	  $("#fakebody").css("display", "none"); 
	  $("#howbody").css("display", "block");
	  $("#index").css("position", "scroll");
      $.ajax({url:ajaxhow,success:function(result){
      $("#howbody").prepend(result);
       }});	
	</script>';
};
?>
</body> 
