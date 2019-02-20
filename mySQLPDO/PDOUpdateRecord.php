<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // sql to update a record
    $sql = "UPDATE employees SET lastname='Doe' WHERE id=20";

    //prepare the statement
    $stmt=$conn->prepare($sql);

    // execute the query
    $stmt->execute();
    
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . "Record UPDATED successfully";
}
catch(PDOExeption $e)
{

    echo $sql . "br>" . $e->getMessage();
}
   
$conn = null;

?>