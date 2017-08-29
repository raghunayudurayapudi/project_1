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
$sql= "select g.game_id,p_name,g.plaform,g.Publisher,g.developer,Year_released,awards,rating,rent_price,buy_price,image_src from $obj->table1 p,$obj->table2 g where p.p_id=g.game_id";
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
        <img src=".$row["image_src"] ." alt=".$row["p_name"]." style=width: 100px; height:100px; object-fit: contain''>
        <div class='caption' style='padding:0px;'>
          <p style='background-color: #b9bfc1;color: white;font-family: cursive;padding:0px;'>
			". "Game Name: ".$row["p_name"]."<br>".
				   "Platform: ".$row["plaform"]."<br>".
				    "Game Rating: ".$row["rating"]."<br>".
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
			 
		echo "<div class='col-sm-4'>
    <div class='thumbnail'>
      <a href='#'>
        <img src=".$row["image_src"] ." alt=".$row["p_name"]." style='max-width: 100%; max-height: 50%;'>
        <div class='caption' style='padding:0px;'>
          <p style='background-color: #b9bfc1;color: white;font-family: cursive;padding:0px;'>
			". "Game Name: ".$row["p_name"]."<br>".
				   "Platform: ".$row["plaform"]."<br>".
				    "Game Rating: ".$row["rating"]."<br>".
					"Buy_price: ".$row["buy_price"]."<br>"."rent_price:".$row["rent_price"]."<br>"
					."<a href='#' class='btn btn-primary'>Buy</a>"."<a href='#' class='btn btn-primary' style='margin-left:10px'>rent</a>".
		   "</p>
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