<?php
$databaseHost = 'localhost';
$databaseName = 'rexdb';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
$aid = $_GET['admin_id'];
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM radmin WHERE admin_id=$aid");
header("Location:rexwift_administrator.php");
?>