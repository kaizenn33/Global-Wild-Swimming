<?php 
session_start();
include('Connect.php');
if (!isset($_SESSION['AID'])) 
{
	echo "<script>window.alert('Admin Login Again')</script>";
	echo "<script>window.location='AdminLogin.php'</script>";

}
if (isset($_POST['btnptype'])) 
{
	$name=$_POST['txtname'];

	$pimg=$_FILES['txtimg']['name']; 
	$folder="Images/";
	$filename1=$folder."_".$pimg;
	$copy=copy($_FILES['txtimg']['tmp_name'], $filename1); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}

	$plocation=$_POST['txtlocation'];
	$fn1=$_POST['txtfnm1'];
	$fn2=$_POST['txtfnm2'];
	$fn3=$_POST['txtfnm3'];

	$fi1=$_FILES['txtfimg1']['name']; 
	$folder="Images/";
	$filename2=$folder."_".$fi1;
	$copy=copy($_FILES['txtfimg1']['tmp_name'], $filename2); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}

	$fi2=$_FILES['txtfimg2']['name']; 
	$folder="Images/";
	$filename3=$folder."_".$fi2;
	$copy=copy($_FILES['txtfimg2']['tmp_name'], $filename3); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}

	$fi3=$_FILES['txtfimg3']['name']; 
	$folder="Images/";
	$filename4=$folder."_".$fi3;
	$copy=copy($_FILES['txtfimg3']['tmp_name'], $filename4); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}

	$fdes1=$_POST['txtfdes1'];
	$fdes2=$_POST['txtfdes2'];
	$fdes3=$_POST['txtfdes3'];


	$lan1=$_POST['txtlanm1'];
	$lan2=$_POST['txtlanm2'];
	$lan3=$_POST['txtlanm3'];

	$lanimg1=$_FILES['txtlaimg1']['name']; 
	$folder="Images/";
	$filename5=$folder."_".$lanimg1;
	$copy=copy($_FILES['txtlaimg1']['tmp_name'], $filename5); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}

	$lanimg2=$_FILES['txtlaimg2']['name']; 
	$folder="Images/";
	$filename6=$folder."_".$lanimg2;
	$copy=copy($_FILES['txtlaimg2']['tmp_name'], $filename6); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}


	$lanimg3=$_FILES['txtlaimg3']['name']; 
	$folder="Images/";
	$filename7=$folder."_".$lanimg3;
	$copy=copy($_FILES['txtlaimg3']['tmp_name'], $filename7); //statement to copy
	//In the copy() function, you typically use $_FILES['tmp_name'] as the source because that's where the uploaded file is temporarily stored on the server.

	if (!$copy) {
		echo "<p>Cannot upload image</p>";
		exit();
	}

	$ldes1=$_POST['txtldes1'];
	$ldes2=$_POST['txtldes2'];
	$ldes3=$_POST['txtldes3'];


	$price=$_POST['txtprice'];
	$des=$_POST['txtdes'];
	$status="Active";
	$cs=$_POST['cbocs'];
	$pt=$_POST['cbopt'];

	$checkemail = "SELECT * from Pitch Where PitchName='$name'";
	$result=mysqli_query($connect,$checkemail);
	$count=mysqli_num_rows($result); 

	if ($count>0)
	{
		echo "<script>window.alert('Pitch Name Already Existed. Please Use Another Name')</script>";

		echo "<script>window.location='Pitch.php'</script>";

	}
	else
	{
		echo $insert="INSERT INTO Pitch (PitchName, PitchImage, location, FNm1, FNm2, FNm3, FImg1, FImg2, FImg3, FDes1, FDes2, FDes3, LANm1, LANm2, LANm3, LAImg1, LAImg2, LAImg3, LDes1, LDes2, LDes3, Price, Description, Status, CampsiteID, PitchTypeID)
		VALUES ('$name','$pimg','$plocation','$fn1','$fn2', '$fn3', '$fi1', '$fi2', '$fi3', '$fdes1', '$fdes2', '$fdes3', '$lan1', '$lan2', 
			  '$lan3', '$lanimg1', '$lanimg2', '$lanimg3', '$ldes1', '$ldes2', '$ldes3', '$price', '$des', '$status', '$cs', '$pt')";

		$finalResult=mysqli_query($connect,$insert);

		if ($finalResult) {
		echo "<script>window.alert('Pitch Register Successful!')</script>";

		echo "<script>window.location='Pitch.php'</script>";

	}
}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<title>Pitches</title>
</head>
<body>
	<div class="admlog">
		<div class="innerRG">
	<form action="Pitch.php" method="POST" enctype="multipart/form-data">

			<h3>Pitch Data Registration</h3>

		<label>Pitch Name</label>
		<input type="text" name="txtname" placeholder="Enter your pitch name" class="control" required/><br>

		<label>Pitch Image</label>
		<input type="file" name="txtimg" class="control" placeholder="Enter the location" required/><br>

		<label>Pitch Location</label>
		<input type="text" name="txtlocation" class="control" required/><br>

		<label>Facility Name 1</label>
		<input type="text" name="txtfnm1" placeholder="Enter your facility name" class="control" required/><br>

		<label>Facility Name 2</label>
		<input type="text" name="txtfnm2" placeholder="Enter your facility name" class="control" required/><br>

		<label>Facility Name 3</label>
		<input type="text" name="txtfnm3" placeholder="Enter your facility name" class="control" required/><br>

		<label>Facility Image 1</label>
		<input type="file" name="txtfimg1" placeholder="Enter your facility image" class="control" required/><br>

		<label>Facility Image 2</label>
		<input type="file" name="txtfimg2" placeholder="Enter your facility image" class="control" required/><br>

		<label>Facility Image 3</label>
		<input type="file" name="txtfimg3" placeholder="Enter your facility image" class="control" required/><br>

		<label>Facility Description 1</label>
		<input type="text" name="txtfdes1" placeholder="Enter your facility description" class="control" required/><br>

		<label>Facility Description 2</label>
		<input type="text" name="txtfdes2" placeholder="Enter your facility description" class="control" required/><br>

		<label>Facility Description 3</label>
		<input type="text" name="txtfdes3" placeholder="Enter your facility description" class="control" required/><br>

		<label>Location Attraction Name 1</label>
		<input type="text" name="txtlanm1" placeholder="Enter your location attraction name" class="control" required/><br>

		<label>Location Attraction Name 2</label>
		<input type="text" name="txtlanm2" placeholder="Enter your location attraction name" class="control" required/><br>

		<label>Location Attraction Name 3</label>
		<input type="text" name="txtlanm3" placeholder="Enter your location attraction name" class="control" required/><br>

		<label>Location Attraction Image 1</label>
		<input type="file" name="txtlaimg1" placeholder="Enter your location attraction image" class="control" required/><br>

		<label>Location Attraction Image 2</label>
		<input type="file" name="txtlaimg2" placeholder="Enter your location attraction image" class="control" required/><br>

		<label>Location Attraction Image 3</label>
		<input type="file" name="txtlaimg3" placeholder="Enter your location attraction image" class="control" required/><br>

		<label>Local Attraction Description 1</label>
		<input type="text" name="txtldes1" placeholder="Enter your local attraction description" class="control" required/><br>

		<label>Local Attraction Description 2</label>
		<input type="text" name="txtldes2" placeholder="Enter your local attraction description" class="control" required/><br>

		<label>Local Attraction Description 3</label>
		<input type="text" name="txtldes3" placeholder="Enter your local attraction description" class="control" required/><br>

		<label>Price</label>
		<input type="text" name="txtprice" placeholder="Enter the price" class="control" required/><br>

		<label>Description</label>
		<input type="text" name="txtdes" placeholder="Enter the description" class="control" required/><br>

		<label>Choose Campsites</label>
		<select name="cbocs" class="control">
			<?php 
			include('Connect.php');  

			$select="SELECT * FROM Campsite";
			$run = mysqli_query($connect, $select);
			$count=mysqli_num_rows($run);

			for ($i=0; $i <$count ; $i++)
			{

				$data=mysqli_fetch_array($run);//run htl ka sql statement ka select all moh ak dr ko db table mhr data yu pho fetch ko thone pee var htl htae
				$cid=$data['CampsiteID'];//fetch nk lo dr identify pee yuu
				$cnm=$data['CampsiteName'];

				echo "<option value='$cid'>$cnm + $cid</option>";

			}


			 ?>
		</select><br>
		<label>Choose Pitch Type</label>
		<select name="cbopt" class="control">
			<?php 
			include('Connect.php');  

			$select="SELECT * FROM PitchType";
			$run = mysqli_query($connect, $select);
			$count=mysqli_num_rows($run);

			for ($i=0; $i <$count ; $i++)
			{

				$data=mysqli_fetch_array($run);//run htl ka sql statement ka select all moh ak dr ko db table mhr data yu pho fetch ko thone pee var htl htae
				$ptid=$data['PitchTypeID'];//fetch nk lo dr identify pee yuu
				$ptnm=$data['PitchTypeName'];

				echo "<option value='$ptid'>$ptnm + $ptid</option>";

			}


			 ?>
		</select><br>

		<input type="submit" name="btnptype" value="Submit" class="btnar">
		</form>
		</div>
	</div>
