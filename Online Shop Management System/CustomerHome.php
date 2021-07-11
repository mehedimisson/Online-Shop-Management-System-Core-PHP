<form action="OrderProduct.php" method="post">
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
$s="select * from customer where username='".$_SESSION["uname"]."'";
loadFromMySQL($s);
?>
<title>Customer Home</title>

	<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
		<tr>
			<td width="20%" height="60px" align="center"><font size="10px" color="dodgerblue"><b>Welcome, <?php echo $_SESSION["uname"]; ?></b></font></td>
		</tr>
		<tr>
			<td align="center"><b> <img src="<?php echo $data[0]["url"]; ?>" width="200px" height="200px" > </b></font></td>
		</tr>
	</table>
	
	<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp; &emsp;
				Customer Profile  :
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="ChangePassword.php">Change Password</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				<a href="customerProfile.php">Profile</a>
				
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				<a href="History.php">History</a>
				
			</td>
			<td height="20px" bgcolor="grey"align="right">
				<img width="35px" height="38px" src="pictures/logOut.png">
				<a href="logout.php"><font color="white">Log Out</font></a>	
			</td>
		</tr>
	</table>
	
	
	
	
	
	
	
	
	
	<table border="1px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#B2C095" align="center">
				 <br/></br>
				</td>
				<td align="center">
							
			<a href="OrderProduct.php">Place Order</a>
			</td>
	
			</td>
		</tr>
	</table>
</form>