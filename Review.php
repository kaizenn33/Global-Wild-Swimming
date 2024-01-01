<?php 
session_start();
include('Connect.php');
if (isset($_SESSION['CID'])) 
{
	if (isset($_POST['btnSub']))
	{
	$CuID=$_POST['txtCID'];
	$rating=$_POST['rdort'];
	$msg=$_POST['txtCoMsg'];

	$insert="INSERT INTO Reviews(CustomerID, Rating, ReviewMessage)
			VALUES ('$CuID', '$rating', '$msg')";
	$query=mysqli_query($connect, $insert);

		if ($query)
		{
		echo "<script>window.alert('Customer Rated Successfully')</script>";
		echo "<script>window.location='Review.php'</script>";

		}

	}
}
else
{
	echo "<script>window.alert('Customer unidentified')</script>";
	echo "<script>window.location='CustomerLogin.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<title>Review</title>
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
<div class="contact_bg">
<div class="contact_form">
    <div class="image-holder">
				<img src="Images/review1.jpg" alt="image">
			</div>
		<form action="Review.php" method="POST" class="admreg">
		<h3>Give some reviews</h3>
		<div class="rating">
			<input type="radio" name="rdort" value="5" id="star5" required/>
			<label for="star5"></label>
		</div>
		<div class="rating">
			<input type="radio" name="rdort" value="4" id="star4">
			<label for="star4"></label>
		</div>
		<div class="rating">
			<input type="radio" name="rdort" value="3" id="star3">
			<label for="star3"></label>
		</div>
		<div class="rating">
			<input type="radio" name="rdort" value="2" id="star2">
			<label for="star2"></label>
		</div>
		<div class="rating">
			<input type="radio" name="rdort" value="1" id="star1">
			<label for="star1"></label>
		</div>	
		
<div class="form-wrap2">
	<textarea name="txtCoMsg" placeholder="Enter your review message" class="control2"></textarea>
</div>
<input type="hidden" name="txtCID" value="<?php echo $_SESSION['CID']; ?>">
		<input type="submit" name="btnSub" value="Submit" class="btnar"><br>
		<a href="Review_View.php">Look at Reviews>></a>
</a>
		</form>
	</div>
	</div>
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
	<p>Copyright 2023 By GWCS | You are at Review page</p>
</div>
</body>
</html>