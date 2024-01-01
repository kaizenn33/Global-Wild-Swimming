<?php 

//$loginatt=$_SESSION['LoginError']
//if ($loginatt==3){timer code}
echo "<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        display.textContent = minutes + ':' + seconds;

        if (--timer < 0) {
            // Timer expired, do something
            // E.g., redirect to login page
            window.location.href = 'CustomerLogin.php';
        }
    }, 1000);
}

window.onload = function () {
    var tenMinutes = 60 * 10,
        display = document.querySelector('#timer');
    startTimer(tenMinutes, display);
};
</script>
";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Style4.css">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 	<title></title>
 </head>
 <body>
 	<h1 class="timerh1">Please wait till the timer runs to login again</h1>
 <div id="timer" class="timer"></div>
 </body>
 </html>