<?php
    include "database/databases.php";
    $data = new Database();
	$airports = $data->getOrderedData("`airports`", "`name`");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "components/fonts.php"; ?>
        <title>Find flight</title>
    </head>
    <body>
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
                <input type="submit" value="Search">
            </form>
        </div>
    </body>
</html>
