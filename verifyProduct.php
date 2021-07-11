<?php
session_start();
$data=array();
include("db/lib.php");
if(strlen($_REQUEST["pn"])==0 || strlen($_REQUEST["pr"])==0 || strlen($_REQUEST["qnty"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pr"]== 0){
	echo "Price Can't be Zero";
}

else{
	$s="insert into product (pname,price,quantity) values('".$_REQUEST["pn"]."','".$_REQUEST["pr"]."','".$_REQUEST["qnty"]."')";
	loadFromMySQL($s);
		
	echo $s;	
	echo "<br/>";
	echo $_REQUEST["pn"]." added successfully !";
	header("Location:viewProduct.php");
}

?>
<br/><a href="AdminHome.php">Back</a><br/>