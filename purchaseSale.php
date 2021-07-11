<?php
session_start();
$data=array();
include("lib.php");
if(isset($_COOKIE["name"]) && $_COOKIE["valid"]=="SET"){
	
	//echo '" . $_SESSION["valid"] . "';
}
else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
//echo $_SESSION["status"];
?>
<?php

if(isset($_REQUEST["pid"])){
	//echo $_REQUEST["email"];
	$sql="select * from product where pid ='".$_REQUEST["pid"]."%'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["uname"]);
	//print_r($data);
	foreach($data as $v){
		echo "<p>";
		echo "Product ID of <b>".$v["pid"]."</b> is ".$v["pname"];
		echo "</p>";
	}
	if(sizeof($data)==0)
		echo "Not found";
}
?>