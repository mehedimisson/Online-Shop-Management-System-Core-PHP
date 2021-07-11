<script type="text/javascript">

function validate(){
	var flag=true;
	
	var AAA=document.frm.uname.value;
	var PPP=document.frm.pass.value;
	alert("Cn");
	var str="";
	if(AAA.length==0){
		flag=false;
		str="must type name";
	}
	
	else if(PPP.length<8){
		flag=false;
		str="Provide Strong Password !";
	}
		
	document.getElementById("msg11").innerHTML=str;
	return flag;
}
	
	function Name(){
	var un=document.frm.uname.value; //document=DOM object
	if(un.length<5){
		document.frm.uname.style.color="red";
		//document.frm.cName.style.border="1px solid red";
		document.getElementById("msg").innerHTML="invalid name";
	}
	else{
		document.frm.uname.style.color="black";
		document.getElementById("msg").innerHTML="valid name";
	}
	}
	
	
	function password(){
	var un=document.frm.pass.value; //document=DOM object
	if(un.length<8){
		document.frm.pass.style.color="red";
		//document.frm.pss.style.border="1px solid red";
		document.getElementById("msg2").innerHTML="Provide Strong Password";
	}
	else{
		document.frm.pass.style.color="black";
		document.getElementById("msg2").innerHTML="valid Password";
	}
	}

</script>
<form action="server.php" name="frm" method="post" > 
<title>Login </title>

<h1>Login</h1>
User Name :

<input type="text" onkeyup="Name()" name="uname" /><br><span id="msg"> </span> <br/>


Password  :<input type="password" onkeyup="password()" name="pass" /> <br> <span id="msg2"></span> <br/>
<br>
<input type="submit" onclick="return validate()" name="sbt" id="sbt" value="Login" /> <br><span id="msg11"></span>
</form>

<br>
<h6>No account ? SignUp Now!!</h6>	<br>
<a href="SignUp.php">Signup</a><br/>
<a href="index.html">Home</a><br/><br/><br/>

<?php 
	include("policy.php");
?>
