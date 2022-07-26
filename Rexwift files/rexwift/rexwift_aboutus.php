<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-about us</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<body style="background-color:#e6f7ff;">

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
</div><br>

<div class = "text">
<h1 style= "color:#00264d;font-family: Open Sans, sans-serif;" align="center"><b>ABOUT US</b></h1><br>
<div class = "text">
<h1 style= "color:#00264d;font-family: Open Sans, sans-serif; float:left;" align="center"><b><u>Get to know more about us!</u></b></h1><br>
<img src="about.png" ><br><br>
<p>Good things happen when people can move, whether across town or toward their dreams. Opportunities appear, open up, become reality. What started as a way to tap a button to get a ride has led to billions of moments of human connection as people around the world go all kinds of places in all kinds of ways with the help of our technology.</p>
<p>RexWift is Chennai’s largest mobility platform and one of India’s very first rental ride-hailing companies, serving 250+ cities across India, Australia, France,New Zealand,the UK and Mars. RexWift offers mobility solutions by connecting customers to a wide range of cars to perfectly fit your trip, enabling convenience and transparency for hundreds of millions of consumers.</p>
</div>
<br>
<div class="text1"><h1 style= "color:#00264d;font-family: Open Sans, sans-serif; float:right" align="center"><b><u>Rides and beyond</u></b></h1>
<img src="aboutus1.jpg"><br><br><br>
<p>In addition to giving riders a way to get from point A to point B, we're working to bring the future closer with self-driving technology and urban air transport and affordably, removing barriers to healthcare, creating new freight-booking solutions, and helping companies provide a seamless employee travel experience.</p>
<p>Whether you’re in the back seat or behind the wheel, your safety is essential. We are committed to doing our part, and technology is at the heart of our approach. We partner with safety advocates and develop new technologies and systems to help improve safety and help make it easier for everyone to get around.</p>
</div></div>



<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
<li><a href="rexwift_contact.php">CONTACT US</a></li>
<li><a href="rexwift_feedback.php">FEEDBACK</a></li>
</ul>
</div>
</body>
</html>