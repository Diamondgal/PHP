<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();

    // our SQL statements

    $conn->exec("INSERT INTO Employees (firstname, lastname, employeenumber,email)
    VALUES ('Solly', 'Doe', 63559, 'john@example.com')");
    $conn->exec("INSERT INTO Employees (firstname, lastname, employeenumber,email)
    VALUES ('Basil', 'Doe', 63779, 'john@example.com')");
    $conn->exec("INSERT INTO Employees (firstname, lastname, employeenumber,email)
    VALUES ('Milly', 'Doe', 63889, 'john@example.com')");
    $conn->exec("INSERT INTO Employees (firstname, lastname, employeenumber,email)
    VALUES ('Dilly', 'Doe', 63309, 'john@example.com')");
    $conn->exec("INSERT INTO Employees (firstname, lastname, employeenumber,email)
    VALUES ('Hilly', 'Doe', 67729, 'john@example.com')");

    // commit the transaction

    $last_id = $conn->lastInsertID();

    $conn->commit();

    echo "New Records succesfully created. Last inserted ID is: " .$last_id;
}
catch(PDOExeption $e)
{
    $conn->rollback();
    echo "Error" . "br>" . $e->getMessage();
}
    // roll back the transation if something failed
$conn = null;

?>