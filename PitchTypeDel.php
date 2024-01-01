<?php 
include('Connect.php');

$PtypeID=$_REQUEST['PtID'];
$delete="Delete from PitchType where PitchTypeID='$PtypeID'";
$state=mysqli_query($connect, $delete);

if ($state) 
{
	echo "Delete Successful";
	echo "<script>window.location='Pitchtype.php'</script>";
}
else
{
	echo "Error in deleting statement";
	echo "<script>window.location='Pitchtype.php'</script>";
}
?>