<?php
    class Database {
        private $dbServername = "localhost";
        private $dbUsername = "root";
        private $dbPassword = "root";
        private $dbName = "airplan"; 
        private $conn;

        // public $arrayUsers;

        function __construct() {
            $this->conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);  
        }

        private function executeQuery($sql)  
        {  
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }

        public function getOrderedAirports(){ //get an array of all the airports ordered on name (for the select on the search pages)
            $sql = "SELECT * FROM `airports` ORDER BY `airports`.`name` ASC";
            $result = $this->executeQuery($sql); 
            $array = $result->fetch_all(MYSQLI_ASSOC);  
            return $array;
        }

        public function getData($tablename)  //get all data from the input table
        {  
            $sql = "SELECT * FROM $tablename;";  
            $result = $this->executeQuery($sql); 
            $array = $result->fetch_all(MYSQLI_ASSOC);  
            return $array;
        } 

        public function addAccount($fname, $lname, $email, $password){ //add user to the accounts
            $sql = "INSERT INTO accounts (`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,\"$fname\", \"$lname\", \"$email\", PASSWORD(\"$password\"));";
            if ($this->conn->query($sql) === TRUE) {
                echo "Added";
            }
            else echo "Could not connect to database";
        }

        public addFlight()
    }

            // public function getAllData(){    
        //     $airports = [];
        //     $sql = "SELECT * FROM airports;";
        //     $result = mysqli_query($this->conn, $sql);
        //     //var_dump($result);
                
        //     // foreach ($result->fetch_all(MYSQLI_ASSOC) as $airport) {
        //     //     $input = array(
        //     //         "name" => $airport["name"],
        //     //         "country" => $airport["country"],
        //     //         "iata" => $airport["iata"],
        //     //         "icao" => $airport["icao"]
        //     //     );
        //     //     array_push($airports, $input);
        //     // }
        //     // return $airports;
         
        // }

    // class Airports extends Database {
    //     public function getAirports() ç
    //         //extensie schrijven van klasse zelf

    // }
    // $database = new Database();
    // $array = $database->getData("airports");
    // 

    // $sql = "INSERT INTO wizard VALUES (\"$id\",\"$fname\", \"$lname\", $age, \"$gender\", \"$description\", 0, 0, 0, 0);";

    // $number_sql = "SELECT $house FROM wizard WHERE id = \"$id\";";
    // $result1 = mysqli_query($conn, $number_sql);
    // $number = mysqli_fetch_array($result1);
    // $new_result = $number[0]+1;
    // $sql = "UPDATE wizard SET $house = $new_result WHERE id = \"$id\";";
    // $result2 = mysqli_query($conn, $sql);
    // echo "done";
    
    // $conn->close();

    
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

