<?php
//php code for admin login

$email=$_POST['email'];
$password=$_POST['password'];

$conn = mysqli_connect("localhost","root","","games&movies");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ssn,password from employee where ssn=$email";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $ssn=$row['ssn'];
	   $pass=$row['password'];
    }
	echo $ssn;
	echo $pass;
}
 else {
    echo "0 results";
}

if($email==$ssn && $password==$pass)
{
	session_start();
	$_SESSION['ssn']=$ssn;
	header('location:adminhome.php');
}
else
{
	echo "wrong details";
	$m ="<span style='color:red;'>Incorrect Login Details</span>";
	header('location:example.php?m='.$m);
}

mysqli_close($conn);

?>