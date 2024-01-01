<?php
session_start(); 
include('connect.php');

if (isset($_GET['PID']))
{
	$PID = $_GET['PID'];
	$query =  "SELECT p.*, pt.PitchTypeID, pt.PitchTypeName, c.CampsiteID, c.CampsiteName
				FROM Pitch p, PitchType pt, Campsite c
				WHERE p.PitchTypeID = pt.PitchTypeID
				AND p.CampsiteID = c.CampsiteID
				AND p.PitchID = '$PID'";
	$run=mysqli_query($connect, $query);
	$data=mysqli_fetch_array($run);

	$PN=$data['PitchName'];
	$pimg=$data['PitchImage'];
	$loc=$data['location'];
	$fn1=$data['FNm1'];
	$fn2=$data['FNm2'];
	$fn3=$data['FNm3'];
	$fi1=$data['FImg1'];
	$fi2=$data['FImg2'];
	$fi3=$data['FImg3'];

	$fd1=$data['FDes1'];
	$fd2=$data['FDes2'];
	$fd3=$data['FDes3'];

	$ln1=$data['LANm1'];
	$ln2=$data['LANm2'];
	$ln3=$data['LANm3'];
	$li1=$data['LAImg1'];
	$li2=$data['LAImg2'];
	$li3=$data['LAImg3'];

	$ld1=$data['LDes1'];
	$ld2=$data['LDes2'];
	$ld3=$data['LDes3'];

	$prc=$data['Price'];
	$cnm=$data['CampsiteName'];
	$des=$data['Description'];
	$ptnm=$data['PitchTypeName'];

}
else
{
	echo "<p>Package Detail Not Found.</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
	<title>Details</title>
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
	<form action="Details.php" method="GET">
	<fieldset class="info-bg">
           <h2>Package Details for <?php echo $PN; ?></h2> 
           <section class="catalog">
           <div class="info-img">   
            
                
                    <h3>Information Details</h3>
                    <b>Pitch Name: <?php echo $PN; ?></b>
                     <img src="Images/<?php echo  $pimg ?>"/>
                     <br>
 
                    <iframe src="<?php  echo $loc ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>

                    <h3>Facility Details</h3>
		        	<b><?php echo $fn1; ?></b>
                 <img src="Images/<?php echo  $fi1 ?>"/>
		        	<b><?php echo $fd1; ?></b><br><br>

		        	<b><?php echo $fn2; ?></b>
                 <img src="Images/<?php echo  $fi2 ?>"/>
		        	<b><?php echo $fd2; ?></b><br><br>

		        	<b><?php echo $fn3; ?></b>
                 <img src="Images/<?php echo  $fi3 ?>"/>
		        	<b><?php echo $fd3; ?></b><br><br>

                 <br>
                 <h3>Local Attraction Details</h3>
		        	<b><?php echo $ln1; ?></b>
                 <img src="Images/<?php echo  $li1 ?>"/>
		        	<b><?php echo $ld1; ?></b><br><br>

		        	<b><?php echo $ln2; ?></b>
                 <img src="Images/<?php echo  $li2 ?>"/>
		        	<b><?php echo $ld2; ?></b><br><br>

		        	<b><?php echo $ln3; ?></b>
                 <img src="Images/<?php echo  $li3 ?>"/>
		        	<b><?php echo $ld3; ?></b><br><br>

                      
   
            <tr>
                <td>
                  <table>
                    <tr>
                        <td>PackageName</td>
                        <td>
                            <?php echo $PN ?>
                        </td>
                    </tr>
 
                     <tr>
                        <td>Price</td>
                        <td>
                            <?php echo $prc ?>
                        </td>
                    </tr>
 
 
                    <tr>
                        <td>Campsite Name</td>
                        <td>
                            <?php echo $cnm ?>
                        </td>
                    </tr>
 
                     <tr>
                        <td>Pitch Type</td>
                        <td>
                            <?php echo $ptnm ?>
                        </td>
                    </tr>
 
                       <tr>
                        <td>Description</td>
                        <td>
                            <?php echo $des ?>
                        </td>
                    </tr>
 
                    <a href="booking.php?PID=<?php echo $PID ?>">BookingNow</a>
                     
                  </table>  
 
                </td>
 
 
            </tr>
 
 
           </div>
 </section>
    </fieldset>


	</form>
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
	<p>Copyright 2023 By GWCS | You are at Pitch Details page</p>
</div>
</body>
</html>
