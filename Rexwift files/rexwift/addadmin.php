<html>
<head>
<title>Add new Admin</title>
</head>
<body>

<h1 align="center">Add new Admin</h1>
<hr />
<a href="rexwift_administrator.php">Home</a>
<br /><br />
<form action="addadmin.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Admin Id. : </td>
<td><input type="text" name="aid" required></td>
</tr>
<tr>
<td>Email : </td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="password" name="pass" required></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="Submit" value="Add"></td>
</tr>
</table>
</form>

<?php
//including the database connection file
$databaseHost = 'localhost';
$databaseName = 'rexdb';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
if(isset($_POST['Submit'])) {
$aid = $_POST['aid'];
$email = $_POST['email'];
$pass = $_POST['pass'];
//insert data to database
$result = mysqli_query($mysqli, "INSERT INTO radmin (admin_id,email,pass) VALUES ('$aid','$email','$pass')");
//display success message
echo "<h1 align='center'>Add new Admin</h1>";
echo "<hr />";
echo "<font color='green'>Data added successfully.";
echo "<br/><a href='rexwift_administrator.php'>View Result</a>";
}
?>
</body>
</html>
