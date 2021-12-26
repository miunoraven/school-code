<?php
    include "../database/databases.php";
    // check with database
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $isAuth = FALSE;
    $database = new Database();
    $users = $database->getData("accounts");
    for($i = 0; $i < sizeof($users); $i++){
        if($users[$i]["email"] == $email && password_verify($pass, $users[$i]["password"])){
            $user_id = $users[$i]["id"];
            $isAuth = TRUE;
        }
    }
    if($isAuth) header("Location: http://localhost/flightnumb_search.php?id=".$user_id);
    else echo "Could not login";

    //<?php echo "get_next.php?id=".$id?>