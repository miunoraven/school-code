<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "airplan";

    	
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    if ($conn == false) {
        die("Connection failed"); 
    }

    $sql = "SELECT * FROM airports;";
    $result = mysqli_query($conn, $sql);

    	
    foreach ($airport as $result->fetch_all(MYSQLI_ASSOC)) {
        echo $airport["name"];
        echo $airport["country"];
    }
?>