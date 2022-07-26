<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-signup</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<body style="background-image:url(https://www.hdnicewallpapers.com/Walls/Big/Jaguar/2018_Jaguar_Car_on_Road_HD_Wallpaper.jpg); background-size: cover;">

<div class="Navibar"> 
<img src="Rexlogo.jpg"> 

<ul>
<li><a href="rexwift_login.php">LOGIN</a></li>
<li><a href="rexwift_signup.php">SIGN UP</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>

</div><br><br><br><br>

<div class="logsign">
			
	<form method="post">
		<h2 align="center" style="font-family:Impact, Charcoal, sans-serif; color:#00264d">SIGN UP</h2><br>
				<table>
				    <tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Email ID" required></td>
					</tr>
					<tr>
						<td>&nbsp </td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Password" required></td>
					</tr>
					<tr>
						<td>&nbsp </td>
						<td></td>
					</tr>
					<tr>
						<td> Confirm Password:</td>
						<td><input type="password" name="pass1" placeholder="Re-enter Password" required></td>
					</tr>
				</table> <br>
							<center><input type="submit" name="signup" value="Create My Account" id="submit"><center>
	</form>
<?php
						if(isset($_POST['signup'])){
							include 'config.php';
							$email = $_POST['email'];
							$pass  = $_POST['pass'];
							$pass1 = $_POST['pass1'];
							if ($_POST["pass"] === $_POST["pass1"]) {
							$qry = "INSERT INTO rclient (email,pass)
							VALUES('$email','$pass')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"rexwift_clientlogin.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						    }
							else{
								echo"<label><font color=red>Passwords do not match</font><label>";
							}
						
						}
						
?>				

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