<!DOCTYPE html>
<html>
<head>
	<title>Remove Product</title>
</head>

<?php
	$data=array();
	include("db/lib.php");
	$s="delete from admin where username='".$_GET["username"]."'";
	loadFromMySQL($s);
	$s="delete from login where username='".$_GET["username"]."'";
	loadFromMySQL($s);
	header("Location:viewAdmin.php");
	 ?>
</html>