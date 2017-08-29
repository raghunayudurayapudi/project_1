<?php
//code to store reader details in reader table
	error_reporting(0);
	$con= mysqli_connect("localhost","root","","games&movies") or die("Error: ". mysqli_error($con));
	if(isset($_POST['submit'])){
		$user_id = $_POST['user_id'];
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$sex = $_POST['sex'];
		$B_date = $_POST['B_date'];
		$street_name = $_POST['street_name'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$zipcode = $_POST['zipcode'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$billing = $_POST['billing'];
		
		$query = "SELECT * FROM person WHERE Phone='$phone'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);
		if ($num != 0)
			{
			$m ="<span style='color:red;'>Entered Phone Number Already Exists</span>";
			header('location:readerDetails.php?m='.$m);
			}
			else{	
		$query = "SELECT * FROM person WHERE user_Id='$user_id'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);
		
		if ($num != 0)
			{
			$m0 ="<span style='color:red;'>Entered user Id Already Exists</span>";
			header('location:readerDetails.php?m0='.$m0);
			}
		else{
			
			$query = "INSERT INTO person
			VALUES
			('{$user_id}','{$f_name}','{$l_name}','{$sex}','{$B_date}','{$street_name}','{$city}','{$state}','{$country}','{$zipcode}','{$phone}','{$email}')";
			$pass='1234';
			if(mysqli_query($con,$query)){
				$m1 ="<span style='color:blue;'>Customer details entered successfully</span><br>";

				$query1="INSERT INTO customer VALUES ('{$user_id}','{$billing}',{$pass})";
				if(mysqli_query($con, $query1)){
					$m1.="<span style='color:blue;'>Customer table  details  is alsoentered successfully</span>";
				}
				
				mysqli_query($con, $query2);
				
				header('location:customer_Details.php?m1='.$m1);	
				
			}else{
				echo "error while inserting the records".mysqli_error($con);
			}
		
			}
		
	}
	}
	?>