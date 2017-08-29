
<?php

/*$conn=mysqli_connect('localhost','root','root','shop') or die('could not connect');
echo $_POST['search'];

$output = '';
if (isset($_POST['search'])) {
	$searchq = $_POST['search'];
	echo "hello world";
	$searchq = preg_replace('#[^0-9a-z]#i','',$searchq);
	$query = mysqli_query($conn,"select * from products where Title like '$searchq'") or die('couldnot search !!');
	$count = mysqli_num_rows($query);
	if($count == 0) {
		$output = 'there was no searh results';
	}
	else{
		echo "hi welcome";
		while ($row = mysqli_fetch_array(($query)))
		{
			$moive_or_Game_name = $row['Title'];
			$id_search = $row['Product_id'];
			
			$output .='<div>'.$moive_or_Game_name.''.$id_search.'</div>';
	
		}
	}

}

 
print($output);*/
$q = $_REQUEST["w"];

$obj = json_decode($_GET["w"], false);
//ECHO $obj->table1;
$conn = mysqli_connect("localhost","root","","games&movies");

// Check connection

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
//echo "Connected successfully";
$sql="select * from  `products` where (`p_name`='".$obj->table1."') ";
$result = mysqli_query($conn,$sql);
$alert='please Login to Buy or Rent a product';
if (mysqli_num_rows($result) > 0) {
	//echo "query exceuted succesfully";
	 echo "<table class='table table-responsive table-hover' style='font-size:20px;color:#337ab7;font-family: cursive;'><tr><th>P_ID</th><th>P_Name</th><th>Year released</th><th>Awards</th><th>Rating</th><th>Rent_price</th><th>Buy_price</th><th>Buy</th><th>Rent</th></tr>";
	 while($row = mysqli_fetch_assoc($result)) {
		 $x=$row['p_name'];
echo "<tr><td>".$row["P_id"]."</td><td>".$row["p_name"]."</td><td>".$row["Year_released"]."</td><td>".$row["awards"]."</td><td>".$row["rating"]."</td><td>$".$row["rent_price"]."</td><td>$"
		.$row["buy_price"]."</td>"."<td><a href='buy.php?p_id={$row['P_id']} & price={$row["buy_price"]}' class='btn btn-primary'>Buy</a></td>"."<td><a href='rent.php?p_id={$row['P_id']} & price={$row["buy_price"]}'class='btn btn-primary'>Rent</a></td>"."</tr>";
	
	 }
echo "</table>";
}


else
{
	    echo "0 results";

}

mysqli_close($conn);

?>