<?php 
				$select = "SELECT * FROM Pitch";
				$query= mysqli_query($connect, $select);
				$count=mysqli_num_rows($query);
				if ($count==0) 
				{
					echo "<p>No record for Pitch </p>";
				}
				

			 ?>
			<div class="innerRG">
				<table border="1px">
			<tr>
				<th>ID</th>
				<th>Pitch Name</th>
				<th>Pitch Image</th>
				<th>Facility Name 1</th>
				<th>Facility Name 2</th>
				<th>Facility Name 3</th>
				<th>Facility Image 1</th>
				<th>Facility Image 2</th>
				<th>Facility Image 3</th>
				<th>Local Attraction Name 1</th>
				<th>Local Attraction Name 2</th>
				<th>Local Attraction Name 3</th>
				<th>Local Attraction Image 1</th>
				<th>Local Attraction Image 2 </th>
				<th>Local Attraction Image 3</th>
				<th>Price</th>
				<th>Description</th>
				<th>Status</th>
				<th>Campsite ID</th>
				<th>Pitch Type ID</th>
				<th>Action</th>
			</tr>
			<?php 

				for ($i=0; $i <$count; $i++) 
				{ 
					$data=mysqli_fetch_array($query);
					$pchid=$data['PitchID'];
					$pchnm=$data['PitchName'];
					$pchimg=$data['PitchImage'];
					$ploc=$data['location'];
					$fnm1=$data['FNm1'];
					$fnm2=$data['FNm2'];
					$fnm3=$data['FNm3'];
					$fimg1=$data['FImg1'];
					$fimg2=$data['FImg2'];
					$fimg3=$data['FImg3'];
					$lanm1=$data['LANm1'];
					$lanm2=$data['LANm2'];
					$lanm3=$data['LANm3'];
					$laimg1=$data['LAImg1'];
					$laimg2=$data['LAImg2'];
					$laimg3=$data['LAImg3'];
					$price=$data['Price'];
					$des=$data['Description'];
					$stt=$data['Status'];
					$csid=$data['CampsiteID'];
					$ptid=$data['PitchTypeID'];


					echo "<tr>";
					echo "<td>$pchid</td>";
					echo "<td>$pchnm</td>";
					echo "<td>$pchimg</td>";
					echo "<td>$fnm1</td>";
					echo "<td>$fnm2</td>";
					echo "<td>$fnm3</td>";
					echo "<td>$fimg1</td>";
					echo "<td>$fimg2</td>";
					echo "<td>$fimg3</td>";
					echo "<td>$lanm1</td>";
					echo "<td>$lanm2</td>";
					echo "<td>$lanm3</td>";
					echo "<td>$laimg1</td>";
					echo "<td>$laimg2</td>";
					echo "<td>$laimg3</td>";
					echo "<td>$price</td>";
					echo "<td>$des</td>";
					echo "<td>$stt</td>";
					echo "<td>$csid</td>";
					echo "<td>$ptid</td>";
					echo "<td>
					<a href='PitchUpdate.php?pchID=$pchid'>Update</a>| 
					<a href='PitchDelete.php?pchID=$pchid'>Delete</a>
					</td>
					";

					echo "</tr>";
				}
			 ?>

		</table>
			</div>	
		
</body>
</html>