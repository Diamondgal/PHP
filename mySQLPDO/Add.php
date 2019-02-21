<?php
//  validate string

if(!empty($_POST['name'])) {
    $name = $_POST['name'];
    function validateName($name) {
        return $name;
    }
    validateName($name);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todoapp";
echo"<table>";

// $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $xyz = "INSERT INTO tasks (task, status)
        VALUES ('$name','pending')";
    
        // use exec() because no results are returned

    $pdo->exec($xyz);
    $last_id = $pdo->lastInsertID();


    echo "New Record succesfully created";
}
catch(PDOExeption $e)
{
    echo $xyz . "<br>" . $e->getMessage();
}

$pdo = null;

?>