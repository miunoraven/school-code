<?php
    include "database/api.php";
    $api = new API();
    $api->getJSon("2021-10-31T06:00","2021-10-31T18:00");
    // var_dump($api->$response);