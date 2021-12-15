<?php
    include "database/api.php";
    $flightnumb = $_POST["flightnumb"];
    $api = new API();
    $json = $api->getJSon("2021-10-31T06:00","2021-10-31T18:00");
    $api->findFlight($flightnumb, $json);
    