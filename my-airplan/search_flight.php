<?php
//database is called in api
    include "database/api.php";

    $user_id = $_GET["id"];

    $date = $_POST["departure_date"];
    $flightnumb = $_POST["flightnumb"];
    $airport = $_POST["departure_airport"];

    $api = new API();
    $api->getJSon($date."T06:00",$date."T18:00", $airport);
    $flight = $api->findFlight($flightnumb, $airport);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>
    </head>
    <body>
        <h1>Result for <?php echo $flightnumb; ?></h1>
        <ul>
            <li>From <?php echo $flight["dep_name"]; ?></li>
            <li>To <?php echo $flight["arr_name"]; ?></li>
            <li>Departure on <?php echo $flight["dep_time"]; ?></li>
            <li>Gate <?php echo $flight["gate"]; ?></li>
            <li>Check-in <?php echo $flight["checkin"]; ?></li>
            <li><?php echo $flight["status"]; ?></li>
            <li><?php echo $flight["airline"]; ?></li>
        </ul>
        <?php
            $data = new Database();
            $data->addFlight($flight, $airport, $flightnumb);
        ?>
        <form action="components/add_flight.php?id=<?php echo $user_id?>" method="post">        
            <input type="submit" value="Add flight to my flights">
        </form>
    </body>
</html>

    