<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Public transport</title>
    </head>
    <body>
        <div class="content">
            <h1>Public transport</h1>
            <div id="taxi">
                <h2>Taxi</h2>
                <p>Take a taxi to travel to and from the airport without stress. Your driver will drive you straight to your destination. There are always taxis with a time metre in front of the arrivals hall. Licensed taxis can be identified by the yellow-blue licence marks. Tip: never use taxis that don't have a licence! <br>A taxi from the airport to the centre of Brussels costs around 45 euros.</p>
            </div>
            <div id="bus">
                <h2>Bus</h2>
                <p>You have the choice between taking the public bus (De Lijn or MIVB) or the couch busses (Flixbus, BlaBlaCar, Antwerp Express)</p>
                <h3>De Lijn and MIVB</h3>
                <p>The public busses departure at platforms A, B, C and D on the first floor of the airport. <br>All Cargo busses departure at platform B.</p>
                <p>More information you can find on <a href="https://www.delijn.be/en/" target="_blank">De Lijn</a> or <a href="https://www.stib-mivb.be/index.htm?l=en" target="_blank">MIVB</a>.</p>
                <table>
                    <tr>
                        <th>Bus number</th>
                        <th>Destination</th>
                        <th>Platform</th>
                    </tr>
                    <?php
                        include "database/databases.php";
                        $database = new Database();
                        $busses = $database->getOrderedData("`delijn`","`number`");
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

            <div id="train">
                <h2>Train</h2>
                <p>The train station is located directly under the departures and arrivals halls, at level -1. To travel with the train you must purchase a train ticket on one of the many lockets you can find on the floor, through the app of the NMBS or go to the <a href="https://www.belgiantrain.be/en/tickets-and-railcards/airports/brussels-airport" target="_blank">website of NMBS</a>. Once you acquire your ticket, you can use it to scan through the portals and get to the platform.</p>
                <p>In case you wish to travel to the Netherlands, Germany, France, United Kingdom you can find more information on <a href="https://www.b-europe.com/EN">B-Europe</a>.</p>
            </div>

        </div>
    </body>
</html>