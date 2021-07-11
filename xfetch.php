<?php
$data=array();
include("XMLlib.php");
if(isset($_REQUEST["uname"])){
	loadFromXML($_REQUEST["uname"]);
	
	foreach($data as $v){
		echo "<p>";
		echo $v["price"];
		echo "</p>";
	}
}

?>