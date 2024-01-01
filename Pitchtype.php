<?php 
session_start();
include('Connect.php');

if (isset($_SESSION['AID'])) 
{
	if (isset($_POST['btnptype']))
 	{
	$ptname=$_POST['txtptname'];		

    $checkemail = "SELECT * from PitchType Where PitchTypeName='$ptname'";
	$result=mysqli_query($connect,$checkemail);
	$count=mysqli_num_rows($result); 

	if ($count>0)
	{
		echo "<script>window.alert('Pitch type already existed')</script>";

		echo "<script>window.location='Dashboard.php'</script>";

	}
	else
	{
		$insert="INSERT INTO PitchType (PitchTypeName)
		VALUES ('$ptname')";
		$finalResult=mysqli_query($connect,$insert);

		if ($finalResult) {
		echo "<script>window.alert('Pitch Type submited Successfully!')</script>";

		echo "<script>window.location='PitchType.php'</script>";

	}
	
}
}
}

else
{
	echo "<script>window.alert('Login Failed')</script>";
	echo "<script>window.location='Sites.php'</script>";
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
          <img src="Images/mainlogo.jpg"  alt="image" width="100px">
        </div>
  </header>
	<div class="admlog">
		<div class="innerRG">
	<form action="Pitchtype.php" method="POST">

			<label>Pitch Type Name</label>
			<input type="text" name="txtptname"
			placeholder="Enter Pitch Type Name" class="control">

			<input type="submit" name="btnptype" value="Submit" class="btnar">
		</form>		
		</div>
	</div>

		
			<legend>Pitch Type List</legend>
			<?php 
				$select = "SELECT * FROM PitchType";
				$query= mysqli_query($connect, $select);
				$count=mysqli_num_rows($query);
				if ($count==0) 
				{
					echo "<p>No record for Pitch Type</p>";
				}
				

			 ?>		
		<table class="innerRG">
			<tr>
				<th>ID</th>
				<th>Pitch Type Name</th>
				<th>Action</th>
			</tr>
			<?php 

				for ($i=0; $i <$count; $i++) 
				{ 
					$data=mysqli_fetch_array($query);
					$ptid=$data['PitchTypeID'];
					$ptnm=$data['PitchTypeName'];

					echo "<tr>";
					echo "<td>$ptid</td>";
					echo "<td>$ptnm</td>";
					echo "<td>
					<a href='PitchTypeUpdt.php?PtID=$ptid'>Update</a>|
					<a href='PitchTypeDel.php?PtID=$ptid'>Delete</a>
					</td>
					";

					echo "</tr>";
				}
			 ?>

		</table>
	
</body>
</html>