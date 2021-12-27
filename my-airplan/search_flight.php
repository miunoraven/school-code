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

    $output = $flight["dep_time"];
    list($date, $time) = explode(" ", $output);
    list($dep, $delay) = explode("+", $time);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/flightresult.css" type="text/css">
        <title>Result</title>
    </head>
    <body>
        <div class="background">
            <div class="container">
                <?php include "components/navigation.php"; ?>
                <div class="content">
                    <h1>Result for <?php echo $flightnumb; ?></h1>
                    <div class="ticket">
                        <h3 id="boardingpass">Boarding Pass</h3>
                        <div id="route">
                            <p class="rout_text" id="dest"><span style="font-size: 12pt;">From </span><br><?php echo $flight["dep_name"]; ?></p>
                            <p class="rout_text" id="arr"><span style="font-size: 12pt;">To </span> <br><?php echo $flight["arr_name"]; ?></p>
                            <p class="rout_text" id="time"><span style="font-size: 12pt;">Departure on </span><br><?php echo $dep; ?></p>
                        </div>
                        <div id="info">
                            <p class="result" id="gate">Gate <br><?php echo $flight["gate"]; ?></p>
                            <p class="result" id="checkin">Check-in <br><?php echo $flight["checkin"]; ?></p>
                            <p class="result" id="status"><?php echo $flight["status"]; ?></p>
                            <p class="result" id="airline"><?php echo $flight["airline"]; ?></p>
                        </div>
                    </div>
                    <?php
                        $data = new Database();
                        $data->addFlight($flight, $airport, $flightnumb);
                    ?>
                    <form action="components/add_flight.php?id=<?php echo $user_id?>" method="post">        
                        <input class="button" type="submit" value="Add flight to my flights">
                    </form>
                </div>
                <?php include "components/footer.php";?>
            </div>
        </div>
    </body>
</html>

    