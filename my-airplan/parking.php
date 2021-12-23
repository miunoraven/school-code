<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/parking.css" type="text/css">
        <title>Parkings</title>
    </head>
    <body>
        <?php include "components/navigation.php"; ?>
        <div class="content">
            <h1>Parkings</h1>
            <div class="pair">
                <div class="information">
                    <h3>Interparking</h3>
                    <p class="text">You can find more than 10,000 parking spaces just a 5-minute walk from the terminal. Another 2,000 parking spaces at just a 10-minute walk from the airport terminal. Or would you rather jump on the free shuttle bus that takes you directly to the airport? Want a guaranteed parking space? Reserve your space in advance.</p>
                    <h3>Make a reservation</h3>
                    <a href="https://brusselsairport.interparking.be/nl/">Interparking Website</a>
                    <p class="text">Tel: <a href="tel:+3227152110">00 32 (0)2 715 21 10</a></p>
                    <p class="text">E-mail: <a href="mailto:brusselsairport@interparking.com">brusselsairport@interparking.com</a></p>
                </div>
                <img src="assets/images/interparking.jpg" alt="parking" id="interparking">
            </div>
            <h3>Overview of all the parkings</h3>
            <div class="information">
                <div class="table">
                    <table class="parking_table">
                        <tr>
                            <th>Parking</th>
                            <th>Price 1 hour</th>
                            <th>Price 1 day</th>
                            <th>Price 1 week</th>
                            <th>Walking distance</th>
                            <th>Recommended stay</th>
                            <th>Can use PCard+</th>
                            <th>Online reservation</th>
                        </tr>
                        <?php
                    include "database/databases.php";
                    $database = new Database();
                    $parkings = $database->getData("`parkings`");
                    for($i=0;$i<sizeof($parkings);$i++){
                        echo "<tr>";
                        echo "<td>". $parkings[$i]["name"] . "</td>";
                        echo "<td>". $parkings[$i]["price_1h"] . "€</td>";
                        echo "<td>". $parkings[$i]["price_24h"] . "€</td>";
                        echo "<td>". $parkings[$i]["price_1w"] . "€</td>";
                        echo "<td>". $parkings[$i]["distance"] . " min</td>";
                        echo "<td>". $parkings[$i]["rec_days"] . " days</td>";
                        if($parkings[$i]["pcard"] == 1) echo "<td>Yes</td>";
                        else echo "<td>No</td>";
                        if($parkings[$i]["online_res"] == 1) echo "<td>Yes</td>";
                        else echo "<td>No</td>";
                        echo "</tr>";
                    }
                    ?>
                    </table>
                </div>
            </div>
            <img src="assets/images/parking.png" alt="parking" id="parking_img" width="700px">
        </div>
        <?php include "components/footer.php";?>
    </body>
</html>