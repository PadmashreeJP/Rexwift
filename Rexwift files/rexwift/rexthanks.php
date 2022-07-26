<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-Thank you!</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<body style="bacbackground-color:#e6f7ff;">

<div class="Navibar"> 
<img src="Rexlogo.jpg"> 
<?php
	if($_SESSION['email'] && ($_SESSION['pass'])){
?>
<ul>
<li><a href="rexwift_logout.php">LOG OUT</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>
<?php
	} else{
?>
<ul>
<li><a href="rexwift_login.php">LOGIN</a></li>
<li><a href="rexwift_signup.php">SIGN UP</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>
<?php
	}
?>
</div><br><br><br><br>
<div class="homeimg">
<img src="https://www.hdnicewallpapers.com/Walls/Big/Jaguar/2018_Jaguar_Car_on_Road_HD_Wallpaper.jpg"> 
<div class="imgtext" style="background: rgba(255, 255, 255, 0.5);"><h2 style="text-align: center; color:#CC0000; font-family: 'Courier New', Courier, monospace; font-size: 30px;">
Your payment has been processed.<br>
We will reach out to you shortly.<br>
Your car can be collected from your nearest Rexwift branch.
</h2><br></div><br>
<div class="imgbook" style="top:60%;font-family: Open Sans, sans-serif;font-size: 35px;">Thank you for choosing Rexwift!</div>				
</div>
</div>


			
<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
<li><a href="rexwift_contact.php">CONTACT US</a></li>
<li><a href="rexwift_feedback.php">FEEDBACK</a></li>
</ul>
</div>
</body>
</html>