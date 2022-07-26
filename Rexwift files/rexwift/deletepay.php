<?php
$databaseHost = 'localhost';
$databaseName = 'rexdb';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
$cno = $_GET['no'];
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM pay WHERE no=$cno");
header("Location:rexadmin_payments.php");
?>