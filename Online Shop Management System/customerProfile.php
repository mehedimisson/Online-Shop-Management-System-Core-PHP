<title>Profile </title>
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
?>

<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp;
				<a href="CustomerHome.php">Home</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;
				
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
<form action="uploadCUS.php" align=center method="post" enctype="multipart/form-data" name="mfm"><pre>
<?php 	
	$s="select * from customer where username='".$_SESSION["uname"]."'";
	loadFromMySQL($s);?>
	<table border="0px" width="80%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
		<tr>
			<td><b> <img src="<?php echo $data[0]["url"]; ?>" width="200px" height="200px" > </b></font></td>
			<td>
				<table border="1px">
					<tr>
						<td border="2px">Name</td> <td border="2px">Phone no.</td> <td border="2px">email</td> <td border="2px">Address</td> <td border="2px">Username</td>
					</tr>
					<tr border="1px">
						<td> <?php echo $data[0]["Name"]; ?> </td> <td> <?php echo $data[0]["Phone"]; ?> </td> 
						<td> <?php echo $data[0]["email"]; ?> </td> <td> <?php echo $data[0]["Address"]; ?> </td>
						<td> <?php echo $data[0]["username"]; ?> </td>
						<td> <a href="editCustomerInfo.php?username=<?php echo $data[0]["username"]; ?>"> Edit</a>
					</td>
						
					</tr>
				</table>					
		
	</table>
	<?php
	//echo $data[0]["email"];

?>
	Select file to upload : <input type="file" name="fileToUpload"> <input type="submit" align=middle value="Upload File" name="sbt"></pre>
</form>