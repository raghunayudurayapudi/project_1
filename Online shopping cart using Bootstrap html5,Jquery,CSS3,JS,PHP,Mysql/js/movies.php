<?php
$q = $_REQUEST["w"];

$obj = json_decode($_GET["w"], false);?//jason file get decode into an object in the PHP
//ECHO $obj->table1;
$conn = mysqli_connect("localhost","root","","games&movies");

// Check connection

if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}
//echo "Connected successfully";
$sql= "select m.movie_id,p_name,actor,actress,director,duration,Year_released,awards,rating,rent_price,buy_price from $table1 p,$table2 m,$table3 a1,$table4 a2 where p.p_id=m.movie_id and m.movie_id=a1.movie_id and m.movie_id=a2.movie_id ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	echo "query exceuted succesfully";
	 /*echo "<table class='table table-responsive table-hover' style='font-size:20px;color:#337ab7;font-family: cursive;'><tr><th>P_ID</th><th>P_Name</th><th>Year released</th><th>Awards</th><th>Rating</th><th>Rent_price</th><th>Buy_price</th><th>Buy</th><th>Rent</th></tr>";
	 while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>".$row["P_id"]."</td><td>".$row["p_name"]."</td><td>".$row["Year_released"]."</td><td>".$row["awards"]."</td><td>".$row["rating"]."</td><td>$".$row["rent_price"]."</td><td>$"
		.$row["buy_price"]."</td>"."<td><a href='#' class='btn btn-primary'>Buy</a></td>"."<td><a href='#' class='btn btn-primary'>Rent</a></td>"."</tr>";
	*/
	 }
echo "</table>";
}

else
{
	    echo "0 results";

}

mysqli_close($conn);

?>