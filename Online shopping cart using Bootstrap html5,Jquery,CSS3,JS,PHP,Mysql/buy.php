<?php
$con= mysqli_connect("localhost","root","","games&movies") or die("Error: ". mysqli_error($con));
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
	 session_start();
					ECHO "HELLO WORLD";
                    $custid=$_SESSION['custid'];
                    $p_id = $_GET['p_id'];
					$price=$_GET['price'];
					$resdt=date("Y-m-d H:i:s", strtotime("-7 hour"));
					ECHO $resdt;
					$type='Buy';
					$quant=1;
					$store='store1';
					ECHO $custid;
					  $query = "INSERT INTO orders
			(p_id,custid,price,quant,purchase_time,order_type,store_id)
			VALUES ('{$p_id}','{$custid}','{$price}','{$quant}','{$resdt}','{$type}','{$store}')";
			
			$result = mysqli_query($con, $query);
			if(	$result)
			{
				$m ="<span style='color:blue;'>You have Succefully bought Product:$p_id at $resdt </span><br>";
				header('location:userhome.php?m='.$m);	
			}
			ELSE
			{
    echo "Error: " . $query . "<br>" . mysqli_error($con);
			}
?>