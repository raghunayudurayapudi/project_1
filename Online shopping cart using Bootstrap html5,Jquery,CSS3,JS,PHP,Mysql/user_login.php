<?php
//php code for admin login

$user_id=$_POST['user_id'];
$password=$_POST['password'];

$conn = mysqli_connect("localhost","root","","games&movies");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT custid,password from customer where custid=$user_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $cust_id=$row['custid'];
	   $pass=$row['password'];
    }
	echo $cust_id;
	echo $pass;
}
 else {
    echo "0 results";
}

if($cust_id==$user_id && $password==$pass)
{
	session_start();
	$_SESSION['custid']=$cust_id;
	header('location:userhome.php');
}
else
{
	echo "wrong details";
	$m ="<span style='color:red;'>Incorrect Login Details</span>";
	header('location:example.php?m='.$m);
}

mysqli_close($conn);

?>