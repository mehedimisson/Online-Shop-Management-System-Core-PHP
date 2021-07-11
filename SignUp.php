<script type="text/javascript">
function validate(){
	var flag=true;
	
	var Cn=document.frm.cName.value;
	var uCn=document.frm.userCname.value;
	var pass=document.frm.pss.value;
	var cpass=document.frm.cpss.value;
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
	else if(uCn.length==0){
		flag=false;
		str="must type user name";
	}
	else if(gender.length==0){
		flag=false;
		str="Please Provide your Gender information !";
	}
	else if(bday.length==0){
		flag=false;
		str="Please Provide your Date of Birth information !";
	}
	else if(pass.length<8){
		flag=false;
		str="Provide Strong Password !";
	}
	else if(pass!=cpass){
		flag=false;
		str="passworods must match";
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
	
	function UserName(){
	var un=document.frm.userCname.value; //document=DOM object
	if(un.length<5){
		document.frm.userCname.style.color="red";
		//document.frm.userCname.style.border="1px solid red";
		document.getElementById("msg1").innerHTML="invalid username";
	}
	else{
		document.frm.userCname.style.color="black";
		document.getElementById("msg1").innerHTML="valid username";
	}
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

<form action="verifySignup.php" name="frm" method="post"> <pre>
		<Title>
		Sign UP
		</title>				
		<table border="1px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
		<tr>
			<td width="20%" height="15px" align="center"><font size="7px" color="dodgerblue">Online Shop Management System</font></td>
		</tr>
		</table>
		
		<table border="0px" height="10px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr height="10px">
			<td bgcolor="#AFDED3">
				&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;
					<a href="index.html">Home</a>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<a href="login.php">Login</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;
				
			</td>
		</tr>
	</table>
		
		<table border="1px" align="center">
		<tr>
		<td align="center">
			</br>
			
			Name: &emsp;&emsp;
			<input onkeyup="Name()" type="text" name="cName" id="txt" > <span id="msg"></span> <br/> </br>
			User Name: 
			<input onkeyup="UserName()" type="text" name="userCname" id="unn" > <span id="msg1"></span> <br/></br>
			
			Password:
			<input onkeyup="password()" type="password" name="pss" id="pass"> <span id="msg2"></span> <br/> <br/> 
			
			&emsp;
			Confirm Password:
			<input type="password" name="cpss" >&emsp; <br/> <br/>
			
			Gender: <br/> 
			<input onkeyup="Gender()" type="radio" name="gender" value="male" id="gn"> Male &emsp;&emsp;&emsp;
			<input onkeyup="Gender()" type="radio" name="gender" value="female" id="gn"> Female<br> <span id="msg3"></span> <br/>
			
			Date of Birth: <input type="date" name="bday">  <br/> </br> </br>


			Phone No.: 
			<input onkeyup="Phone()"  type="text" name="phn" id="pn"> <br/> <span id="msg4"></span> <br/>
			
			Address: &emsp;
			<input onkeyup="Address()" type="text" name="address" id="thikana"> <br/> <span id="msg5"></span> <br/>

			Email: &emsp;&emsp;&emsp;
			<input onkeyup="emailV()" type="text" name="email" id="aaa" > <br/> <span id="msg9"> </span> <br/>
			
			<p> <input type="submit" onclick="return validate()" name="sbt" value="SignUp" /><br> </p>
			<span id="msg11"></span>
			</br>
			</td>
			</table>
			

	</pre>
</form>