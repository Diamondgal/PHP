<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to add employees to myDBPDO
    $sql = "INSERT INTO Employees (firstname, lastname, employeenumber,email)
        VALUES ('Molly', 'Doe', 63229, 'john@example.com')";
    
        // use exec() because no results are returned

    $conn->exec($sql);
    $last_id = $conn->lastInsertID();


    echo "New Record succesfully created. Last inserted ID is: " .$last_id;
}
catch(PDOExeption $e)
{
    echo $sql . "br>" . $e->getMessage();
}

$conn = null;

?>
