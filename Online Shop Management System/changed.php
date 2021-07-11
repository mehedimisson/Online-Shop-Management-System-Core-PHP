<?php
session_start();
$data=array();
include("db/lib.php");
if(isset($_COOKIE["name"]) && $_COOKIE["valid"]=="SET"){
	
	//echo '" . $_SESSION["valid"] . "';
}
else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
if(strlen($_POST["pss"])<8){
	echo "<p style='color:red'>Give Strong password!</p>";
}

else if($_POST["pss"] != $_POST["cpss"]){
	echo "<p style='color:red'>Password didn't match !</p>";
}


else{	
	$s="update login set password='".md5($_REQUEST["pss"])."' where username='".$_SESSION["uname"]."'";
	//echo $_REQUEST["pss"];
	//echo $_SESSION["uname"];
	loadFromMySQL($s);
	header("Location:logout.php");
}
?>