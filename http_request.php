<?php

$curentWeather='';
$city=$_GET['city'];
$base_url = 'http://api.weatherapi.com/v1';
$api_key = "99015e4011f34be488770428231005";


if($city){
    $curentWeather="$base_url/current.json?key=99015e4011f34be488770428231005&q=$city&aqi=no";
}


$ch=curl_init($curentWeather);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: '.$api_key
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

$data=json_decode($response,true);

curl_close($ch);


echo "Weather in ";
echo  $data['location']['region'];
echo "</br>" ;
echo  "date/time : ";
echo $data['current']["last_updated"];
echo "</br>" ;
echo "temp : ";
echo $data['current']['temp_c'];
echo " C";

?>