<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/transport.css" type="text/css">
        <title>Public transport</title>
    </head>
    <body>
        <?php include "components/navigation.php"; ?>
        <div class="content">
            <h1>Public transport</h1>
            <!-- <img src="assets/images/floorplan_transport.png" alt="flootplan" id="floorplan"> -->
            <div id="taxi" class="transport">
                <div class="text">
                    <h2>Taxi</h2>
                    <p>On the second level you can find the taxi's. Your driver will drive you straight to your destination. There are always taxis with a time metre in front of the arrivals hall. Licensed taxis can be identified by the yellow-blue licence marks. Tip: never use taxis that don't have a licence! <br>A taxi from the airport to the centre of Brussels costs around 45 euros.</p>
                </div>
                <img src="assets/images/taxi.jpg" alt="taxi" id="taxi_pic">
            </div>

            <div id="train" class="transport">
                <img src="assets/images/train.jpg" alt="train" id="train_pic">
                <div class="text">
                    <h2>Train</h2>
                    <p>The train station is located directly under the departures and arrivals halls, at level -1. To travel with the train you must purchase a train ticket on one of the many lockets you can find on the floor, through the app of the NMBS or go to the <a href="https://www.belgiantrain.be/en/tickets-and-railcards/airports/brussels-airport" target="_blank">website of NMBS</a>. Once you acquire your ticket, you can use it to scan through the portals and get to the platform.</p>
                    <p>In case you wish to travel to the Netherlands, Germany, France, United Kingdom you can find more information on <a href="https://www.b-europe.com/EN">B-Europe</a>.</p>
                </div>
            </div>

            <div id="bus" class="transport">
                <h2>Public Bus</h2>
                <p>You have the choice between taking the public bus (De Lijn or MIVB) or the couch busses (Flixbus, BlaBlaCar, Antwerp Express)</p>
                <div id="public" class="bus">
                    <h3>De Lijn and MIVB</h3>
                    <p>The public busses departure at platforms A, B, C and D on the first floor of the airport. <br>All Cargo busses departure at platform B.</p>
                    <p>More information you can find on <a href="https://www.delijn.be/en/" target="_blank">De Lijn</a> (Flanders and Brussels) or <a href="https://www.stib-mivb.be/index.htm?l=en" target="_blank">MIVB</a> (Brussels).</p>
                    <div class="table">
                        <table class="bus_table">
                            <tr>
                                <th>Bus number</th>
                                <th>Destination</th>
                                <th>Platform</th>
                            </tr>
                            <?php
                                include "database/databases.php";
                                $database = new Database();
                                $busses = $database->getOrderedData("`delijn`","`destination`");
                                for($i=0;$i<sizeof($busses);$i++){
                                    echo "<tr>";
                                    echo "<td>". $busses[$i]["number"] . "</td>";
                                    echo "<td>". $busses[$i]["destination"] . "</td>";
                                    echo "<td>". $busses[$i]["platform"] . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
                <div id="coach" class="bus">
                    <h3>Intercity bus</h3>
                    <p>Catch a coach from Brussels Airport to various cities in Belgium and beyond. Here you can find what Airport Express, Flixbus and BlaBlaCar have to offer. Airport Express departs at platform D while all the other coachbusses depart at Parking 16, right behind the busstation.</p>
                    <p>More information you can find on the <a href="https://booking.airportexpress.be/" target="_blank">Airport Express website</a>, <a href="https://global.flixbus.com/?_ga=2.229379740.1469443230.1640201812-989200271.1640201812" target="_blank">Flixbus website</a> or the <a href="https://www.blablacar.nl/bus" target="_blank">BlaBlaCar website</a>.</p>
                    <div class="table">
                        <table class="bus_table">
                            <tr>
                                <th>Bus company</th>
                                <th>Destination</th>
                                <th>Platform</th>
                            </tr>
                            <?php
                                $coachbusses = $database->getOrderedData("`coachbus`","`name`");
                                for($j=0;$j<sizeof($coachbusses);$j++){
                                    echo "<tr>";
                                    echo "<td>". $coachbusses[$j]["name"] . "</td>";
                                    echo "<td>". $coachbusses[$j]["destination"] . "</td>";
                                    echo "<td>". $coachbusses[$j]["platform"] . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include "components/footer.php";?>
    </body>
</html>