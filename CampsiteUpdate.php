<?php 
include('Connect.php');
if (isset($_GET['csID'])) 
{
	$csiteID=$_REQUEST['csID'];
	$select="SELECT * FROM Campsite where CampsiteID='$csiteID'";

	$query=mysqli_query($connect, $select);
	$row=mysqli_fetch_array($query);

	$id=$row['CampsiteID'];
	$name=$row['CampsiteName'];
	$loc=$row['CampstieLocation'];
}
if (isset($_POST['btnupdt']))
{
	$uptcid=$_POST['txtcsiteid'];
	$uptcnm=$_POST['txtcsitenm'];
	$uptclo=$_POST['txtcsiteloc'];

	$update="UPDATE Campsite SET CampsiteName='$uptcnm', CampstieLocation='$uptclo' where CampsiteID='$uptcid'";

	$query=mysqli_query($connect, $update);
	if ($query)
	{
		echo "<script>window.alert('Update successful')</script>";
		echo "<script>window.location='Sites.php'</script>";
	}
	else
	{
		echo "Error in update";
		echo "<script>window.location='Sites.php'</script>";

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
	<form action="CampsiteUpdate.php" method="POST">

		<h3>Updating Campsite</h3>

		<input type="hidden" class="control" name="txtcsiteid" value="<?php echo $id; ?>"><br>
		<input type="text" class="control" name="txtcsitenm" value= "<?php echo $name; ?>"><br>
		<input type="text" class="control" name="txtcsiteloc" value= "<?php echo $loc; ?>"><br>
		<input type="submit" name="btnupdt" value="Update" class="btnar">
	</form>
		</div>
	</div>
	
</body>
</html>