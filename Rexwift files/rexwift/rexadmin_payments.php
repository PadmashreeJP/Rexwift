<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-payment details</title>
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
$sel = "SELECT * FROM radmin  WHERE email = '$email' AND pass = '$pass'";
$rs = $conn->query($sel);
if($_SESSION['email'] && ($_SESSION['pass'])){
?>
<ul>
<li><a href="rexwift_logout.php">LOG OUT</a></li>
<li><a href="rexadmin_payments.php">Payments</a></li>
<li><a href="rexadmin_book.php">Bookings</a></li>
<li><a href="rexadmin_client.php">Clients</a></li>
<li><a href="">Feedback</a></li>
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

<a href="rexwift_administrator.php">HOME</a>

<div>
<h1 align="center">Payment Details</h1>
<hr />
<table width='100%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Card number</td>
<td>Cardholder's name</td>
<td>Expiry</td>
<td>CVV number</td>
<td>Delete</td>
</tr>
<?php
$databaseHost = 'localhost';
$databaseName = 'rexdb';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
$result=mysqli_query($mysqli, "SELECT * FROM pay ORDER BY no DESC");
while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['no']."</td>";
echo "<td>".$res['name']."</td>";
echo "<td>".$res['expiry']."</td>";
echo "<td>".$res['cvv']."</td>";
echo "<td> <a href='deletepay.php?no=$res[no]'>Delete</a></td>";
echo "</tr>";
}
?>
</table>
</div>

<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
</ul>
</div>
</body>
</html>