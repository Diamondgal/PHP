<?php
$servername = "localhost";
$username = "root";
$password = "";



try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    
    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to add employees to myDBPDO
    $sql = "CREATE DATABASE myDBPDO" ; 

    // use exec() becasue no results are returned
   
    $conn->exec($sql);

    echo "Database succesfully created";
}
catch(PDOExeption $e)
{
    echo $sql . "br>" . $e->getMessage();
}

$conn = null;

?>
