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

$dotPos=strpos($_REQUEST["email"],".");
$atPos=strpos($_REQUEST["email"],"@");

if(strlen($_REQUEST["cName"])==0){
	echo "<p style='color:red'>Provide Valid Name!</p>";
}
else if(strlen($_REQUEST["gender"])==0){
	echo "<p style='color:red'>Select Gender!</p>";
}
else if(strlen($_REQUEST["address"])==0){
	echo "<p style='color:red'>Provide address</p>";
}
else if(strlen($_REQUEST["email"])==0){
	echo "<p style='color:red'>Provide email info</p>";
}
else if(strlen($_POST["phn"])<11){
	echo "<p style='color:red'>Provide Valid Phone Number!</p>";
}

else if($atPos>$dotPos){
	echo "Invalid Email ! Please Give correct email ! ";
}
else{
	
	$sql="update customer set Name='".$_REQUEST["cName"]."',Gender='".$_REQUEST["gender"]."',Phone='".$_REQUEST["phn"]."',Address='".$_REQUEST["address"]."',email='".$_REQUEST["email"]."',DOB='".$_REQUEST["bday"]."' where username='".$_SESSION["USERNAME"]."'";
	//loadFromMySQL($s);
	$conn = mysqli_connect("localhost", "root", "","webtech");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$c=mysqli_affected_rows($conn);
	//echo $sql;
	
	echo "Update Request Status : 
	</br>
	</br>
	</br>
	<table border='2px' align=middle>
		<tr>
			<td>Name</td> <td>Phone</td> <td>Gender</td> <td>Address</td> <td>Date of Birth</td> <td>email</td>
		</tr>
		<tr>
			<td>'".$_REQUEST["cName"]."'</td> <td>'".$_REQUEST["phn"]."'</td> <td>'".$_REQUEST["gender"]."'</td> <td>'".$_REQUEST["address"]."'</td> <td>'".$_REQUEST["bday"]."'</td> <td>'".$_REQUEST["email"]."'</td>
		</tr>
	</table>";
	//header("Location:profile.php");
}

?>
<br>
<br/><a href="customerprofile.php">ok</a><br/>