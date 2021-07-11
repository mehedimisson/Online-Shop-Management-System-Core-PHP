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
	if($_SESSION["status"]==1)
	{
		?><table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp; &emsp;
				Admin Profile Panel :
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="AdminHome.php">Admin Home</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;
				
				<a href="ChangePassword.php">Change Password</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				
				<a href="profile.php">Profile</a>
				
			</td>
			<td height="20px" bgcolor="grey"align="right">
				<img width="35px" height="38px" src="pictures/logOut.png">
				<a href="logout.php"><font color="white">Log Out</font></a>	
			</td>
		</tr>
</table> <?php
	
	}
	else {
		?>
		<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp; &emsp;
				Customer Home :
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="CustomerHome.php">Customer Home</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;
				
				<a href="ChangePassword.php">Change Password</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				
				<a href="profile.php">Profile</a>
				
			</td>
			<td height="20px" bgcolor="grey"align="right">
				<img width="35px" height="38px" src="pictures/logOut.png">
				<a href="logout.php"><font color="white">Log Out</font></a>	
			</td>
		</tr>
</table>
<?php
	}
 ?>


<script type="text/javascript">
function validate(){
	var flag=true;
	
	
	var pass=document.frm.pss.value;
	var cpass=document.frm.cpss.value;
	
	var str="";
	if(pass.length<8){
		flag=false;
		str="Provide Strong Password !";
	}
	else if(pass!=cpass){
		flag=false;
		str="passworods must match";
	}
	
	document.getElementById("msg11").innerHTML=str;
	return flag;
}
	
	function password(){
	var un=document.frm.pss.value; //document=DOM object
	if(un.length<8){
		document.frm.pss.style.color="red";
		//document.frm.pss.style.border="1px solid red";
		document.getElementById("msg2").innerHTML="Provide Strong Password";
	}
	else{
		document.frm.pss.style.color="black";
		document.getElementById("msg2").innerHTML="valid Password";
	}
	}
	
</script>

<form action="changed.php" name="frm" method="post"> <pre>
		<Title>
		Change Password
		</title>				
		
		<table border="1px" align="center">
		<tr>
		<td align="center">
			</br>
			
			New Password:
			<input onkeyup="password()" type="password" name="pss" id="pass"> <span id="msg2"></span> <br/> <br/> 
			
			&emsp;
			Confirm Password:
			<input type="password" name="cpss" >&emsp; <br/> <br/>
			
			<p> <input type="submit" onclick="return validate()" name="sbt" value="Confirm" /><br> </p>
			<span id="msg11"></span>
			</td>
			</table>
			

	</pre>
</form>