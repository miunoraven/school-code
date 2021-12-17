<?php
//database is called in api
    include "database/api.php";
    $database = new Database();
	$airports = $database->getOrderedAirports();

    $date = $_POST["departure_date"];
    $flightnumb = $_POST["flightnumb"];
    $airport = $_POST["departure_airport"];

    $api = new API();
    $api->getJSon($date."T06:00",$date."T18:00", $airport);
    $destination = $api->findAirport($flightnumb);
    