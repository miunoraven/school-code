<?php

$request = new HttpRequest();
$request->setUrl('https://aerodatabox.p.rapidapi.com/flights/airports/icao/EBBR/2021-10-04T20:00/2021-10-05T08:00');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'withLeg' => 'true',
	'withCancelled' => 'true',
	'withCodeshared' => 'true',
	'withCargo' => 'true',
	'withPrivate' => 'true',
	'withLocation' => 'false'
]);

$request->setHeaders([
	'x-rapidapi-host' => 'aerodatabox.p.rapidapi.com',
	'x-rapidapi-key' => '27dfaea46cmsh079a1a851443691p1bb619jsn2e2776ada877'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}

?>