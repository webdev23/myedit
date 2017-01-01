 <?php
 $url = $_REQUEST["url"];
 echo '
 <meta http-equiv="refresh" content="0;URL=&#39;mailto:?subject=Hello!&body='.$url.'&#39;" /> 
 ';
 ?>
