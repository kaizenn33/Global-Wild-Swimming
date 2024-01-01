<?php 
include('Connect.php');

$campsID=$_REQUEST['csID'];
$delete="Delete from Campsite where CampsiteID='$campsID'";
$state=mysqli_query($connect, $delete);

if ($state) 
{
	echo "Delete Successful";
	echo "<script>window.location='Sites.php'</script>";
}
else
{
	echo "Error in deleting statement";
	echo "<script>window.location='Sites.php'</script>";
}
?>