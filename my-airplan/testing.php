<?php
    include "database/api.php";
    $api = new API("2021-10-31T06:00","2021-10-31T18:00");
    $array = $api->$response;
    echo "aaaaaaaaaaaaaaaaaaaaaaa";
    var_dump($array);