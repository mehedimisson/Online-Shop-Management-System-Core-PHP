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
</table>


<?php
	
	//include("AddProduct.php");
	if(isset($_COOKIE["name"]) && $_COOKIE["valid"]=="SET"){
	//echo '" . $_SESSION["valid"] . "';
	}
	else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
	}
	$sql="select * from admin where username='".$_GET["username"]."'";
	loadFromMySQL($sql);
	$_SESSION["USERNAME"]=$data[0]["username"];
	
		foreach($data as $v){
		echo "<p>";?>


	<script type="text/javascript">
function validate(){
	var flag=true;
	
	var Cn=document.frm.cName.value;
	var gender=document.frm.gender.value;
	var bday=document.frm.bday.value;
	var phn=document.frm.phn.value;
	var ads=document.frm.address.value;
	var email=document.frm.email.value;
	
	var str="";
	if(Cn.length==0){
		flag=false;
		str="must type name";
	}
	else if(bday.length==0){
		flag=false;
		str="Please Provide your Date of Birth information !";
	}
	else if(ads.length<5){
		flag=false;
		str="Please Provide your Address !";
	}
	else if(email.indexOf("@")<1){
		flag=false;
		str="invalid email";
	}
	else if(phn.length<11 || phn.length>11){
		flag=false;
		str="Please Provide your Phone Number !";
	}
	
	document.getElementById("msg11").innerHTML=str;
	return flag;
}
	
	function Name(){
	var un=document.frm.cName.value; //document=DOM object
	if(un.length<5){
		document.frm.cName.style.color="red";
		//document.frm.cName.style.border="1px solid red";
		document.getElementById("msg").innerHTML="invalid name";
	}
	else{
		document.frm.cName.style.color="black";
		document.getElementById("msg").innerHTML="valid name";
	}
	}
	
		
	function Gender(){
	var un=document.frm.gender.value; //document=DOM object
	if(un.length<0){
		document.frm.gender.style.color="red";
		//document.frm.gender.style.border="1px solid red";
		document.getElementById("msg3").innerHTML="Provide Gender";
	}
	else{
		document.frm.gender.style.color="black";
		document.getElementById("msg3").innerHTML="Info Taken!";
	}
	}
	
	function Phone(){
	var un=document.frm.phn.value; //document=DOM object
	if(un.length<11 || un.length>11){
		document.frm.phn.style.color="red";
		//document.frm.phn.style.border="1px solid red";
		document.getElementById("msg4").innerHTML="Typing...";
	}
	else{
		document.frm.phn.style.color="black";
		document.getElementById("msg4").innerHTML="Info Taken!";
	}
	}
	
	function Address(){
	var un=document.frm.address.value; //document=DOM object
	if(un.length<4){
		document.frm.address.style.color="red";
		//document.frm.address.style.border="1px solid red";
		document.getElementById("msg5").innerHTML="invalid info";
	}
	else{
		document.frm.address.style.color="black";
		document.getElementById("msg5").innerHTML="Info Taken!";
	}
	}
	function emailV(){
	var un=document.frm.email.value; //document=DOM object
	if(un.indexOf("@")<1){
		document.frm.email.style.color="red";
		//document.frm.address.style.border="1px solid red";
		document.getElementById("msg9").innerHTML="invalid email info";
	}
	else{
		document.frm.email.style.color="black";
		document.getElementById("msg9").innerHTML="Info Taken!";
	}
	}
	//alert(un);


</script>

	<form action="verifyAdminEdit.php" name="frm" method="post"> <pre>
		<Title>
		Edit Info
		</title>				
		<table border="1px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
		<tr>
			<td width="20%" height="15px" align="center"><font size="7px" color="dodgerblue">Online Shop Management System</font></td>
		</tr>
		</table>
		
		<table border="1px" align="center">
		<tr>
		<td align="center">
			</br>
			
			Name: &emsp;&emsp;
			<input onkeyup="Name()" type="text" name="cName" id="txt" value="<?php echo $v["Name"]; ?>" > <span id="msg"></span> <br/> </br>
						
			Gender: 
			<input onkeyup="Gender()" type="text" name="gender"  value="<?php echo $v["Gender"]; ?>"> <span id="msg3"></span> <br/> </br>
			
			Date of Birth: 
			<input  type="date" name="bday" value="<?php echo $v["DOB"]; ?>"> <br/> </br>


			Phone No.: 
			<input onkeyup="Phone()"  type="text" name="phn" id="pn" value="<?php echo $v["Phone"]; ?>"> <br/> <span id="msg4"></span> <br/>
			
			Address: &emsp;
			<input onkeyup="Address()" type="text" name="address" id="thikana" value="<?php echo $v["Address"]; ?>"> <br/> <span id="msg5"></span> <br/>

			Email: &emsp;&emsp;&emsp;
			<input onkeyup="emailV()" type="text" name="email" value="<?php echo $v["email"]; ?>" >  <br/> <span id="msg9"> </span> <br/>
			
			<p> <input type="submit" onclick="return validate()" name="sbt" value="Update" /><br> </p>
			<span id="msg11"></span>
			</br>
			</td>
			</table>
			

	</pre>
</form>
		<?php
	}
?>




<?php/*
	$data=array();
	include("lib.php");
	echo $_GET["username"];
	//$s="delete from product where pid='".$_GET["pid"]."'";
	//loadFromMySQL($s);
	//header("Location:viewProduct.php");
	*/
	 ?>	 