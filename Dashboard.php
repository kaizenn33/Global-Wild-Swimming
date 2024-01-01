<?php 
session_start();
include('Connect.php');

$anme=$_SESSION['ANM'];
$aem=$_SESSION['AEM'];

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Style4.css">
 	<title>Admin Dashboard</title>
 </head>
 <body>
<header>

<h1 class="headerdash">Welcome to Travel and Tour website, <b><?php echo $anme; ?></b>
 </h1>
<h3>Manage here for admin process.</h3>
</div>
  </header> 
<div class="dash-container">
    <div class="container1">
        <button class="btndash"><a href="Sites.php">Add Sites</a></button>
    </div>
    <div class="container2">
        <div><img src=""></div>
        <button class="btndash"><a href="Pitch.php">Manage Pitch</a>
</button>
    </div>
    <div class="container3">
        <div><img src=""></div>
        <button class="btndash"><a href="Pitchtype.php">Add Pitch type</a></button>
    </div>
    <div class="container4">
        <div><img src=""></div>
        <button class="btndash"><a href="Booking_List.php">Booking Lists</a></button>
    </div>
    
    
    
</div>
 </body>
 </html>



 