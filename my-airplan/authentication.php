<?php
    include "database/databases.php";
    // check with database
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $isAuth = FALSE;
    $database = new Database();
    $array = $database->getData("accounts");
    for($i = 0; $i < sizeof($array)-1; $i++){
        if($array[$i]["email"] == $email && $array[$i]["password"] == $pass) $isAuth = TRUE;
    }
    if($isAuth) header("Location: http://localhost/testing.php");
    else echo $array[$i]["email"]. " vs ". $email . " & " . $array[$i]["password"] . " vs " . $pass . " and auth is ". $isAuth;