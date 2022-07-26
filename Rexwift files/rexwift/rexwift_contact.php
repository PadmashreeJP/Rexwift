<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-contact us</title>
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
</div><br><br><br><br><br><br><br><br>

<div class="co">
<center><table border="1"  background="Contact.jpg">
<tr><td colspan="3" ><center>Get in touch!</center></td></tr>
<tr>
<td>Phone</td><td><img src="phone.png"></td> <td>+91 01234 56789</td>
</tr>
<tr>
<td>Email</td> <td><img src="mail.jpg"></td> <td>rexwift@gmail.com</td>
</tr>
<tr>
<td>Facebook</td> <td><img src="facebook.png"></td> <td>https://www.facebook.com/rexwift</td>
</tr>
<tr>
<td>Instagram</td> <td><img src="insta.jpg"></td> <td>https://instagram.com/rexwift</td>
</tr>
<tr>
<td>Twitter</td> <td><img src="twitter.png"></td> <td>https://twitter.com/rexwift</td>
</tr>
<tr>
<td>LinkedIn</td> <td><img src="linkedin.png"></td> <td>https://www.linkedin.com/rexwift</td>
</tr>
</table></center><br><br>
</div>
<style>
.co {	
  font-family: Open Sans, sans-serif;
  width: 100%;
  height: 500px;
  text-align: center;
  font-size: 20px;
}
.co td {
	border-collapse: collapse;
  border: 1px solid #822D97;
  padding: 3px 2px;
}

.co tr:hover{
	background-color: #00264d ;
	color:white ;
}
</style>
<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
<li><a href="rexwift_contact.php">CONTACT US</a></li>
<li><a href="rexwift_feedback.php">FEEDBACK</a></li>
</ul>
</div>
</body>
</html>