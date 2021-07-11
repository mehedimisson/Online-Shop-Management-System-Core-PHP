<?php
session_start();
$data=array();
include("db/lib.php");
$file=fopen('products.txt','a') or die("fle open error");
$c=0;

if(strlen($_REQUEST["pn"])==0 || strlen($_REQUEST["pr"])==0 || strlen($_REQUEST["qnty"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pr"]== 0){
	echo "Price Can't be Zero";
}

else{
	$s="update product set pname='".$_REQUEST["pn"]."' ,price ='".$_REQUEST["pr"]."', quantity='".$_REQUEST["qnty"]."' where pid='".$_SESSION["ProductID"]."'";
	loadFromMySQL($s);
		
	echo $s;	
	echo "<br/>";
	echo $_REQUEST["pn"]." added successfully !";
	header("Location:viewProduct.php");
}

?>
<br/><a href="AdminHome.php">Back</a><br/>