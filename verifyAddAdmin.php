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

else if(strlen($_REQUEST["userCname"])==0){
	echo "<p style='color:red'>Provide Usernamme.</p>";
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

else if(strlen($_POST["pss"])<8){
	echo "<p style='color:red'>Give Strong password!</p>";
}

else if($_POST["pss"] != $_POST["cpss"]){
	echo "<p style='color:red'>Password didn't match !</p>";
}

else if(strlen($_POST["phn"])<11){
	echo "<p style='color:red'>Provide Valid Phone Number!</p>";
}

else if($atPos>$dotPos){
	echo "Invalid Email ! Please Give correct email ! ";
}

else if($_REQUEST["pss"]== 0){
	echo "<p style='color:red'>Provide Valid Password lenth of atleast 8!</p>";
}


else{
	
	$sql="insert into admin (Name,username,Gender,Phone,Address,email,DOB) values('".$_REQUEST["cName"]."','".$_REQUEST["userCname"]."','".$_REQUEST["gender"]."','".$_REQUEST["phn"]."','".$_REQUEST["address"]."','".$_REQUEST["email"]."','".$_REQUEST["bday"]."')";
	echo $sql;
	$conn = mysqli_connect("localhost", "root", "","webtech");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$c=mysqli_affected_rows($conn);
	
	$sql="insert into login values('".$_REQUEST["userCname"]."','".md5($_REQUEST["pss"])."',1)";
	echo $sql;
	$conn = mysqli_connect("localhost", "root", "","webtech");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$c=mysqli_affected_rows($conn);
	
	echo "</br>Login Data imported Successfully !";
	header("location:viewAdmin.php");
}

?>
<br>
<br/><a href="login.php">Back to Login Page</a><br/>