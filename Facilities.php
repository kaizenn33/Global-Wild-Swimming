<?php
session_start(); 
include('connect.php');

if (isset($_GET['PID']))
{
	$PID = $_GET['PID'];
	$query =  "SELECT * FROM Pitch
				WHERE PitchID = '$PID'";
	$run=mysqli_query($connect, $query);
	$data=mysqli_fetch_array($run);

	$PID=$data['PitchID'];
	$Pnm=$data['PitchName'];
	$fn1=$data['FNm1'];
	$fn2=$data['FNm2'];
	$fn3=$data['FNm3'];
	$fi1=$data['FImg1'];
	$fi2=$data['FImg2'];
	$fi3=$data['FImg3'];
	$fd1=$data['FDes1'];
	$fd2=$data['FDes2'];
	$fd3=$data['FDes3'];
}
else
{
	echo "<script>window.alert('Facility details not found. Please choose a pitch first.')</script>";
	echo "<script>window.location='Information.php'</script>";
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
	<link rel="stylesheet" type="text/css" href="script.js">
	<title>Facilities</title>
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
<div class="fac_bg">
	<h2>Facility Details for <?php echo $Pnm; ?></h2>
<div class="wrapper">
	<ul class="carousel2">
		<li class="card2">
			<div class="isimg"><img src="Images/<?php echo "$fi1"; ?>" alt="Image"></div>
			<h2><?php echo "$fn1"; ?></h2>
			<span><a href="Details.php?PID= <?php echo $PID ?>">Learn More</a></span>
			<p><?php echo $fd1; ?></p>
		</li>
		<li class="card2">
			<div class="isimg"><img src="Images/<?php echo $fi2; ?>" alt="Image"></div>
			<h2><?php echo "$fn2"; ?></h2>
			<span><a href="Details.php?PID= <?php echo $PID ?>">Learn More</a></span>
			<p><?php echo $fd2; ?></p>
		</li>
		<li class="card2">
			<div class="isimg"><img src="Images/<?php echo "$fi3"; ?>" alt="Image"></div>
			<h2><?php echo "$fn3"; ?></h2>
			<span><a href="Details.php?PID= <?php echo $PID ?>">Learn More</a></span>
			<p><?php echo $fd3; ?></p>
		</li>
	</ul>
</div><br>
<h2 class="wth2">Wearable technologies</h2>
<div class="wrapper" id="localatr">
	<ul class="carousel">
		<li class="card">
			<div class="isimg"><img src="Images/wt1.jpg" alt="Image"></div>
			<h2>Smartwatches</h2>
			<span>Wrist-worn devices</span>
			<p>They often include features like fitness tracking, heart rate monitoring, GPS navigation, notifications from smartphones, and even app support.</p>
		</li>
		<li class="card">
			<div class="isimg"><img src="Images/wt2.jpg" alt="Image"></div>
			<h2>AR/VR Headsets</h2>
			<span>Argumented Reality/Virtual Reality</span>
			<p>They are wearable devices designed to provide immersive digital experiences by altering or enhancing the way users perceive the world around them.</p>
		</li>
		<li class="card">
			<div class="isimg"><img src="Images/wt3.jpg" alt="Image"></div>
			<h2>Fitness Tracker</h2>
			<span>Wrist-worn devices</span>
			<p>They can track physical activity, monitor heart rate, count steps, and calculate calorie expenditure. They are popular for fitness and health monitoring.</p>
		</li>
	</ul>
</div><br>
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
	<p>Copyright 2023 By GWCS | You are at Facilities page</p>
</div>
</body>
</html>