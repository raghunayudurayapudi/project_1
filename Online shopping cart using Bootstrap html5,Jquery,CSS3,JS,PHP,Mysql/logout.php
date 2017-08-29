<?php
//code for admin logout
session_start();
if (!isset($_SESSION['email']))
	header('location: example.php');
	session_destroy();
	header('location: example.php');
?>