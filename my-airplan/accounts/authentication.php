<?php
    include "../database/databases.php";
    // check with database
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $isAuth = FALSE;
    $database = new Database();
    $users = $database->getData("accounts");
    var_dump($users);
    for($i = 0; $i < sizeof($users); $i++){
        if($users[$i]["email"] == $email && $users[$i]["password"] == $pass) $isAuth = TRUE;
    }
    if($isAuth) header("Location: http://localhost/flightnumb_search.php");
    else echo "Could not login";