<h2>Sales</h2>
<title>Sales</title>
<?php
session_start();
//$data=array();
//include("lib.php");
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

<script>
var xmlhttp = new XMLHttpRequest();
var flag=true;
var emailError=0;

function showHint(el) {
	var str=el.value;
	errors=0;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	if(el.id="pid"){
		url="fetchSale.php?pid="+str;
	}
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
function validate(){
	un=document.frm.pid;
	if(un.value.length==0){
		flag=false;
	}
	alert(flag);
	return flag;
}
</script>
<form action="next.php" name="frm">
<p><b>Search Quantity</b></p>
Enter Product ID : <input type="text" name="pid" onkeyup="showHint(this)" id="pid"> <img id="spinner" src="pictures/loading.gif" width="20px" height="20px" style="visibility:hidden">
<p id="txtHint"></p>
<br/>
</form>


<?php
//session_start();
//if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes")
if(isset($_COOKIE["name"]) && $_COOKIE["valid"]=="SET"){
	$conn = mysqli_connect("localhost", "root", "","webtech");
	$sql="select * from orders";?>
<table>		
		<?php
		//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));?>
		
			<tr border="2px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#4BBAD7">
				<td>
					<?php echo "Product ID"; echo str_repeat("&nbsp;",6); ?>
				</td>
				<td>
					<?php echo "Customer";echo str_repeat("&nbsp;", 26); ?>
				</td>
				<td>
					<?php echo "Price"; echo str_repeat("&nbsp;",12); ?>
				</td>
				<td>
					<?php echo "Quantity"; echo str_repeat("&nbsp;",12); ?>
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
					<?php echo $row["cususername"]; echo str_repeat("&nbsp;",25); ?>
				</td>
				<td>
					<?php echo $row["price"]; echo str_repeat("&nbsp;",9); ?>
				</td>
				<td>
					<?php echo $row["quantity"]; echo str_repeat("&nbsp;",9); ?>
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
}

else{
	header("Location:logout.php");
}
?>