<?php 
include('Connect.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<title>Information</title>
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
	<legend></legend> 
	<section class="catalog">
		<?php
		$query="SELECT * FROM Pitch p, PitchType pt
				WHERE p.PitchTypeID = pt.PitchTypeID";

		$run=mysqli_query($connect, $query);
		$count=mysqli_num_rows($run);

		if ($count==0) 
		{
			echo "<p>There's no GWSC Info</p>";
		}
		else
		{
			for ($i=0; $i <$count ; $i++) 
			{ 
				$query1="SELECT * FROM Pitch p, PitchType pt 
						WHERE p.PitchTypeID=pt.PitchTypeID
						Order By PackageID LIMIT $i, 2";
				$ret1=mysqli_query($connect, $query);
				$count1=mysqli_num_rows($ret1);

				echo "<div class='info-column'>";
				for ($j=0; $j <$count1 ; $j++) 
				{ 
					$data=mysqli_fetch_array($ret1);
					$PID=$data['PitchID'];
					$Pname=$data['PitchName'];
					$img=$data['PitchImage'];
					$fnm=$data['FNm1'];
					$fimg=$data['FImg1'];
					$lanm1=$data['LANm1'];
					$laimg1=$data['LAImg1'];
					$prc=$data['Price'];
					$loc=$data['location'];
					$ptnm=$data['PitchTypeName'];
		        ?>

		        <div class="info-img">

		        	<b>Package ID: <?php echo $PID; ?></b><br>

		        	<b>Package Name: <?php echo $Pname; ?></b>

		        	<img src="Images/<?php echo $img; ?>"><br>
					<iframe src="<?php echo $loc; ?>" width="100" height="100" border-radius="20px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>

					<h3>Facilities</h3>
					<b>Facility Name: <?php echo $fnm; ?></b>
		        	<img src="Images/<?php echo $fimg; ?>"></img>
		        	<a href="Facilities.php?PID= <?php echo $PID ?>">Look More>>></a>
		        	<br>

		        	<h3>Local Attractions</h3>
		        	<b>Local Attraction Name: <?php echo $lanm1; ?></b>
		        	<img src="Images/<?php echo $laimg1; ?>"></img>
		        	<a href="Local_Attr.php?PID= <?php echo $PID ?>">Look More>>></a>

		        	<div class="desc">
					<b>Price: <?php echo $prc; ?></b><br>
		        	<b>Pitch Type Name: <?php echo $ptnm; ?></b><br>
		        	<a href="Details.php?PID= <?php echo $PID ?>">See More>>></a>
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
	<p>Copyright 2023 By GWCS | You are at Information page</p>
</div>
</body>
</html>