<?php
$obj = json_decode($_GET["w"], false);
ECHO $obj->table1;
session_start();
$conn = mysqli_connect("localhost","root","","games&movies");
   $custid=$_SESSION['custid'];
// Check connection

if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}
//echo "Connected successfully";
$sql= "SELECT * FROM $obj->table1 p WHERE p.custid ='".$custid. "'";
$result = mysqli_query($conn,$sql);
$alert='please Login to Buy or Rent a product';
if (mysqli_num_rows($result) > 0) {
	//echo "query exceuted succesfully";
	 echo "<table class='table table-responsive table-hover' style='font-size:20px;color:#337ab7;font-family: cursive;'><tr><th>order_id</th><th>p_id</th><th>custid</th><th>price</th><th>quant</th><th>purchase_time</th><th>order_type</th><th>storeid</th></tr>";
	 while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>".$row["order_id"]."</td><td>".$row["p_id"]."</td><td>".$row["custid"]."</td><td>".$row["price"]."</td><td>".$row["quant"]."</td><td>".$row["purchase_time"]."</td><td>".$row["order_type"]."</td><td>".$row["store_id"]."</td></tr>";
	
	 }
echo "</table>";
}

else
{
	    echo "0 results";

}

mysqli_close($conn);

?>