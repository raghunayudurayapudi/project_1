<?php
$q = $_REQUEST["w"];

$obj = json_decode($_GET["w"], false);//jason file get decode into an object in the PHP
//ECHO $obj->table1;
$conn = mysqli_connect("localhost","root","","games&movies");

// Check connection
$iteams=0;
$movie="movie";
$movie_info="movie_info";
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}
//echo "Connected successfully";
$sql= "select m.movie_id,p_name,actor,actress,director,duration,Year_released,awards,rating,rent_price,buy_price,image_src from $obj->table1 p,$obj->table2 m,$obj->table3 a1,$obj->table4 a2 where p.p_id=m.movie_id and m.movie_id=a1.movie_id and m.movie_id=a2.movie_id ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	//echo "query exceuted succesfully";
	$i=0;
    echo "<div class='container-fluid'>";
	 while($row = mysqli_fetch_assoc($result)) {
		 if($i%3==0)
		 {  
			echo "<div class='row'>".
			"<div class='col-sm-4'>
    <div class='thumbnail'>
      <a href='#'>
        <img src=".$row["image_src"] ." alt=".$row["p_name"]." style='max-width: 100%; max-height: 50%;'>
        <div class='caption' style='padding:0px;'>
          <p style='background-color: #b9bfc1;color: white;font-family: cursive;padding:0px;'>
			". "Movie Name: ".$row["p_name"]."<br>".
				   "Movie actor: ".$row["actor"]."<br>".
				    "Movie actress: ".$row["actress"]."<br>".
					"Buy_price: ".$row["buy_price"]."<br>"."rent_price:".$row["rent_price"]."<br>"
					."<a href='#' class='btn btn-primary'>Buy</a>"."<a href='#' class='btn btn-primary' style='margin-left:10px'>rent</a>".
		   "</p>
        </div>
      </a>
    </div>
  </div>";
			$i++;
		 }
		 else
		 {
			 
		echo "<div class='col-md-4'>
    <div class='thumbnail'>
      <a href='#'>
        <img src=".$row["image_src"] ." alt=".$row["p_name"]." style='max-width:100%;max-height:50%'>
        <div class='caption' style='padding:0px;'>
          <p style='background-color:#b9bfc1;color: white;font-family: cursive;padding:0px;'>
			". "Movie Name: ".$row["p_name"]."<br>".
				   "Movie actor: ".$row["actor"]."<br>".
				    "Movie actress: ".$row["actress"]."<br>".
					"Buy Price: ".$row["buy_price"]."<br>"."rent_price:".$row["rent_price"]."<br>"."<a href='#' class='btn btn-primary'>Buy</a>"."<a href='#' class='btn btn-primary' style='margin-left:10px'>rent</a>"
		   ."</p>
        </div>
      </a>
    </div>
  </div>";
	 $i++;

    }
	if($i==3)
	{
		echo "</div>";
	}
  }
  echo "</div>";
}
else
{
	    echo "0 results";

}

mysqli_close($conn);

?>