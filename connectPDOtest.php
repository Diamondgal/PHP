<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=week6-intro", $username, $password);

    echo "Connected succesfully";
}
catch(PDOExeption $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>

