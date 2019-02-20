<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // set the "Select * to fetch data
    $stmt =$conn->prepare("SELECT * from Employees");
    $stmt->execute();

    //set the resulting fetch/select array to associative & set $results
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $results = $stmt->fetchAll();
    // HTML command to <prepare> data into readable format
    echo "<pre>";
    var_dump($results);
    echo "</pre>";

    echo "New Records succesfully created";
}
catch(PDOExeption $e)
{

    echo "Error" . "br>" . $e->getMessage();
}
   
$conn = null;

?>