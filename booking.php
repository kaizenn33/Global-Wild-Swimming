<?php 
include('Connect.php');
if (isset($_GET['PID']))
{
			$pid=$_GET['PID'];

	if (isset($_POST['btnbook'])) 
	{
		$query="SELECT * FROM Pitch
			WHERE PitchID='$pid'";
		$run=mysqli_query($connect, $query);
		$data=mysqli_fetch_array($run);

		$bdt=$_POST['txtbdt'];
		$pID=$_GET['PID'];
		$price=$data['Price'];
		$tax=$price*1/10;
		$bqty=$_POST['txtbqty'];
		$subt=($price+$tax)*$bqty;
		$cem=$_POST['txtceml'];
		$pmtype=$_POST['txtbpt'];

		$insert="INSERT INTO Bookings(BookingDate, PitchID, BookingStatus, Price, Subtotal, Tax, CustomerEmail, BookingQty,PaymentType)
		VALUES ('$bdt', '$pID', 'Active', '$price', '$subt', '$tax', '$cem', '$bqty', '$pmtype')";
		$finalResult=mysqli_query($connect,$insert);

			if ($finalResult) 
			{
				echo "<script>window.alert('Booked Successful!')</script>";
				echo "<script>window.alert('Total Price for your booking is ".$subt."US Dollar')</script>";
				echo "<script>window.location='booking.php'</script>";
			}
			else
			{
				echo "<script>window.alert('Booking failed!')</script>";
				echo "<script>window.location='booking.php'</script>";
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
	<title>Booking</title>
</head>
<body>
<header>
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="Images/mainlogo3.jpg"  alt="image" width="100px">
				</div>
					<nav>
						<ul id="menuList">
							<li><a href="Home_Page.php">Home</a></li>
							<li><a href="Information.php">Information</a></li>
							<li><a href="PtNA.php">Pitch Type and Availability</a></li>
							<li><a href="Review.php">Reviews</a></li>
							<li><a href="Facilities.php">Facilities</a></li> 
							<li><a href="Contact.php">Contact Us</a></li>
							<li><a href="Local_Attr.php">Local Attractions</a></li>
						</ul>
					</nav>
				<img src="Images/menu_logo.jpg" class="menulogo" onclick="togglemenu()">
			</div>
		</div>
	</header>
<section class="form-container">
		<form method="POST" class="admreg">
		<h2>Booking Form</h2>
<div class="form-stats">
  <input type="text" name="txtbdt" placeholder="Enter booking date" class="control">
</div>
		
<div class="form-stats">
  <input type="text" name="txtceml" placeholder="Enter your email" class="control">
</div>
		
<div class= "form-stats">
  <input type="text" name="txtbqty" placeholder="Enter booking qunatity" class="control">
</div>

<div class= "form-stats">
  <input type="text" name="txtbpt" placeholder="Enter your payment type" class="control">
</div>

<div class="capcha"> 
<input type="checkbox" required/>I am not a robot
<img src="Images/recap.png">
</div>
      
	<input type="submit" name="btnbook" value="Book" class="btnar">
	<input type="reset" name="" value="Clear" class="btnar">
</section>
<script type="text/javascript">
var menuList = document.getElementById("menuList");

	menuList.style.maxHeight = "0px";

	function togglemenu(){

		if (menuList.style.maxHeight == "0px") {

			menuList.style.maxHeight = "200px"
		}
		else{

			menuList.style.maxHeight = "0px"
		}
	}
</script>
<section class="footer">
	<div class="footer-box">
		<h3>Services</h3>
		<a href="#">Camping</a>
		<a href="#">Swimming</a>
		<a href="#">Facilities</a>
		<a href="#">Local Attractions</a>
	</div>
	<div class="footer-box">
		<h3>About</h3>
		<a href="#">Our Story</a>
		<a href="#">Team</a>
		<a href="#">Benefits</a>
		<a href="#">Careers</a>
	</div>
	<div class="footer-box">
		<h3>Help</h3>
		<a href="#">FAQs</a>
		<a href="#">Contact us</a>
	</div>
	<div class="footer-box">
		<h3>Socials</h3>
		<div class="socials">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="rssfeed.php"><i class="fa fa-rss"></i></a>
		</div>
	</div>
</section>
<div class="copyright">
	<p>Copyright 2023 By GWCS | You are at Booking page</p>
</div>
</body>
</html>