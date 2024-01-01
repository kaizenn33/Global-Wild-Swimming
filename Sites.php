<?php
session_start();
include('Connect.php');

if (isset($_SESSION['AID'])) 
{
	if (isset($_POST['btnsite']))
{
	$sname=$_POST['txtsitename'];
	$slocation=$_POST['txtsitelocation'];
		

    $checkemail = "SELECT * from Campsite Where CampsiteName='$sname'";
	$result=mysqli_query($connect,$checkemail);
	$count=mysqli_num_rows($result); 

	if ($count>0)
	{
		echo "<script>window.alert('Camp site already existed')</script>";

		echo "<script>window.location='Admin.php'</script>";

	}
	else
	{
		$insert="INSERT INTO Campsite (CampsiteName, CampstieLocation)
		VALUES ('$sname','$slocation')";
		$finalResult=mysqli_query($connect,$insert);

		if ($finalResult) {
		echo "<script>window.alert('Site submited Successfully!')</script>";

		echo "<script>window.location='Sites.php'</script>";

	}
	
}
}	

}

else
{
	echo "<script>window.alert('Login Failed')</script>";
	echo "<script>window.location='AdminLogin.php'</script>";

}


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<title>Sites</title>
</head>
<body>
	<div class="admlog">
		<div class="innerRG">
		<form action="Sites.php" method="POST">

		
			<h3>Campsite Registration</h3>
		

			<label>Site Name</label>
			<input type="text" name="txtsitename"
			placeholder="Enter Site Name" class="control" required/><br>

			<label>Site Location</label>
			<input type="text" name="txtsitelocation"
			placeholder="Enter Site Location" class="control"><br>


			<input type="submit" name="btnsite" value="Submit" class="btnar">
		</form>
	</div>
	</div>
	<?php 
				$select = "SELECT * FROM Campsite";
				$query= mysqli_query($connect, $select);
				$count=mysqli_num_rows($query);
				if ($count==0) 
				{
					echo "<p>No record for Campsite </p>";
				}
				

			 ?>
			<div class="innerRG">
				<table border="1px">
			<tr>
				<th>ID</th>
				<th>Campstie Name</th>
				<th>Location</th>
				<th>Action</th>
			</tr>
			<?php 

				for ($i=0; $i <$count; $i++) 
				{ 
					$data=mysqli_fetch_array($query);
					$cid=$data['CampsiteID'];
					$cnm=$data['CampsiteName'];
					$clo=$data['CampstieLocation'];

					echo "<tr>";
					echo "<td>$cid</td>";
					echo "<td>$cnm</td>";
					echo "<td>$clo</td>";
					echo "<td>
					<a href='CampsiteUpdate.php?csID=$cid'>Update</a>|
					<a href='CampsiteDelete.php?csID=$cid'>Delete</a>
					</td>
					";

					echo "</tr>";
				}
			 ?>

		</table>
			</div>	
</body>
</html>