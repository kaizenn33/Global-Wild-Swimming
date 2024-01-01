<?php 
session_start();
include('Connect.php');

if (!isset($_SESSION['CID']))
{
		echo "<script>window.alert('Please Login Again')</script>";
		echo "<script>window.location='CustomerLogin.php'</script>";
}
else
{
	$customer=$_SESSION['CID'];
	$select="SELECT * FROM Customers WHERE CustomerId='$customer'";
	$query=mysqli_query($connect, $select);
	$count=mysqli_num_rows($query);

	if ($count>0) 
	{
		$data=mysqli_fetch_array($query);
		$view=$data['Viewcount'];
		//echo "View Count is ".$view;	
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="script.js" defer></script>
	<title>Home Page</title>
</head>
<body>
	<script>alert("View count is <?php echo $view; ?>")</script>
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
<section class="home">
	<div class="home-text">
		<h5>LET'S</h5>
		<h1>Plan your <br> own camping </h1>
		<p>This is the global wild swimming and camping website with thousands of campsites <br> pitches, home to the paradise of nature</p>
		<a href="booking.php" class="btn">Book to camp</a>
		<a href="#Feature" class="btn">Explore More</a>
	</div>
</section>

<section class="features" id="Feature">
	<div class="f-content">
		<div class="row">
			<div class="row-img">
				<a href="#Ptype"><img src="Images/row11.jpg"></a>
			</div>
			<h4>Pitch Types</h4>

		<div class="row">
			<div class="row-img">
				<a href="Facilities.php"><img src="Images/row21.jpg"></a>
			</div>
			<h4>Feautres</h4>
		</div>

		<div class="row">
			<div class="row-img">
				<a href="Review.php"><img src="Images/row31.jpg"></a>
			</div>
			<h4>Reviews</h4>
		</div>

		<div class="row">
			<div class="row-img">
				<a href="#localatr"><img src="Images/is4.jpg"></a>
			</div>
			<h4>Local Attractions</h4>
		</div>
	</div>
</section>
<div class="youtube">
	<h2>Explore from videos>></h2>
	<iframe width="850" height="480" src="https://www.youtube.com/embed/y0wXQ5EdW_0" title="Relaxing SOLO Camping with Rain Forest Mountain views [ gloomy weather, cosy shelter, rain ASMR ]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	<iframe width="850" height="480" src="https://www.youtube.com/embed/nnh-mQt78BU" title="Solo CAMPING in RAIN [ relaxing in the cosy tent shelter | ASMR ]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	<iframe width="853" height="480" src="https://www.youtube.com/embed/YzQ7qSDr6YA" title="SOLO RAIN Camping in a SKYLIGHT TENT | cozy, relaxing car shelter | ASMR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<h2 class="atrh">Local Attractions</h2>
<div class="wrapper" id="localatr">
	<i id="left" class="fa-solid fa-angle-left"></i>
	<ul class="carousel">
		<li class="card">
			<div class="isimg"><img src="Images/is1.jpg" alt="Image"></div>
			<h2>The Colosseum</h2>
			<span>Rome, Italy</span>
			<p>An ancient Roman amphitheater located in the center of Rome, Italy. It is one of the most iconic and well-preserved examples of Roman engineering and architecture and is a symbol of both ancient Rome and the city of Rome itself.</p>
		</li>
		<li class="card">
			<div class="isimg"><img src="Images/is2.jpg" alt="Image"></div>
			<h2>The Central Park</h2>
			<span>New York, USA</span>
			<p>Central Park is a vast urban park located in the heart of Manhattan, New York City. It is one of the most famous and iconic parks in the world, known for its natural beauty, recreational opportunities, and cultural significance.</p>
		</li>
		<li class="card">
			<div class="isimg"><img src="Images/is3.jpg" alt="Image"></div>
			<h2>The Liberty Statue</h2>
			<span>New York, USA</span>
			<p>In 1865, a French political intellectual and anti-slavery activist named Edouard de Laboulaye proposed that a statue representing liberty be built for the United States.</p>
		</li><li class="card">
			<div class="isimg"><img src="Images/is4.jpg" alt="Image"></div>
			<h2>The Eiffel Tower</h2>
			<span>Paris, France</span>
			<p>The Eiffel Tower is an iconic wrought-iron landmark located in Paris, France. Standing at 324 meters (1,063 feet) tall, it offers breathtaking panoramic views of the city and has become a symbol of both Paris and French engineering prowess.</p>
		</li><li class="card">
			<div class="isimg"><img src="Images/is5.jpg" alt="Image"></div>
			<h2>The Tokyo Tower</h2>
			<span>Tokyo, Japan</span>
			<p>ITokyo Tower is an iconic landmark in Tokyo, Japan, known for its striking red and white design reminiscent of the Eiffel Tower. Standing at 333 meters (1,092 feet) tall, it offers panoramic views of the city and serves as both a communications tower and a popular tourist attraction.</p>
		</li><li class="card">
			<div class="isimg"><img src="Images/is6.jpg" alt="Image"></div>
			<h2>The Great Wall</h2>
			<span>Beijing, China</span>
			<p>The Great Wall of China is a UNESCO World Heritage Site and one of the most iconic architectural wonders in the world. Stretching over 13,000 miles (21,196 kilometers) through northern China, it was originally built as a series of fortifications to protect against invasions.</p>
		</li>
	</ul>
		<i id="right" class="fa-solid fa-angle-right"></i>
</div>
<section class="sbar">
	<div class="sbar-content">
		<div class="sbar-text">
			<h2>explore more?</h2>
			<p>Let's go on camping, make your day</p>
		</div>

		<form>
			<input type="text" placeholder="Find pitch and features">
			<input type="submit" value="Search" class="btn1">
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
</section>
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
	<p>Copyright 2023 By GWCS | You are at Home page</p>
</div>
</body>
</html>