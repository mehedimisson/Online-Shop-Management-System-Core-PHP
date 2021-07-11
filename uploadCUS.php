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
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$target="uploads/".$_FILES['fileToUpload']['name'];
if(file_exists($target)){
	$errors=1;
	echo "File exists";
}
else{
	if(move_uploaded_file($source,$target)){
		echo "File uploaded:".$target;
	}
	$s="update customer set url='".$target."' where username='".$_SESSION["uname"]."'";
	loadFromMySQL($s);
	echo $sql;
	header("Location:CustomerHome.php");
}
?>