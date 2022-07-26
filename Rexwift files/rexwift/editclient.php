<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-change password</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>
<body style="background-image:url(https://www.hdnicewallpapers.com/Walls/Big/Jaguar/2018_Jaguar_Car_on_Road_HD_Wallpaper.jpg); background-size: cover;">

<a href="rexwift_home.php">BACK</a>

<div class="logsign">
			
	<form method="post">
	<h2 align="center" style="font-family:Impact, Charcoal, sans-serif; color:#00264d">Change Password</h2><br>
				<table>
				    <tr>
						<td>Email Address:</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Old Password: </td>
						<td><input type="password" name="pass" placeholder="Old Password" required></td>
					</tr>
					<tr>
						<td>&nbsp </td>
						<td></td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input type="password" name="npass" placeholder="New Password" required></td>
					</tr>
					<tr>
						<td> Confirm Password:</td>
						<td><input type="password" name="npass1" placeholder="Re-enter Password" required></td>
					</tr>
				</table> <br>
							<center><input type="submit" name="update" value="Change Password" id="submit"><center>
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
$npass=$_POST['npass'];
$sql="SELECT * FROM rclient WHERE email='$email' and pass='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
if ($_POST["npass"] === $_POST["npass1"]) {
if($count==1)
{
$mysql="UPDATE rclient SET pass='$npass' WHERE email='$email'";
$result2=mysql_query($mysql);
echo "<font color=red>Updated Successfully!</font>";
}
else
{
echo "<font color=red>Wrong password or Username</font>";
}
}
else{
								echo"<label><font color=red>Passwords do not match</font><label>";
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