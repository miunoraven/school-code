<?php
    class Database {
        private $dbServername = "localhost";
        private $dbUsername = "root";
        private $dbPassword = "root";
        private $dbName = "airplan"; 
        private $conn;
        // private $conn;

        // public $arrayUsers;

        function __construct() {
            $this->conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);  
        }

        private function query_executed($sql)  
        {  
            $result = mysqli_query($this->conn, $sql);
            var_dump($result);
            die();
            return $result;  
        }

        public function get_rows($tablename)  
        {  
            $sql = "SELECT * FROM $tablename;";  
            $result = $this->query_executed($sql);  
            var_dump($result);
            $rows = $result->fetch_all(MYSQLI_ASSOC);  
            return $rows;  
        } 

        public function get_fetch_data($r)  
        {  
            $array = array();  
            while ($rows = $r->fetch_all(MYSQLI_ASSOC))  
            {  
                $array[] = $rows;  
            }  
            return $array;  
        } 


        public function getAllData(){    
            $airports = [];
            $sql = "SELECT * FROM airports;";
            $result = mysqli_query($this->conn, $sql);
            echo var_dump($result);
                
            // foreach ($result->fetch_all(MYSQLI_ASSOC) as $airport) {
            //     $input = array(
            //         "name" => $airport["name"],
            //         "country" => $airport["country"],
            //         "iata" => $airport["iata"],
            //         "icao" => $airport["icao"]
            //     );
            //     array_push($airports, $input);
            // }
            // return $airports;
        
        }

    }

    class Airports extends Database {
        public function getAirports() ç
            //extensie schrijven van klasse zelf

    }
    $database = new Airports();
    $array = $database->get_rows("airports");
    echo $array;
    // 

    

    
    // function addData(){
    //     //connecting to database
    //     $dbServername = "localhost";
    //     $dbUsername = "root";
    //     $dbPassword = "root";
    //     $dbName = "harrypotter";
    
    //     $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
    
    //     if ($conn->connect_error) {
    //         die("Connection failed: " . $conn->connect_error);
    //     }
    
    //     //gets all values from form input
    //     $fname = $_POST["firstname"];
    //     $lname = $_POST["lastname"];
    //     $age =  $_POST["age"];
    //     $gender = $_POST["gender"];
    //     $description = $_POST["description"];
    //     $sql = "INSERT INTO wizard VALUES (\"{$fname}\", \"{$lname}\", {$age}, \"{$gender}\", \"{$description}\", 0, 0, 0, 0);";
    
    //     //display completionpage if succeeded
    //     if ($conn->query($sql) === TRUE) {
    //         echo "yey";

    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
    //     $conn->close();
    // } 

            
    //     $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        
    //     if ($conn == false) {
    //         echo "Connection failed";
    //     } 

    //     $sql = "SELECT * FROM airports;";
    //     $result = mysqli_query($conn, $sql);

            
    //     foreach ($result->fetch_all(MYSQLI_ASSOC) as $airport) {
    //         echo $airport["name"];
    //         echo $airport["country"];
    //     } 

        
            
    //     $conn->close();

