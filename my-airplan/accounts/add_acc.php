<?php
    include "../database/databases.php";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $conf_email = $_POST["conf_email"];
    $pass = $_POST["pass"];
    $conf_pass = $_POST["conf_pass"];
    
    if($email == $conf_email && $pass == $conf_pass){
        $database = new Database();
        $database->addAccount($firstname, $lastname, $email, $pass);
        $user = $database->getLastAdded("`accounts`","`id`");
        $user_id = $user["id"];
        header("Location: http://localhost/flightnumb_search.php?id=$user_id");
    }
    else echo "Could not make an new account";

    //hostname eruit halen (.n)
