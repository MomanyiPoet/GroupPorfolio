<?php

$serverName ="localhost";
$userName = "root";
$password = "";
$dbName = "gportfolio";

// create and check connection
if (!$conn = mysqli_connect($serverName, $userName, $password, $dbName)){
    die ("Failed to Connect");
}
?>