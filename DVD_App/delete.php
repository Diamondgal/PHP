<a href="index.php">Back to Home</a>
<?php

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include "connection.php";

// $id = $_POST["id"];


$id = $_POST["id"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM mydvds WHERE id=$id";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Movie deleted successfully - if you hit the button by mistake, don't panic! Just add the movie back :-) ";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

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

// function delete(){
 
//     // delete query
//     $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
 
//     // prepare query
//     $stmt = $this->conn->prepare($query);
 
//     // sanitize
//     $this->id=htmlspecialchars(strip_tags($this->id));
 
//     // bind id of record to delete
//     $stmt->bindParam(1, $this->id);
 
//     // execute query
//     if($stmt->execute()){
//         return true;
//     }
 
//     return false;
     
// }
// }

// $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
// // prepare product object
// $id = new Dvd($db);
 
 
// // delete the product
// if($id->delete()){
 
//     // set response code - 200 ok
//     http_response_code(200);
 
//     // tell the user
//     echo json_encode(array("message" => "Product was deleted."));
// }
 
// // if unable to delete the product
// else{
 
//     // set response code - 503 service unavailable
//     http_response_code(503);
 
//     // tell the user
//     echo json_encode(array("message" => "Unable to delete product."));
// }
