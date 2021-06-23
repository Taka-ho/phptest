<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>天気サービス</title>
</head>
<body>

</body>
</html>


<?php

$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://weatherbit-v1-mashape.p.rapidapi.com/forecast/3hourly?lat=33.590188&lon=130.420685",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: weatherbit-v1-mashape.p.rapidapi.com",
		"x-rapidapi-key: db004da657mshb99490456ef13fap1d4076jsne070866ba767"
	],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>