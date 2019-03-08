<a href="index.php">Back to Home</a>
<?php

include "connection.php";
// header("content-type: text/plain");
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Credentials: true');
// header('Access-Control-Allow-Headers: "origin, x-requested-with, content-type"');
// header('Access-Control-Allow-Methods "GET, POST, OPTIONS"');

// class Dvd{
 
//     // database connection and table name
//     private $conn;
//     private $table_name = "mydvds";
 
//     // object properties
//     public $id;
//     public $name;
//     public $description;
 
//     // constructor with $db as database connection
//     public function __construct($db){
//         $this->conn = $db;
//     }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
//  validate string

if(isset($_POST['name']) && !empty($_POST['name']))  {
    $name = test_input($_POST['name']);
    function validateName($name) {
        return $name;
    }
    validateName($name);
}


echo"<table>";

// function create(){
 
//     // query to insert record
//     $query = "INSERT INTO
//                 " . $this->table_name . "
//             SET
//                 name=:name, description=:description,";
 
//     // prepare query
//     $stmt = $this->conn->prepare($query);
 
//     // sanitize
//     $this->name=htmlspecialchars(strip_tags($this->name));
//     $this->description=htmlspecialchars(strip_tags($this->description));

//     // bind values
//     $stmt->bindParam(":name", $this->name);
//     $stmt->bindParam(":description", $this->description);
 
//     // execute query
//     if($stmt->execute()){
//         return true;
//     }
 
//     return false;
// }
// }

try {
   
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh->prepare('INSERT INTO mydvds (name) VALUE (:name)');
    

    $stmt->bindParam(':name', $name);
    $stmt->execute();
    
    echo "New Movie Added to your list!";
    }

catch(PDOException $e)
    {
    echo $stmt . "<br>" . $e->getMessage();
    }

$dbh = null;
?>