<?php
error_reporting(0);
	$con= mysqli_connect("localhost","root","","gotham_library") or die("Error: ". mysqli_error($con));
		$query = "SELECT * FROM reader WHERE PhoneNumber='$phone'";
	
?>
