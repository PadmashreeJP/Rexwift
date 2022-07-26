<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-home</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<body>
<div class="Navibar"> 
<img src="Rexlogo.jpg"> 
<?php
include 'config.php';
$sel = "SELECT * FROM rclient  WHERE email = '$email' AND pass = '$pass'";
$rs = $conn->query($sel);
if($_SESSION['email'] && ($_SESSION['pass'])){
?>
<ul>
<li><a href="rexwift_logout.php">LOG OUT</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>
<div>
<a href="editclient.php" style="text-decoration:none; color:white;">Change password</a><br>
<a href="deleteclient.php"style="text-decoration:none; color:white;">Delete my account</a>
</div>
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
<div class="imgtext">NOTHING BEATS A REALLY GOOD DRIVE</div>
<div class="imgbook"><a href="rexwift_book.php">Book your car here!<a></div>
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