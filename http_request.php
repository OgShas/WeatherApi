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


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="src/style.css">

    <title>Weather</title>
</head>
<body>

<?php

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

</body>
</html>
