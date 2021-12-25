<?php
    if(isset($_POST["submit"])){
        echo "AHAHAHAHAHHAHAHAHAH";
        $database = new Database();
        $database->addFlight($flight, $user_id, $airport, $flightnumb);
    }