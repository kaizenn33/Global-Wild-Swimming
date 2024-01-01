<?php 
include('Connect.php');

$aid=$_REQUEST['aID'];
$delete="Delete from Admins where AdminID='$aid'";
$state=mysqli_query($connect, $delete);

if ($state) 
{
	echo "Delete Successful";
	echo "<script>window.location='Admin.php'</script>";
}
else
{
	echo "Error in deleting statement";
	echo "<script>window.location='Admin.php'</script>";
}
?>