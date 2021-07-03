<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>天気サービス</title>
</head>
<body>

<table border>
  <tr>
    <th>天気</th>
    <th>気温</th>
  </tr>
  <tr>
    <th>
    </th>
	<img src="https://openweathermap.org/img/wn/10n@2x.png">

  </tr>
</table>
</body>
</html>


<?php

$weatherTranslate = array(
    'Clear' => '晴れ',
    'Clouds' => 'くもり',
    'Rain' => '雨',
    'Drizzle' => '霧雨',
    'Thunderstorm' => '雷雨',
    'Snow' => '雪'
);

	$weather_config = array(
		'appid' => '',
		'lat' => '33.590188',
		'lon' => '130.420685',
	);
	$weather_json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat=' . $weather_config['lat'] . '&lon=' . $weather_config['lon'] . '&units=metric&lang=ja&APPID=' . $weather_config['appid']);
	$weather_array = json_decode($weather_json, true);


?>