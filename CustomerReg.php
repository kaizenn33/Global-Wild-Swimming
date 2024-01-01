<?php 
include('Connect.php');
if (isset($_POST['btncReg'])) 
{
	$fname=$_POST['txtcfname'];
	$sname=$_POST['txtcsname'];
	$email=$_POST['txtcemail'];
	$ph=$_POST['txtcph'];
	$psw=$_POST['txtcpsw'];
	$addr=$_POST['txtcaddr'];

	if (strlen($psw)<8 || strlen($psw)> 16) 
	{
		echo "<script>window.alert('Invalid password. The password must be between 8 to 16 letters.')</script>";

		echo "<script>window.location='CustomerReg.php'</script>";

	}
	else if (!preg_match('/[A-Z]/', $psw) || !preg_match('/[0-9]/', $psw) ) {
		echo "<script>window.alert('Invalid password. The password have one capital letter and one number')</script>";

		echo "<script>window.location='CustomerReg.php'</script>";

	}
	else
	{
		echo "<script>window.alert('Valid Password.')</script>";
	
	}

	$checkemail = "SELECT * from Customers Where CustomerEmail='$email'";
	$result=mysqli_query($connect,$checkemail);
	$count=mysqli_num_rows($result); 

	if ($count>0)
	{
		echo "<script>window.alert('Customer's Email Already Existed. Please Use Another Email')</script>";

		echo "<script>window.location='CustomerReg.php'</script>";

	}
	else
	{
		$insert="INSERT INTO Customers(CustomerFirstName, CustomerSurname, CustomerEmail, CustomerPh, CustomerPassword, CustomerAddress, ViewCount)
		VALUES ('$fname','$sname','$email','$ph','$psw','$addr', 1)";
		$finalResult=mysqli_query($connect,$insert);

		if ($finalResult) {
		echo "<script>window.alert('Customer Register Successful!')</script>";

		echo "<script>window.location='CustomerLogin.php'</script>";
	}
}
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="Style4.css">
 	<title></title>
 </head>
 <body>
 		<header>
<div class="logo">
	<img src="Images/mainlogo3.jpg"  alt="image" width="100px">
</div>  
	</header>
   <main>
<div class="form-container">
		<form action="CustomerReg.php" method="POST" class="admreg">
		<h2>Customer Registration Form</h2>
<div class="form-stats">
  <input type="text" name="txtcfname" placeholder="Enter Your First Name" class="control">
</div>
		
<div class="form-stats">
  <input type="text" name="txtcsname" placeholder="Enter Your Surname" class="control">
</div>
		
<div class= "form-stats">
  <input type="text" name="txtcemail" placeholder="Enter Your Email" class="control">
</div>

<div class= "form-stats">
  <input type="text" name="txtcph" placeholder="Enter Your Phone" class="control">
</div>

<div class="form-stats">
  <input type="password" name="txtcpsw" placeholder="Enter Your Password" class="control">
</div>
		<div class="form-stats">
		  <textarea name="txtcaddr" placeholder="Enter Your Address"class="control"></textarea>
		</div>
<div class="capcha"> 
<input type="checkbox" required/>I am not a robot
<img src="Images/recap.png">
</div>
      
		<input type="submit" name="btncReg" value="Register" class="btnar">
		<input type="reset" name="" value="Clear" class="btnar">
		<a href="CustomerLogin.php"><input type="submit" name="" value="Login" class="btnar"></a>
		</form>
	</div>
   </main>
 </body>
 </html>