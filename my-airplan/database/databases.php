<?php
    class Database {
        public $dbServername = "localhost";
        public $dbUsername = "root";
        public $dbPassword = "root";
        public $dbName = "airplan"; 

        function getQuery($sql) {

        }  
    }

    
        

            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        
        if ($conn == false) {
            echo "Connection failed";
        } 

        $sql = "SELECT * FROM airports;";
        $result = mysqli_query($conn, $sql);

            
        foreach ($result->fetch_all(MYSQLI_ASSOC) as $airport) {
            echo $airport["name"];
            echo $airport["country"];
        } 

        
            
        $conn->close();

