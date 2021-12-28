<?php
    include "database/databases.php";

    $id = $_GET["id"];
    $database = new Database();

    $flights = $database->getFlights($id);

    function calcTime($departure, $time){
        list($hour, $minutes) = explode(":", $departure);
        if($minutes < $time){
            $minutes += (60-$time);
            $hour -= 1;
        }
        else if($minutes == $time) $minutes = "00";
        else if($minutes == $time+5) $minutes = "05";
        else $minutes -= $time;
        if(sizeof($hour)==1) echo "0" . $hour . ":" . $minutes;
        else echo $hour . ":" . $minutes;

    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/main.css" type="text/css">
        <title>My Flights</title>
    </head>
    <body>
        <div class="background">
            <div class="container">
                <?php include "components/navigation.php"; ?>
                <div class="content">
                <h1>My flights</h1>
                <?php
                    for($i=0;$i<sizeof($flights);$i++){
                        $flight = $flights[$i];
        
                        $output = $flight["time_dep"];
                        list($date, $time) = explode(" ", $output);
                        list($dep, $delay) = explode("+", $time);
        
                        $airport = $database->getAirport($flight["airport_dep"]);                
        
                        ?>
                        <div class="ticket">
                                <h2 id="boardingpass">Boarding Pass</h2>
                                <div id="route">
                                    <p class="rout_text" id="dest"><span style="font-size: 10pt;">From </span><br><?php echo $airport[0]["name"]; ?></p>
                                    <p class="rout_text" id="arr"><span style="font-size: 10pt;">To </span> <br><?php echo $flight["airport_arr"]; ?></p>
                                    <p class="rout_text" id="time"><span style="font-size: 10pt;">Departure on </span><br><?php echo $dep; ?></p>
                                </div>
                                <div id="info">
                                    <p class="result" id="gate">Gate <br><?php echo $flight["gate"]; ?></p>
                                    <p class="result" id="checkin">Check-in <br><?php echo $flight["check_in"]; ?></p>
                                    <p class="result" id="status">Status<br><?php echo $flight["status"]; ?></p>
                                    <p class="result" id="airline">Airline<br><?php echo $flight["airline"]; ?></p>
                                </div>
                            </div>
                            <button type="button" class="collapsible">Open Collapsible</button>
                            <div class="collapse_div">
                                <div class="home">
                                    <h3>At Home</h3>
                                    <div class="corona">
                                        <h4>Corona measures</h4>
                                        <p class="corona_info">Make sure that you check which <span style="font-weight:bold">COVID-19</span> safety rules are applied to the country that you are traveling to. Make sure you have prepared all needed documents on time (Personal Health Fiche, vaccination certificate, PCR test results...). <br>
                                        In case you want to register for a <span style="font-weight:bold">PCR test on the aiport</span> <a href="https://brusselsairport.ecocare.center/">register here</a>.
                                    </p>
                                    </div>
                                </div>
                                <div class="transprot">
                                    <h3>Transport</h3>
                                    <div class="parking">
                                        <a href="parking.php" class="home_a">Parkings</a>
                                    </div>
                                    <div class="transport">
                                        <a href="transport.php" class="home_a">Public transport</a>
                                    </div>
                                </div>
                                <div class="checkin">
                                    <h3>Check in / Drop off</h3>
                                    <a href="map.php?id=<?php echo $id; ?>"><img src="assets/images/pin_map.png" alt="pin" id="pin" height="50px"></a>
                                    <p>Check in <br><?php echo $flight["check_in"]; ?></p>
                                    <p>Open <br> <?php
                                        list($hour, $minutes) = explode(":", $dep);
                                        $hour -= 3;
                                        if(sizeof($hour)==1) echo "0" . $hour . ":" . $minutes;
                                        else echo $hour . ":" . $minutes; ?>
                                    </p>
                                    <p>Close <br>
                                    <?php 
                                        calcTime($dep, 40);
                                    ?> </p>
                                </div>
                                <div class="security">
                                    <h3>Security</h3>
                                    <img src="assets/images/security.jpeg" alt="security" class="security_img" height="300px">
                                </div>
                                <div class="freetime">
                                    <h3>Free time</h3>
                                    <img src="assets/images/dutyfree_a.jpg" alt="dutyfree_a" class="dutyfree_a" height="200px">
                                    <a href="map.php?id=<?php echo $id; ?>"><img src="assets/images/pin_map.png" alt="pin" id="pin" height="50px"></a>
                                </div>
                                <div class="gate">
                                    <h3>Boarding</h3>
                                    <p>Gate<br><?php echo $flight["gate"]; ?></p>
                                    <p>Start boarding<br><?php
                                        calcTime($dep, 30);                                                                                                      
                                    ?></p>
                                    <p>Closing boarding<br><?php
                                        calcTime($dep, 10);                                                                                                      
                                    ?></p>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
                <?php include "components/footer.php";?>
            </div>
        </div>
        <script src="assets/js/collapse.js"></script>
    </body>
</html>

