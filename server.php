<?php
$flag=0;
session_start();

		$conn = mysqli_connect("localhost", "root", "","webtech");
		$sql="select * from login where username='".$_REQUEST["uname"]."'";
		//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		while($row = mysqli_fetch_assoc($result)) {
			
			$temp["uname"]=$row["username"];
			$temp["pass"]=$row["password"];
			$temp["status"]=$row["status"];
			$_SESSION["uname"]=$temp["uname"];
			$_SESSION["status"]=$temp["status"];
			//$data[]=$temp;
			
			if($_REQUEST["uname"]==$temp["uname"] && md5($_REQUEST["pass"])==$temp["pass"])
			{				
				$flag=1;
				
				break;
			}
			else
			{	
				$flag=0;			
			}
		}
if($flag==0){
	echo "<p style='color:red'>Not Valid </p>";
	?>
	<a href="login.php">Login</a>
	<?php
} 
else if($flag==1){
	
	
	setcookie("name",'" . $_REQUEST["uname"] . "',time()+50000);
		setcookie("pass",'" . $_REQUEST["pass"];. "',time()+50000);
		//$_Se
		setcookie("valid","SET",time()+50000);
	if($_SESSION["status"]==1){
	header("Location:AdminHome.php");}
	else {
		header("Location:CustomerHome.php");
	}
}

?>