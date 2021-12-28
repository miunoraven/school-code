<?php
    include "database/databases.php";
    $data = new Database();
	$airports = $data->getOrderedData("`airports`", "`name`");
    $id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/flightsearch.css">
        <title>Find flight</title>
    </head>
    <body>
        <div class="background">
            <div class="container">    
                <?php include "components/navigation.php"; ?>
                <div class="content">
                    <form action="search_flight.php" method="post">
                        <label>Where from?</label> <br>
                        <select name="departure_airport" id="departure_airport">
                            <?php
                                for($j = 0; $j < sizeof($airports);$j++){
                                    echo "<option value=\"". $airports[$j]["icao"] ."\">".$airports[$j]["name"]."</option>";
                                }
                            ?>
                        </select> <br>
                        <label>Where to?</label> <br>
                        <select name="departure_airport" id="departure_airport">
                            <?php
                                for($j = 0; $j < sizeof($airports);$j++){
                                    echo "<option value=\"". $airports[$j]["icao"] ."\">".$airports[$j]["name"]."</option>";
                                }
                            ?>
                        </select> <br>
                        <label>When?</label> <br>
                        <input type="date" name="departure_date" id="departure_date"> <br>
                        <input type="submit" value="Search" class="button-find">
                    </form>
                    <p class="changepage">Know your flight number? <a href="flightnumb_search.php?id=<?php echo $id?>">Look by flight number</a></p>
                </div>
                <?php include "components/footer.php";?>
            </div>
        </div>
    </body>
</html>
