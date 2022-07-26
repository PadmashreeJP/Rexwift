<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-client details</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>
<body style="background-image:url(https://www.hdnicewallpapers.com/Walls/Big/Jaguar/2018_Jaguar_Car_on_Road_HD_Wallpaper.jpg); background-size: cover;">

<a href="rexwift_home.php">BACK</a>

<div class="logsign">
            <form method="post">
	        <table>
				    <tr>
						<td>Email Address:</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="pass" placeholder="Password" required></td>
					</tr>
					<tr>
						<td>&nbsp </td>
						<td></td>
					</tr>
				</table>
    <h3 align="center" style="font-family:Impact, Charcoal, sans-serif; color:#00264d; font-size=20px">ARE YOU SURE YOU WANT TO DELETE YOUR ACCOUNT?</h3><br><br>
	<center><input type="submit" name="submit" value="Yes" id="submit"><center><br>
	<center><a href='rexwift_home.php'>No</a><center>
</form>				
<?php
session_start();
$host="localhost";  
$username="root";  
$password="";  
$db_name="rexdb"; 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username,password and newpassword sent from form  
$email=$_POST['email']; 
$pass=$_POST['pass']; 
$sql="SELECT * FROM rclient WHERE email='$email'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

if($count==1){
$mysql="DELETE FROM rclient WHERE email = '$email' and pass= '$pass'";
$result2=mysql_query($mysql);
echo "<font color=red>Account deleted</font><br>";
echo "<a href='rexwift_logout.php'>Go to main page</a>";
}
else
{
echo "<font color=red>Account not deleted</font>";
}

?>
					

</div>
			
<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
</ul>
</div>
</body>
</html>