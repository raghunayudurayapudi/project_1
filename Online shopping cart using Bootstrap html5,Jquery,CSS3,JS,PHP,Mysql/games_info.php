<?php
$conn = new mysqli("localhost", "root", "", "games&movies");

$result = $conn->query("select p_Id,P_name,Year_released,rating,rent_price,buy_price,plaform,publisher,Developer from products p,games g where p.p_id=g.game_id");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"p_Id":"'  . $rs["p_Id"] . '",';
    $outp .= '"p_name":"'   . $rs["P_name"]        . '",';
	$outp .= '"plaform":"'   . $rs["plaform"]        . '",';
	$outp .= '"publisher":"'   . $rs["publisher"]        . '",';
	$outp .= '"developer":"'   . $rs["Developer"]        . '",';
	$outp .= '"rating":"'   . $rs["rating"]        . '",';
	$outp .= '"rent_price":"'   . $rs["rent_price"]        . '",';
	$outp .= '"buy_price":"'   . $rs["buy_price"]        . '",';
    $outp .= '"Year_released":"'. $rs["Year_released"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>