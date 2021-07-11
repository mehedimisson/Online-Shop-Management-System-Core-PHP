<?php
$data=array();
include("db/lib.php");
if(isset($_REQUEST["uname"])){
	//echo $_REQUEST["email"];
	$sql="select * from product where pid like '".$_REQUEST["uname"]."%'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["uname"]);
	//print_r($data);
	foreach($data as $v){
		echo "<p>";
		echo "Available Quantity of <b>".$v["pname"]."</b> is ".$v["quantity"];
		echo "</p>";
	}
	if(sizeof($data)==0)
		echo "Not found";
}
else if(isset($_REQUEST["email"])){
	$sql="select * from customer where email='".$_REQUEST["email"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["email"]);
	if(sizeof($data)>0)
		echo "Email taken";
	else
		echo "Ok";
}
?>