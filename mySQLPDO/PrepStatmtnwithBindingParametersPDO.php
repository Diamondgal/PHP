<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // prepare SQL and bind parameters
    $stmt =$conn->prepare("INSERT INTO employees (firstname, lastname, employeenumber,email)
    VALUES (:firstname, :lastname, :employeenumber, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':employeenumber', $employeenumber);
    $stmt->bindParam(':email', $email);


    // insert a row
    $firstname = "Grant";
    $lastname = "Twit";
    $employeenumber = 221115858;
    $email = "grant@gggrre.com";
    $stmt->execute();
    
    // insert a row
    $firstname = "Tom";
    $lastname = "Twit";
    $employeenumber = 11115858;
    $email = "grant@gggrre.com";
    $stmt->execute();

    // insert a row
    $firstname = "Timmy";
    $lastname = "Twit";
    $employeenumber = 221115858;
    $email = "timmy@gggrre.com";
    $stmt->execute();

    // $last_id = $conn->lastInsertID();

    echo "New Records succesfully created";
}
catch(PDOExeption $e)
{

    echo "Error" . "br>" . $e->getMessage();
}
   
$conn = null;

?>