<?php 
include('Connect.php');
if (isset($_POST['btnSub'])) 
{
	
		$email=$_POST['txtCoemail'];
		$ph=$_POST['txtCoph'];
		$cmsg=$_POST['txtCoMsg'];
	
		$insert="INSERT INTO Contact(ContactMessage, PhNo, Email)
		VALUES ('$cmsg','$ph','$email')";
		$finalResult=mysqli_query($connect,$insert);

		if ($finalResult) {
		echo "<script>window.alert('Message Sent Successful!')</script>";
		echo "<script>window.location='Contact.php'</script>";
	}	

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<title>Contact Us</title>
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
				<img src="Images/dash01.jpg" alt="image">
			</div>
		<form action="Contact.php" method="POST" class="admreg">
		<h3>Contact Us Form</h3>		
<div class="form-wrap2">
  <input type="text" name="txtCoph" placeholder="Enter your phone" class="control2">
</div>
		
<div class= "form-wrap2">
  <input type="text" name="txtCoemail" placeholder="Enter your Email" class="control2">
</div>

<div class="form-wrap2">
	<input name="txtCoMsg" placeholder="Enter your message"class="control2"></input>
</div>
		<input type="submit" name="btnSub" value="Submit" class="btnar"><br>
		<a href="Policy.php">Privacy Policy</a>
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
	<p>Copyright 2023 By GWCS | You are at Contact Us page</p>
</div>
</body>
</html>