<script src="jQuery/jquery.min.js"></script>
<form action="verifyEmployee.php" method="post">
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
$s="select * from admin where username='".$_SESSION["uname"]."'";
loadFromMySQL($s);
//echo $data[0]["url"];
?>

<title>Admin Home</title>

	<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
		<tr>
			<td width="20%" height="60px" align="center"><font size="10px" color="dodgerblue"><b>Welcome, <?php echo $_SESSION["uname"]; ?></b></font></td>
		</tr>
		<tr>
			<td align="center"><b> <img src="<?php echo $data[0]["url"]; ?>" width="200px" height="200px" > </b></td>
		</tr>
	</table>
	
	<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp; &emsp;
				Admin Profile Panel :
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="ChangePassword.php">Change Password</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				<a href="profile.php">Profile</a>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				<a href="AddAdmin.php">Add Admin</a>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				
				<a href="viewAdmin.php">view Admin</a>
				&emsp;&emsp;&emsp;&emsp;&emsp;
				
				
			</td>
			<td height="20px" bgcolor="grey"align="right">
				
				<a href="logout.php"><font color="white"><img align=middle width="35px" height="38px" src="pictures/logOut.png"></font></a>	
			</td>
		</tr>
	</table>
		
	<img align="center" width="480px" height="100px" src="pictures/product.jpg" alt="Employee Image">
	
	<table border="1px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#B2C095" align="center">
				Product: <br/></br>
				</td>
				<td align="center">
	
			<a href="AddProduct.php">Add Product</a> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<a href="viewSales.php">Sells</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<a href="viewProduct.php">View Product</a>
			</td>
	
			</td>
		</tr>
	</table>
</form>

<div id="more">
<button id="btn">About US</button>
</div>

<div id="hid" style="display:none;">
<button >Show less</button>
</div>

<div id="msg" style="display:none;">
The primary goal of this e-commerce site is to sell goods and services online. This project deals
with developing an e-commerce / Online Shopping Management System for online product sale.
It will provides the user with a category of different products available for purchase in the store.
ln order to facilitate online purchase a shopping cart will provided to the user. The system is
implemented using a 3-tier approach, with a backend relational databases (such as MySQL), a
middle tier of Object-Oriented PHP, and a web browser as the front end client. This is a project
with the objective to develop a basic website wherc a customer is provided with a shopping cart
application and also to know about the technologies used to develop such an application. This
system involves its own database to be maintained. The information or details about the products
are stored in the databas€. The server process is for dealing with the customers detail and the iterns
that are shipped to different locations based on the addresses provided by the customers. The
application design contains two modules one is for the customers who wish to buy the product and
another is for the store owners who maintains and updates the information regarding to the product
and about the customers. The end user to use this site are the common people for whom this
application is to be hosted on the web and the admin maintains the database
</div>

<script>
$(document).ready(function(){
  $("#btn").click(function(){
	  
	  $("#hid").show();
	  $("#msg").show();
	  $("#more").hide();
	
		
	});
	
	$("#hid").click(function(){
		$("#hid").hide();
	  $("#msg").hide();
	  $("#more").show();
	});
});
</script>