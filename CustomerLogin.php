<?php 
session_start();
include('Connect.php');
if (isset($_POST['btnclogin'])) //login button mhr a lote lote dr isset func nk
{

	$email=$_POST['txtcemail'];//textbox ka data ko var htl htae
	$psw=$_POST['txtcpsw'];

	$check="SELECT * from Customers where CustomerEmail='$email' and CustomerPassword='$psw'";

	$query=mysqli_query($connect,$check);
	$count=mysqli_num_rows($query);

	if($count>0) 
	{
		$update="UPDATE Customers set ViewCount=ViewCount+1 where
	CustomerEmail='$email'";
		$check=mysqli_query($connect, $update);

		$array=mysqli_fetch_array($query);//identifying column in database
		$cid=$array['CustomerId'];
		$cfnm=$array['CustomerFirstName'];
		$csnm=$array['CustomerSurname'];
		$cemail=$array['CustomerEmail'];//getting column in variables

		$_SESSION['CID']=$cid;
		$_SESSION['CFNM']=$cfnm;
		$_SESSION['CSNM']=$csnm;
		$_SESSION['CEM']=$cemail;


		echo "<script>window.alert('Customer Login Successful')</script>";
		echo "<script>window.location='Home_Page.php'</script>";
	}
	else
		{
			if (!isset($_SESSION['loginatt'])) 
			{
				$_SESSION['loginatt'] = 0;
			}

			$_SESSION['loginatt']++;

			$counter = $_SESSION['loginatt'];

			if ($counter >= 3)
			{
				echo "<script>window.alert('Login Attempts Exceeded')</script>";
				echo "<script>window.location='Timer.php'</script>";
			}
			else
			{
				echo "<script>window.alert('Login Again')</script>";
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
 	<title>Customer Login</title>
 </head>
 <body>
 	<header>
 <div class="logo">
					<img src="Images/mainlogo3.jpg"  alt="image" width="100px">
				</div>
 	</header>
 <div class="admlog">
		<div class="form-container">
		<form action="CustomerLogin.php" method="POST" class="LoginAdm" class="admreg">

		<div class="admlogh3">
			<h2>Customer Login</h2>
		</div>

		<div class="form-stats">
		<input type="text" name="txtcemail" placeholder="Enter your email" class="control" required/>
		</div>
		
		<div class="form-stats">
		<input type="password" name="txtcpsw" placeholder="Enter your password" class="control" required/>
		</div>

		<input type="submit" name="btnclogin" value="Login" class="btnar">
		<input type="submit" value="Clear" class="btnar">

	</form>
	</div>
		
	</div>
 </body>
 </html>