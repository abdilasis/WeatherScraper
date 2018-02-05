

<?php
error_reporting(0);
$city =$_GET["city"];
$city = str_replace(" ","",$city);




$contents = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
//$regex = '/  <p class="b-forecast__table-description-content"><span class="phrase">(.*?) <\/p>/s';
preg_match('/Weather Today(.*?)10 Day/s',$contents, $matches);
//print_r($matches);

echo $matches[1];



?>
