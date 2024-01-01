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
		<div class="logo">
				<img src="Images/mainlogo3.jpg"  alt="image" width="100px">
			</div>					
	</header>
<fieldset class="info-bg">
	<h3>Booking Lists</h3>
	<section class="catalog">
		<?php
		$query="SELECT * FROM Bookings b, Pitch p
				WHERE b.PitchID = p.PitchID";

		$run=mysqli_query($connect, $query);
		$count=mysqli_num_rows($run);

		if ($count==0) 
		{
			echo "<p>There's no Booking Info</p>";
		}
		else
		{
			for ($i=0; $i <$count ; $i+=2) 
			{ 
				$query1="SELECT * FROM Bookings b, Pitch p 
						WHERE b.PitchID = p.PitchID
						Order By BookingID LIMIT $i, 2";

				$ret1=mysqli_query($connect, $query);
				$count1=mysqli_num_rows($ret1);

				echo "<div class='info-column'>";
				for ($j=0; $j <$count1 ; $j++) 
				{ 
					$data=mysqli_fetch_array($ret1);

					$bdt=$data['BookingDate'];
					$pnm=$data['PitchName'];
					$bstt=$data['BookingStatus'];
					$pr=$data['Price'];
					$sttl=$data['Subtotal'];
					$tax=$data['Tax'];
					$ceml=$data['CustomerEmail'];
					$bqty=$data['BookingQty'];
					$pmty=$data['PaymentType'];
		        ?>

		        <div class="info-img">

		        	<b>Booking Date: <?php echo $bdt; ?></b><br>

					<b>Pitch Name: <?php echo $pnm; ?></b><br>

		        	<b>Booking Status: <?php echo $bstt; ?></b><br>

		        	<b>Customer's Email: <?php echo $ceml; ?></b><br>

		        	<b>Booking Quantity: <?php echo $bqty; ?></b><br>

		        	<b>Payment Type: <?php echo $pmty; ?></b>

		        	<div class="desc">
					<b>Unit Price: <?php echo $pr; ?></b><br>

		        	<b>Tax: <?php echo $tax; ?></b><br>

		        	<b>Subtotal: <?php echo $sttl; ?></b><br>

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
</body>
</html>