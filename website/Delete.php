<a href="ToDoAppHTMLindex.php">Home</a>

<?php

include "connection.php";


$id = $_POST["id"];

try {
    $conn = new PDO("mysql:unix_socket=/cloudsql/$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM tasks WHERE id=$id";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;