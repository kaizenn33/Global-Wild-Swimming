<?php 
include('Connect.php');

$pchid=$_REQUEST['pchID'];
$delete="Delete from Pitch where PitchID='$pchid'";
$state=mysqli_query($connect, $delete);

if ($state) 
{
	echo "Delete Successful";
	echo "<script>window.location='Pitch.php'</script>";
}
else
{
	echo "Error in deleting statement";
	echo "<script>window.location='Pitch.php'</script>";
}
?>