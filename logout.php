<?php
//session_start();
//unset($_SESSION["valid"]);
session_destroy();
foreach($_COOKIE as $k=>$v){
	setcookie($k,"",time()-20);
}
header("Location:login.php");
?>