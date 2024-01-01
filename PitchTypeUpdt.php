<?php 
include('Connect.php');
if (isset($_GET['PtID'])) 
{
	$PtypeID=$_REQUEST['PtID'];
	$select="SELECT * FROM PitchType where PitchTypeID='$PtypeID'";

	$query=mysqli_query($connect, $select);
	$row=mysqli_fetch_array($query);

	$id=$row['PitchTypeID'];
	$name=$row['PitchTypeName'];
}
if (isset($_POST['btnupdt']))
{
	$uptid=$_POST['txtpitchid'];
	$uptnm=$_POST['txtpitchname'];

	$update="UPDATE PitchType SET PitchTypeName='$uptnm' where PitchTypeID='$uptid'";

	$query=mysqli_query($connect, $update);
	if ($query)
	{
		echo "<script>window.alert('Update successful')</script>";
		echo "<script>window.location='Pitchtype.php'</script>";
	}
	else
	{
		echo "Error in update";
		echo "<script>window.location='Pitchtype.php'</script>";

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<title>Updating Pitch Type</title>
</head>
<body>
	<div class="admlog">
		<div class="innerRG">
	<form action="PitchtypeUpdt.php" method="POST">

		<h3>Updating Pitch Type</h3>

		<input type="hidden" class="control" name="txtpitchid" value="<?php echo $id; ?>"><br>
		<input type="text" class="control" name="txtpitchname" value= "<?php echo $name; ?>"><br>
		<input type="submit" name="btnupdt" value="Update" class="btnar">
	</form>
		</div>
	</div>
	
</body>
</html>