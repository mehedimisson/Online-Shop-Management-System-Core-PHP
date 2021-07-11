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
	session_start();
	$data=array();
	include("db/lib.php");
	//include("AddProduct.php");
	if(isset($_COOKIE["name"]) && $_COOKIE["valid"]=="SET"){
	//echo '" . $_SESSION["valid"] . "';
	}
	else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
	}
	$sql="select * from product where pid='".$_GET["pid"]."'";
	loadFromMySQL($sql);
	$_SESSION["ProductID"]=$data[0]["pid"];
	
		foreach($data as $v){
		echo "<p>";?>


	<script type="text/javascript">

function validate(){
	var flag=true;
	
	var pname=document.frm1.pn.value;
	var pr=document.frm1.pr.value;
	var qnty=document.frm1.qnty.value;
	
	var str="";
	if(pname.length==0){
		flag=false;
		str="must type Product name";
	}
	else if(pr.length==0){
		flag=false;
		str="must provide price";
	}
	else if(qnty.length==0){
		flag=false;
		str="Please Provide Quantity !";
	}
	
	document.getElementById("msg").innerHTML=str;
	return flag;
}
	
	function Name(){
	var un=document.frm1.pn.value; //document=DOM object
	if(un.length<4){
		document.frm1.pn.style.color="red";
		//document.frm.cName.style.border="1px solid red";
		document.getElementById("msg").innerHTML="invalid Product name";
	}
	else{
		document.frm1.pn.style.color="black";
		document.getElementById("msg").innerHTML="valid Product name";
	}
	}
	
	function Price(){
	var un=document.frm1.pr.value; //document=DOM object
	if(un.length<2){
		document.frm1.pr.style.color="red";
		//document.frm.pr.style.border="1px solid red";
		document.getElementById("msg1").innerHTML="Give Price";
	}
	else{
		document.frm1.pr.style.color="black";
		document.getElementById("msg1").innerHTML="Price info taken!";
	}
	}
	
	function quantity(){
	var un=document.frm1.qnty.value; //document=DOM object
	if(un.length<2){
		document.frm1.qnty.style.color="red";
		//document.frm.cName.style.border="1px solid red";
		document.getElementById("msg2").innerHTML="invalid Quantity";
	}
	else{
		document.frm1.qnty.style.color="black";
		document.getElementById("msg2").innerHTML="Info Taken!";
	}
	}
	
	


</script>



		
		<form action="verifyProductEdit.php" name="frm1" method="post"> <pre>
		<table border="1px" align="center">
		<tr>
		<td align="center">
			</br>
			
			Enter Product Name : <input onkeyup="Name()" type="text" name="pn" value="<?php echo $v["pname"]; ?>"> <span id="msg"></span>  </br> </br>
			
			Enter Product Price : <input onkeyup="Price()" type="text" name="pr" value="<?php echo $v["price"]; ?>"> <span id="msg1"></span> </br> </br>
			
			Enter Product Quantity : <input onkeyup="quantity()" type="text" name="qnty" value="<?php echo $v["quantity"]; ?>"> <span id="msg2"></span> </br> </br>
			
			<p> <input type="submit" onclick="return validate()" name="sbt" value="Update" /><br> </p>
			<span id="msg"></span>
			</br>
			</td>
			<tr>
			</table>
	</pre>
</form>
		<?php //echo "Available Quantity of <b>".$v["pname"]."</b> is ".$v["quantity"];
		echo "</p>";
	}
?>
