<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/map.css">
        <title>Test</title>
    </head>
    <body>
        <?php include "components/navigation.php"; ?>
        <div class="content">
            <h1>Find your way in the airport</h1>
            <p>Brussels Airport has 2 Concourses: Schengen flights  depart from gates A, non-Schengen flights depart from gates B and T <br>
            * Schengen countries are: Austria, Belgium, the Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania, Luxembourg, Malta, the Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden and Switzerland</p>
            <nav id="maps">
                <button class="nav_button" onclick="changePicture('gateA.png')">Gate A/T</button>
                <button class="nav_button" onclick="changePicture('gateB.png')">Gate B</button>
                <button class="nav_button" onclick="changePicture('checkin.jpeg')">Check-in</button>
                <button class="nav_button" onclick="changePicture('luggage_pickup.png')">Baggage reclaim/Arrival hall</button>
                <button class="nav_button" onclick="changePicture('busstation.png')">Bus station</button>
            </nav>
            <div class="container">
                <img src="assets/images/gateA.png" height="600px" alt="map" id="map" class="images">
            </div>
        </div>
        <?php include "components/footer.php";?>
        <script src="assets/js/zoomin.js"></script>
    </body>
</html>

