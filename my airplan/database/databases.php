<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "airplan";

    $sql = "SELECT * FROM airports;";
    $result = mysqli_query($conn, $sql);

    	
    foreach ($airport as $result->fetch_all(MYSQLI_ASSOC)) {
        echo $airport["name"];
        echo $airport["country"];
    }
?>