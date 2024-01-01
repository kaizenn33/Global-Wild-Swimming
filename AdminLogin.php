<?php
session_start();
include('Connect.php');
if (isset($_POST['btnlogin'])) //login button mhr a lote lote dr isset func nk
{

	$email=$_POST['txtAemail'];//textbox ka data ko var htl htae
	$psw=$_POST['txtApsw'];

	$check="SELECT * from Admins where AdminEmail='$email'";

	$query=mysqli_query($connect,$check);
	$count=mysqli_num_rows($query);//row count

	if($count>0) 
	{
		$array=mysqli_fetch_array($query);//identifying column in database
		$aid=$array['AdminID'];
		$anm=$array['AdminName'];
		$aemail=$array['AdminEmail'];//getting column in variables

		$_SESSION['AID']=$aid;
		$_SESSION['ANM']=$anm;
		$_SESSION['AEM']=$aemail;


		echo "<script>window.alert('Admin Login Successful')</script>";
		echo "<script>window.location='Dashboard.php'</script>";
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<title>Global Wild Swimming Camping</title>
</head>
<body>
	<header>
		<div class="logo">
				<img src="Images/mainlogo3.jpg"  alt="image" width="100px">
		</div>
	</header>
	<div class="admlog">
		<div class="innerRG">
		
		<form action="AdminLogin.php" method="POST" class="LoginAdm" class="admreg">

		<div class="admlogh3">
			<h3>Admin Login</h3>
		</div>

		<div class="form-wrap">
		<input type="text" name="txtAemail" placeholder="Enter your email" class="control" required/>
		</div>
		
		<div>
		<input type="password" name="txtApsw" placeholder="Enter your password" class="control" required/>
		</div>

		<input type="submit" name="btnlogin" value="Login" class="btnar">
		<a href="Admin.php"><input type="submit" value="Register" class="btnar"></a>

	</form>
<div class="image-holder">
	<img src="Images/admreg2.jpg" alt="image">
	
		</div>
	</div>
		
	</div>
			<?php 
				$select = "SELECT * FROM Admins";
				$query= mysqli_query($connect, $select);
				$count=mysqli_num_rows($query);
				if ($count==0) 
				{
					echo "<p>No record for Admin </p>";
				}
				

			 ?>
			<div class="innerRG">
				<table border="1px">
			<tr>
				<th>ID</th>
				<th>Admin Name</th>
				<th>Action</th>
			</tr>
			<?php 

				for ($i=0; $i <$count; $i++) 
				{ 
					$data=mysqli_fetch_array($query);
					$aid=$data['AdminID'];
					$anm=$data['AdminName'];

					echo "<tr>";
					echo "<td>$aid</td>";
					echo "<td>$anm</td>";
					echo "<td>
					<a href='AdminUpdate.php?aID=$aid'>Update</a>
					</td>
					";

					echo "</tr>";
				}
			 ?>

		</table>
			</div>	
		
</body>
</html>