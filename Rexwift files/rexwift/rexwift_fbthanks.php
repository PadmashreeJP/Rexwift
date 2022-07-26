<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="rexwift.css">
<title>REXWIFT</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<body style="bacbackground-color:#e6f7ff;">

<div class="Navibar"> 
<img src="rexlogo.jpg"> 
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
Thank You for your valuable feedback !<br>
We really appreciate you taking the time out to share your experience with us !<br>
</h2><br></div><br>
<div class="imgbook" style="top:60%;font-family: Times new roman,georgia,serif;font-size: 30px;">We look forward to working with you again in future !</div>				
</div>
</div>


			
<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
<li><a href="">CONTACT US</a></li>
<li><a href="">FEEDBACK</a></li>
</ul>
</div>
</body>
</html>