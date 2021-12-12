<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search flight number</title>
        <?php include "fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/flight_numb.css" type="text/css">
    </head>
    <body>
        <div class="background">
            <div class="content">
                <h1>My Airplan <img src="assets/images/airplan_logo.png" alt="logo" class="logo"></h1>
                <div class="search">
                    <div class="search_choices">
                        <div class="search_choice" id="flight_numb">
                            <p>Search by number</p> 
                        </div>
                        <div class="search_choice" id="flight_dest">
                           <p>Search by destination</p>
                        </div>
                    </div>
                    <div class="search_input">
                        <input class="fl_input" type="text" name="flight number" id="fl_number" placeholder="Flight number">
                        <input class="fl_input" type="date" name="flight date" id="fl_date">
                    </div>
                </div>

            </div>
        </div>
    
    </body>
</html>