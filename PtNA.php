<?php 
session_start();
include('Connect.php');




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<title>Pitch Type And Availability</title>
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
<section class="ptype" id="Ptype">
	<div class="ptype-img">
		<img src="Images/ptype1.jpg">
	</div>
	<div class="ptype-text">
		<h5>TOURING CARAVEN PITCH</h5>
		<h2>Come and Enjoy our Caraven Pitch</h2>
		<p>
		Caravan pitches are grass pitches with electric hook-up, suitable for a standard sized tent, caravan or motorhome. A touring caravan pitch refers to a designated area or space at a caravan or camping site where individuals or families can park their touring caravan for a specified period of time, typically for a short-term stay. 
		</p>
		<a href="#" class="btn1">Read More</a>
	</div>

	<div class="ptype-img">
		<img src="Images/ptype2.jpg">
	</div>
	<div class="ptype-text">
		<h5>MOTORHOME PITCH</h5>
		<h2>Come and Enjoy our Motorhome Pitch</h2>
		<p>
		A motorhome pitch, often referred to as a motorhome or camper pitch, is a designated space or area at a campsite or motorhome park where individuals or families can park their motorhomes or campervans for a temporary stay. Motorhomes are self-contained vehicles that combine living quarters with a driving engine, allowing travelers to have both transportation and accommodations in one unit.
		</p>
		<a href="#" class="btn1">Read More</a>
	</div>

	<div class="ptype-img">
		<img src="Images/ptype3.jpg">
	</div>
	<div class="ptype-text">
		<h5>TENT PITCH</h5>
		<h2>Come and Enjoy our Tent Pitch</h2>
		<p>
		A tent pitch, sometimes simply referred to as a camping pitch or tent site, is a designated area at a campground or campsite where individuals or groups can set up their tents for a temporary outdoor stay. This type of accommodation is typically used by campers who prefer a more traditional camping experience, where they sleep in tents and are often in closer proximity to nature. Tent pitches come in various sizes and configurations, and they provide a space for campers to set up their tents and enjoy the outdoor environment.
		</p>
		<a href="#" class="btn1">Read More</a>
	</div>
</section>
<div>
	<form action="PtNA.php" method="Post">
				<section class="sbar">
				<div class="sbar-content">
				<div class="sbar-text">
				<h2>explore more?</h2>
				<p>Let's go on camping, make your day</p>
		</div>			
		</tr>	
		<form>
			<input type="text" placeholder="Find pitch and features" name="txtsearch">
			<input type="submit" value="Search" class="btn1" name="psub">

		</form>
	</div>
</section>
		<?php 
			if (isset($_POST['psub'])) 
			{
					$pnm=$_POST['txtsearch'];

					$query="SELECT * FROM Pitch
					WHERE Status='Active'
					AND PitchName LIKE '%$pnm%'";

					$result=mysqli_query($connect, $query);
					$count=mysqli_num_rows($result);

					if ($count>0) 
					{
						echo "<table>";

						for ($i=0; $i < $count; $i+=2) 
						{ 
							$query1="SELECT * FROM Pitch
							WHERE Status='Active'
							AND PitchName LIKE '%$pnm%' LIMIT $i,2";

							$result1=mysqli_query($connect, $query1);
							$count1=mysqli_num_rows($result1);

							echo "<tr>";
							for ($j=0; $j <$count1 ; $j++) 
							{ 
								$data=mysqli_fetch_array($result1);
								echo "<td>";
								echo "<a href='Details.php?PID=".$data['PitchID']."'>";

								echo "<img src='Images/".$data['PitchImage']."' width='300px'>";

								echo "<br>";

								echo "<b>".$data['PitchName']."</b>";

								echo "<br>";

								echo "<b>".$data['Price']." USD</b>";

								echo "</td>";

							}
							echo "</tr>";
						}
						echo "</table>";
					}
					else
					{
						echo "<h2>Data not found. Error 404</h2>";
					}
			}
		?>
	</form>
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
	<p>Copyright 2023 By GWCS | You are at Pitch Type and Availability page</p>
</div>
<script src="script.js"></script>
</body>
</html>
