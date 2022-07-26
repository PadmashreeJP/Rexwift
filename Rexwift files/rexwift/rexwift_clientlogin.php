<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-customer log in</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<body style="background-image:url(https://www.hdnicewallpapers.com/Walls/Big/Jaguar/2018_Jaguar_Car_on_Road_HD_Wallpaper.jpg); background-size: cover;">
<?php
include 'config.php';
?>
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
			<h2 align="center" style="font-family:Impact, Charcoal, sans-serif; color:#00264d">LOGIN</h2><br>
				<table>
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>&nbsp </td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
				</table>
						<center><input type="submit" name="login" value="Login" style="font-size:20px;"></center>
						<center><p style="font-size:20px">Don't have an account?</p></center>
			<center><button><a style="text-decoration:none; color: #00264d"href="rexwift_signup.php">Signup</a></button></center>
	
			</form>
			<center><button><a style="text-decoration:none; color: #00264d"href="rexwift_login.php">BACK</a></button></center>
			<?php
				if(isset($_POST['login'])){
					include 'config.php';
					
					$email = $_POST['email'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM rclient WHERE email = '$email' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $rows['email'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"rexwift_home.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"rexwift_login.php\")
									</script>";
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