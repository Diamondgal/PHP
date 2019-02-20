<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // sql to delete a record
    $sql ="DELETE FROM Employees WHERE id=3";

    //use exec () because no results are returned 
    $conn->exec($sql);


    echo "Record deleted successfully";
}
catch(PDOExeption $e)
{

    echo $sql . "br>" . $e->getMessage();
}
   
$conn = null;

?>