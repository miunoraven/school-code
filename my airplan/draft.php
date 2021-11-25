<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "./components/navigation.php";
    ?>
    <h1>
        homepage
    </h1>

    <ul>
        <?php
            $flights = ["brussels","madrid","paris"];

            foreach($flights as $flight){
        ?>
            <li class="cards" data-pers>
                <?php echo $flight; ?>
            </li>
        <?php 
            }
        ?>
    </ul>
</body>
</html>