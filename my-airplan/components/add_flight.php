<?php
    include "../database/databases.php";
    $id = $_GET["id"];
    $database = new Database();
    $database->addUserID($id);
    header("Location: http://localhost/main.php?id=$id/");