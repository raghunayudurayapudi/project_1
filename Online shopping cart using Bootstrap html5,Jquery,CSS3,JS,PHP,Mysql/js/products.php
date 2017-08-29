<?php
$q = $_REQUEST["w"];
ECHO $q;
$obj = json_decode($_GET["w"], false);

$con = mysqli_connect("localhose", "root", "", "games&movies");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql= "SELECT * FROM ".$obj->table1." p"."LIMIT ".$obj->limit;
$result = mysqli_query($con,$sql);


?>