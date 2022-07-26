<?php
$databaseHost = 'localhost';
$databaseName = 'rexdb';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
if(isset($_POST['Update']))
{
$aid = $_POST['aid'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$result = mysqli_query($mysqli, "UPDATE radmin SET email='$email',pass='$pass' WHERE admin_id=$aid");
header("Location: rexwift_administrator.php");
}
?>

<?php
echo "<h1 align='center'>Edit Admin Details</h1>";
echo "<hr />";
$aid = $_GET['admin_id'];
//selecting data associated with this particular eid
$result = mysqli_query($mysqli, "SELECT * FROM radmin WHERE admin_id = $aid");
while($res = mysqli_fetch_array($result))
{
$aid = $res['admin_id'];
$email = $res['email'];
$pass = $res['pass'];
}
?>
<html>
<head>
<title>Edit Admin Details</title>
</head>
<body>
<a href="rexwift_administrator.php">Home</a>
<br/><br/>
<form name="empform" method="post" action="editadmin.php">
<table border="0">
<tr>
<td>Email : </td>
<td><input type="email" name="email" value="<?php echo $email;?>"></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="password" name="pass" value="<?php echo $pass;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="aid" value="<?php echo $_GET['admin_id'];?>"</td>
<td><input type="submit" name="Update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>