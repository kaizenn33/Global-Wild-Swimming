<?php 
include('Connect.php');
if (isset($_GET['pchID'])) 
{
	$pchID=$_REQUEST['pchID'];
	$select="SELECT * FROM Pitch where PitchID='$pchID'";

	$query=mysqli_query($connect, $select);
	$row=mysqli_fetch_array($query);

	$pchid=$row['PitchID'];
	$pchnm=$row['PitchName'];
	$pchimg=$row['PitchImage'];
	$ploc=$row['location'];

	$fnm1=$row['FNm1'];
	$fnm2=$row['FNm2'];
	$fnm3=$row['FNm3'];

	$fimg1=$row['FImg1'];
	$fimg2=$row['FImg2'];
	$fimg3=$row['FImg3'];

	$fdes1=$row['FDes1'];
	$fdes2=$row['FDes2'];
	$fdes3=$row['FDes3'];

	$lanm1=$row['LANm1'];
	$lanm2=$row['LANm2'];
	$lanm3=$row['LANm3'];

	$laimg1=$row['LAImg1'];
	$laimg2=$row['LAImg2'];
	$laimg3=$row['LAImg3'];

	$lades1=$row['LDes1'];
	$lades2=$row['LDes2'];
	$lades3=$row['LDes3'];

	$price=$row['Price'];
	$des=$row['Description'];
	$stt=$row['Status'];
	

}
if (isset($_POST['btnupdt']))
{
	$upchid=$_POST['txtupchid'];
	$upchnm=$_POST['txtupchnm'];
	$upchimg=$_POST['txtupchimg'];
	$uploc=$_POST['txtuploc'];

	$ufnm1=$_POST['txtufnm1'];
	$ufnm2=$_POST['txtufnm2'];
	$ufnm3=$_POST['txtufnm3'];

	$ufimg1=$_POST['txtufimg1'];
	$ufimg2=$_POST['txtufimg2'];
	$ufimg3=$_POST['txtufimg3'];

	$ufdes1=$_POST['txtufdes1'];
	$ufdes2=$_POST['txtufdes2'];
	$ufdes3=$_POST['txtufdes3'];

	$ulanm1=$_POST['txtulanm1'];
	$ulanm2=$_POST['txtulanm2'];
	$ulanm3=$_POST['txtulanm3'];

	$ulaimg1=$_POST['txtulaimg1'];
	$ulaimg2=$_POST['txtulaimg2'];
	$ulaimg3=$_POST['txtulaimg3'];

	$uldes1=$_POST['txtuldes1'];
	$uldes2=$_POST['txtuldes2'];
	$uldes3=$_POST['txtuldes3'];


	$upr=$_POST['txtupr'];
	$udes=$_POST['txtudes'];
	$ustt=$_POST['txtustt'];



	$update="UPDATE Pitch SET PitchName='$upchnm', PitchImage='$upchimg', location='$uploc', FNm1='$ufnm1', FNm2='$ufnm2', FNm3='$ufnm3', FImg1='$ufimg1', FImg2='$ufimg2', FImg3='$ufimg3', FDes1='$ufdes1', FDes2='$ufdes2', FDes3='$ufdes3', LANm1='$ulanm1', LANm2='$ulanm2', LANm3='$ulanm3', LAImg1='$ulaimg1', LAImg2='$ulaimg2', LAImg3='$ulaimg3',
		 LDes1='$uldes1', LDes2='$uldes2', LDes3='$uldes3', Price='$upr', Description='$udes', Status='$ustt' where PitchID='$upchid'";

	$query=mysqli_query($connect, $update);
	if ($query)
	{
		echo "<script>window.alert('Update successful')</script>";
		echo "<script>window.location='Pitch.php'</script>";
	}
	else
	{
		echo "Error in update";
		echo "<script>window.location='#.php'</script>";

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
	<form action="PitchUpdate.php" method="POST">

		<h3>Updating Admin</h3>

		<input type="hidden" class="control" name="txtupchid" value="<?php echo $pchid; ?>"><br>
		<input type="text" class="control" name="txtupchnm" value= "<?php echo $pchnm; ?>"><br>
		<input type="file" class="control" name="txtupchimg" value= "<?php echo $pchimg; ?>"><br>
		<input type="text" class="control" name="txtuploc" value= "<?php echo $ploc; ?>"><br>

		<input type="text" class="control" name="txtufnm1" value= "<?php echo $fnm1; ?>"><br>
		<input type="text" class="control" name="txtufnm2" value= "<?php echo $fnm2; ?>"><br>
		<input type="text" class="control" name="txtufnm3" value= "<?php echo $fnm3; ?>"><br>

		<input type="file" class="control" name="txtufimg1" value= "<?php echo $fimg1; ?>"><br>
		<input type="file" class="control" name="txtufimg2" value= "<?php echo $fimg2; ?>"><br>
		<input type="file" class="control" name="txtufimg3" value= "<?php echo $fimg3; ?>"><br>

		<input type="text" class="control" name="txtufdes1" value= "<?php echo $fdes1; ?>"><br>
		<input type="text" class="control" name="txtufdes2" value= "<?php echo $fdes2; ?>"><br>
		<input type="text" class="control" name="txtufdes3" value= "<?php echo $fdes3; ?>"><br>


		<input type="text" class="control" name="txtulanm1" value= "<?php echo $lanm1; ?>"><br>
		<input type="text" class="control" name="txtulanm2" value= "<?php echo $lanm2; ?>"><br>
		<input type="text" class="control" name="txtulanm3" value= "<?php echo $lanm3; ?>"><br>

		<input type="file" class="control" name="txtulaimg1" value= "<?php echo $laimg1; ?>"><br>
		<input type="file" class="control" name="txtulaimg2" value= "<?php echo $laimg2; ?>"><br>
		<input type="file" class="control" name="txtulaimg3" value= "<?php echo $laimg3; ?>"><br>

		<input type="text" class="control" name="txtuldes1" value= "<?php echo $lades1; ?>"><br>
		<input type="text" class="control" name="txtuldes2" value= "<?php echo $lades2; ?>"><br>
		<input type="text" class="control" name="txtuldes3" value= "<?php echo $lades3; ?>"><br>

		<input type="text" class="control" name="txtupr" value= "<?php echo $price; ?>"><br>
		<input type="text" class="control" name="txtudes" value= "<?php echo $des; ?>"><br>
		<input type="text" class="control" name="txtustt" value= "<?php echo $stt; ?>"><br>

		<input type="submit" name="btnupdt" value="Update" class="btnar">
	</form>
		</div>
	</div>
	
</body>
</html>