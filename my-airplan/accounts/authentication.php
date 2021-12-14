<?php
    include "../database/databases.php";
    // check with database
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $isAuth = FALSE;
    $database = new Database();
    $array = $database->getData("accounts");
    var_dump($array);
    for($i = 0; $i < sizeof($array); $i++){
        if($array[$i]["email"] == $email && $array[$i]["password"] == $pass) $isAuth = TRUE;
    }
    if($isAuth) header("Location: http://localhost/testing.php");
    else echo "Could not login";