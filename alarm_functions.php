<?php


$mysqli = new mysqli('localhost', 'root', '', 'commulis_');

$res=$mysqli->query("select * from ff_healthapp limit 1");
if($row=$res->fetch_object()){



$lastTimeGiven=$row->lastTimeGiven;
$dogName=$row->dogName;

$today = date("Y-m-d H:i:s");
$first_date = new DateTime($today);
$second_date = new DateTime($lastTimeGiven);


$difference = $first_date->diff($second_date);
var_dump(get_object_vars($row));
echo $difference->d." Days<br/>";
echo $difference->h." Hours<br/>";
echo $difference->i." Minutes";




} else {

echo "fail";
}
?>

