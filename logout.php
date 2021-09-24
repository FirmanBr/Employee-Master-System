<?php
session_start();
$_SESSION=array();
session_destroy();
setcookie('PHPSESSID','',time()-3600,'/','',0);
echo"<script language=\"JavaScript\">;
document.location='index.html'</script>";
?>