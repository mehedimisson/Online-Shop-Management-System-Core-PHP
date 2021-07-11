<?php
$dataSource="mysql";
function loadFromXML($un){
	global $data;
	$data=array();
	$xml=simplexml_load_file("XHTML/cred.xml") or die("Error: Cannot create object");
	//echo count($xml->user);
	foreach($xml->user as $st){
		$ar=array();
		if($un==(string)$st->uname){
			$ar["uname"]=(string)$st->uname;
			$ar["price"]=(string)$st->price;
			$data[]=$ar;
		}
	}
	//print_r($xml);
}
?>