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
//echo $_SESSION["status"];
?>
<?php
if(strlen($_REQUEST["pi"])==0){
	echo "<p style='color:red'>Provide Valid Name!</p>";
}
else if(strlen($_REQUEST["qt"])==0){
	echo "<p style='color:red'>Provide Usernamme.</p>";
}
else{
	
	$s="select * from product where pid='".$_REQUEST["pi"]."'";
	loadFromMySQL($s);
	//echo pr
	//var pr=$data[0]["price"];
	$pr=$data[0]["price"];
	//$pn=data[0]["pname"];
	//echo $pn;
	$qq=$_REQUEST["qt"];
	$stock=$data[0]["quantity"];
	if($qq > $stock){
		echo "Out of stock !"; ?>
		<a href=OrderProduct.php>Back</a> <?php
	}
	else{	
	$t= $pr * $qq;
	$s="insert into orders (pid,cususername,quantity,price) values('".$_REQUEST["pi"]."','".$_SESSION["uname"]."','".$qq."','".$t."')";
	loadFromMySQL($s);
	$s="Update product set quantity=quantity-'$qq' where pid='".$_REQUEST["pi"]."'";
	loadFromMySQL($s);
	
	header("location:History.php");
	
}
}

?>