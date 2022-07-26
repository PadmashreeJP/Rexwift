<?php
	session_start();
	session_destroy();
	header("location: rexwift_home.php");
?>