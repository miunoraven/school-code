<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "root";
            $dbName = "airplan";

                
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

            ?>
            
         
</body>
</html>