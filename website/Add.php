<a href="ToDoAppHTMLindex.php">Home</a>

<?php
include "connection.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
//  validate string

if(!empty($_POST['name'])) {
    $name = test_input($_POST['name']);
    function validateName($name) {
        return $name;
    }
    validateName($name);
}


echo"<table>";

// $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

try {
    $pdo = new PDO("mysql:unix_socket=/cloudsql/$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $xyz = "INSERT INTO tasks (task, status)
        VALUES ('$name','pending')";
    
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