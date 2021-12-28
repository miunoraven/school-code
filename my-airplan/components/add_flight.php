<?php
    include "../database/databases.php";
    $id = $_GET["id"];
    $database = new Database();
    $database->addUserID($id);
    header("Location: https://airport.miunoraven.be/main.php?id=$id");