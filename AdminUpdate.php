<?php 
include('Connect.php');
if (isset($_GET['aID'])) 
{
	$aID=$_REQUEST['aID'];
	$select="SELECT * FROM Admins where AdminID='$aID'";

	$query=mysqli_query($connect, $select);
	$row=mysqli_fetch_array($query);

	$id=$row['AdminID'];
	$name=$row['AdminName'];
	$ph=$row['AdminPhNo'];
	$email=$row['AdminEmail'];
	$pw=$row['AdminPassword'];
	$addr=$row['AdminAddress'];
	$pos=$row['AdminPosition'];

}
if (isset($_POST['btnupdt']))
{
	$upaid=$_POST['txtuaid'];
	$upanm=$_POST['txtuanm'];
	$upaph=$_POST['txtuaph'];
	$upaem=$_POST['txtuaem'];
	$upapw=$_POST['txtuapw'];
	$upaaddr=$_POST['txtuaaddr'];
	$upapos=$_POST['txtuapos'];


	$update="UPDATE Admins SET AdminName='$upanm', AdminPhNo='$upaph', AdminEmail='$upaem', AdminPassword='$upapw', AdminAddress='$upaaddr', AdminPosition='$upapos' where AdminID='$upaid'";

	$query=mysqli_query($connect, $update);
	if ($query)
	{
		echo "<script>window.alert('Update successful')</script>";
		echo "<script>window.location='Admin.php'</script>";
	}
	else
	{
		echo "Error in update";
		echo "<script>window.location='#.php'<script>";

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
	<form action="AdminUpdate.php" method="POST">

		<h3>Updating Admin</h3>

		<input type="hidden" class="control" name="txtuaid" value="<?php echo $id; ?>"><br>
		<input type="text" class="control" name="txtuanm" value= "<?php echo $name; ?>"><br>
		<input type="text" class="control" name="txtuaph" value= "<?php echo $ph; ?>"><br>
		<input type="text" class="control" name="txtuaem" value= "<?php echo $email; ?>"><br>
		<input type="text" class="control" name="txtuapw" value= "<?php echo $pw; ?>"><br>
		<input type="text" class="control" name="txtuaaddr" value= "<?php echo $addr; ?>"><br>
		<input type="text" class="control" name="txtuapos" value= "<?php echo $pos; ?>"><br>
		<input type="submit" name="btnupdt" value="Update" class="btnar">
	</form>
		</div>
	</div>
	
</body>
</html>