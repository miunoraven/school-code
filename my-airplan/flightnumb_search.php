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
                    <form action="<?php echo "search_flight.php?id=".$id?>" method="post">
                        <label>Flight number</label> <br>
                        <input type="text" name="flightnumb" id="flightnumb" placeholder="e.g. XX 0000"> <br>
                        <label>Where from?</label> <br>
                        <select name="departure_airport" id="departure_airport"> <br>
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
                    <p class="changepage">No flight number? <a href="dest_search.php?id=<?php echo $id?>">Look by destination</a></p>
                </div>
                <?php include "components/footer.php";?>

            </div>
        </div>
    </body>
</html>



