<?php 
include('Connect.php');
if (isset($_POST['btnReg']))
{
		$name=$_POST['txtAname'];
		$ph=$_POST['txtAph'];
		$email=$_POST['txtAemail'];
		$password=$_POST['txtApsw'];
		$address=$_POST['txtAaddr'];
		$position=$_POST['txtAposition'];

	$checkemail = "SELECT * from Admins Where AdminEmail='$email'";
	$result=mysqli_query($connect,$checkemail);
	$count=mysqli_num_rows($result); 

	if ($count>0)
	{
		echo "<script>window.alert('Admin Email Already Existed. Please Use Another Email')</script>";

		echo "<script>window.location='Admin.php'</script>";

	}
	else
	{
		$insert="INSERT INTO Admins(AdminName, AdminPhNo, AdminEmail, AdminPassword, AdminAddress, AdminPosition)
		VALUES ('$name','$ph','$email','$password','$address', '$position')";
		$finalResult=mysqli_query($connect,$insert);

		if ($finalResult) {
		echo "<script>window.alert('Admin Register Successful!')</script>";

		echo "<script>window.location='AdminLogin.php'</script>";

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
	<title>Global Wild Swimming Camping</title>
</head>
<body>
	<header>
		<div class="logo">
					<img src="Images/mainlogo3.jpg"  alt="image" width="100px">
				</div>
	</header>
	<div class="innerRG">
    <div class="image-holder">
				<img src="Images/admreg.jpg" alt="image">
			</div>
		<form action="Admin.php" method="POST" class="admreg">
		<h3>Admin Registration Form</h3>
<div class="form-wrap">
  <input type="text" name="txtAname" placeholder="Enter Admin Fullname" class="control">
</div>
		
<div class="form-wrap">
  <input type="text" name="txtAph" placeholder="Enter Admin phone" class="control">
</div>
		
<div class= "form-warp">
  <input type="text" name="txtAemail" placeholder="Enter Admin Email" class="control">
</div>

<div class="form-wrap">
  <input type="password" name="txtApsw" placeholder="Enter Admin Password" class="control">
</div>
		<div class="form-wrap">
		  <textarea name="txtAaddr" placeholder="Enter address"class="control"></textarea>
		</div>

		<div class="form-wrap">
		  <input type="text" name="txtAposition" placeholder="Enter Admin Position" class="control">
		</div>
      
		<input type="submit" name="btnReg" value="Register" class="btnar">
		<a href="AdminLogin.php"><input type="submit" name="" value="Login" class="btnar"/>
</a>
		</form>
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
			<div>
				<table border="1px">
			<tr>
				<th>ID</th>
				<th>Admin Name</th>
				<th>Admin Phone</th>
				<th>Admin Email</th>
				<th>Admin Position</th>
				<th>Action</th>
			</tr>
			<?php 

				for ($i=0; $i <$count; $i++) 
				{ 
					$data=mysqli_fetch_array($query);
					$aid=$data['AdminID'];
					$anm=$data['AdminName'];
					$aph=$data['AdminPhNo'];
					$aem=$data['AdminEmail'];
					$apos=$data['AdminPosition'];


					echo "<tr>";
					echo "<td>$aid</td>";
					echo "<td>$anm</td>";
					echo "<td>$aph</td>";
					echo "<td>$aem</td>";
					echo "<td>$apos</td>";
					echo "<td>
					<a href='AdminUpdate.php?aID=$aid'>Update</a>|
					<a href='AdminDelete.php?aID=$aid'>Delete</a>
					</td>
					";

					echo "</tr>";
				}
			 ?>

		</table>
			</div>
</body>
</html>