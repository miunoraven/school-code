<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://aerodatabox.p.rapidapi.com/flights/airports/icao/EHAM/2021-10-04T20:00/2021-10-05T08:00?withLeg=true&withCancelled=true&withCodeshared=true&withCargo=true&withPrivate=true&withLocation=false",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: aerodatabox.p.rapidapi.com",
		"x-rapidapi-key: 27dfaea46cmsh079a1a851443691p1bb619jsn2e2776ada877"
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