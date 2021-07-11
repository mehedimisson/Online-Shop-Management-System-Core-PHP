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
<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp; &emsp;
				Profile Panel :
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="CustomerHome.php">Home</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;
				
				<a href="ChangePassword.php">Change Password</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				
				<a href="customerProfile.php">Profile</a>
				
			</td>
			<td height="20px" bgcolor="grey"align="right">
				<img width="35px" height="38px" src="pictures/logOut.png">
				<a href="logout.php"><font color="white">Log Out</font></a>	
			</td>
		</tr>
	</table>

<script type="text/javascript">

function validate(){
	var flag=true;
	
	var pd=document.frm.pi.value;
	var qty=document.frm.qt.value;
	
	var str="";
	if(pd.length==0){
		flag=false;
		str="must type Product ID";
	} 
	else if(qty.length==0){
		flag=false;
		str="must type Quantity";
	} 
	document.getElementById("msg").innerHTML=str;
	return flag;
}
	
	function P(){
	var un=document.frm.pi.value; //document=DOM object
	if(un.length<1){
		document.frm.pi.style.color="red";
		//document.frm.cName.style.border="1px solid red";
		document.getElementById("msg").innerHTML="Must Type Product ID";
	}
	else{
		document.frm.pi.style.color="black";
		document.getElementById("msg").innerHTML="OK!";
	}
	}
	
	function QT(){
	var un=document.frm.qt.value; //document=DOM object
	if(un.length<1){
		document.frm.qt.style.color="red";
		//document.frm.userCname.style.border="1px solid red";
		document.getElementById("msg1").innerHTML="Must Type Quantity";
	}
	else{
		document.frm.qt.style.color="black";
		document.getElementById("msg1").innerHTML="Ok!";
	}
	}
</script>

<form action="verifyOrder.php" name="frm" method="post"> <pre>
		<Title>
		Order Product
		</title>
		<table align="middle">
		<tr>
		<td>Product ID:<td>
		<td> <input onkeyup="P()" type="text" name="pi" id="txt" > <span id="msg"></span> <br/> </td>
		</tr>
		<tr>
		<td>Quantity::<td>
		<td> <input onkeyup="QT()" type="numqber" name="qt" id="unn" > <span id="msg1"></span></td>
		</tr>
		<tr> <td> <p> <input type="submit" onclick="return validate()" name="sbt" value="Place Order" /> </p>
			<span id="msg"></span>
			</td> </tr>
			</table>	

	</pre>
</form>


<?php 
//session_start();
//if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
//if(isset($_COOKIE["name"]) && $_COOKIE["valid"]=="SET"){
	$conn = mysqli_connect("localhost", "root", "","webtech");
	$sql="select * from product";?>
<table>		
		<?php
		//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));?>
		
			<tr border="2px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#4BBAD7">
				<td>
					<?php echo "Product ID"; echo str_repeat("&nbsp;",6); ?>
				</td>
				<td>
					<?php echo "Product Name";echo str_repeat("&nbsp;", 26); ?>
				</td>
				<td>
					<?php echo "Price"; echo str_repeat("&nbsp;",12); ?>
				</td>
				</tr>
		 <?php
		
		//echo "Product ID"; echo str_repeat("&nbsp;",6); 
		 
		 
		
		while($row = mysqli_fetch_assoc($result)) {
			?>
			
			<tr border="2px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
				<td>
					<?php echo $row["pid"];  echo str_repeat("&nbsp;",22); ?>
				</td>
				<td>
					<?php echo $row["pname"]; echo str_repeat("&nbsp;",25); ?>
				</td>
				<td>
					<?php echo $row["price"]; echo str_repeat("&nbsp;",9); ?>
				</td>
				</tr>
		 <?php
			
			//echo $row["pid"];  echo str_repeat("&nbsp;",19);
			//echo $row["pname"]; echo str_repeat("&nbsp;",6);
			//echo $row["price"]; echo str_repeat("&nbsp;",6);
			//$data[]=$temp;
		}
	?> 
	</table>
	<?php

?>