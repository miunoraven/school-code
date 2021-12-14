<?php
    include "database/api.php";
    $api = new API();
    $array = $api->$getJSon("2021-10-31T06:00","2021-10-31T18:00");
    // echo "aaaaaaaaaaaaaaaaaaaaaaa";
    // var_dump($array);
