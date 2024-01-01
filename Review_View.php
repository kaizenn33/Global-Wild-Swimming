<?php 
include('Connect.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<title>Customer's reviews</title>
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
<fieldset class="info-bg">
	<h3>Customers' Reviews</h3>
	<section class="catalog">
		<?php
		$query="SELECT * FROM Customers c, Reviews r
				WHERE c.CustomerId = r.CustomerID";

		$run=mysqli_query($connect, $query);
		$count=mysqli_num_rows($run);

		if ($count==0) 
		{
			echo "<p>There's no review Info</p>";
		}
		else
		{
			for ($i=0; $i <$count ; $i+=2) 
			{ 
				$query1="SELECT * FROM Customers c, Reviews r 
						WHERE c.CustomerId=r.CustomerID
						Order By ReviewID LIMIT $i, 2";

				$ret1=mysqli_query($connect, $query);
				$count1=mysqli_num_rows($ret1);

				echo "<div class='info-column'>";
				for ($j=0; $j <$count1 ; $j++) 
				{ 
					$data=mysqli_fetch_array($ret1);

					$Cfnm=$data['CustomerFirstName'];
					$Csnm=$data['CustomerSurname'];
					$vc=$data['Viewcount'];
					$Rt=$data['Rating'];
					$Rmsg=$data['ReviewMessage'];
		        ?>

		        <div class="info-img">

		        	<b>Customer First Name: <?php echo $Cfnm; ?></b><br>

					<b>Customer Surname: <?php echo $Csnm; ?></b><br>

		        	<b>Customer's View Count: <?php echo $vc; ?></b>

		        	<div class="desc">
					<b>Rating: <?php echo $Rt; ?></b><br>

		        	<b>Review Message: <?php echo $Rmsg; ?></b><br>

		        	</div>
		        	

		        </div>
		        <?php

				}
				echo "</div>";
			}
		}

	?>
	</section>
</fieldset>
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
	<p>Copyright 2023 By GWCS | You are at Customer Reviews page</p>
</div>
</body>
</html>