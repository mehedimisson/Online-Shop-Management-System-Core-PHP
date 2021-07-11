<!DOCTYPE html>
<html>
<head>
	<title>Remove Product</title>
</head>

<?php
	$data=array();
	include("db/lib.php");
	$s="delete from product where pid='".$_GET["pid"]."'";
	loadFromMySQL($s);
	header("Location:viewProduct.php");
	 ?>
</html>