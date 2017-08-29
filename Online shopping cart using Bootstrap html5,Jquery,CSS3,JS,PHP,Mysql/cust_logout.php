<?php
//code for admin logout
session_start();
if (!isset($_SESSION['custid']))
	header('location: example.php');
	session_destroy();
	header('location: example.php');
?>