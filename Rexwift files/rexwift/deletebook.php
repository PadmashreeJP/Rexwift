<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-remove bookings</title>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
</head>

<a href="rexadmin_book.php">BACK</a>

<div>
            <form method="post">
	        <table>
				    <tr>
						<td>Mobile:</td>
						<td><input type="text" name="mobile"></td>
					</tr>
				</table>
    <h3 align="center" style="color:#00264d; font-size=20px">CONFIRM DELETE?</h3><br><br>
	<center><input type="submit" name="submit" value="Yes" id="submit"><center><br>
	<center><a href='rexadmin_book.php'>No</a><center>
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
$mobile=$_POST['mobile']; 
$sql="SELECT * FROM rbook WHERE mobile='$mobile'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

if($count==1){
$mysql="DELETE FROM rbook WHERE mobile = '$mobile'";
$result2=mysql_query($mysql);
echo "<font color=red>deleted</font><br>";
echo "<a href='rexadmin_book.php'>View result</a>";
}
else
{
echo "<font color=red>not deleted</font>";
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