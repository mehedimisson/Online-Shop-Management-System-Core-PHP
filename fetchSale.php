<?php
$data=array();
include("db/lib.php");
if(isset($_REQUEST["pid"])){
	//echo $_REQUEST["email"];
	$sql="select * from product where pid like '".$_REQUEST["pid"]."%'";
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