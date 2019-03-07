<a href="index.php">Back to Home</a>

<?php
include "connection.php";

$id = isset($_GET['id']) ? $_GET['id'] : die();

try{
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    $stmt = "SELECT id  FROM mydvds WHERE id = ? LIMIT 0,1";
    
    $dbh->prepare($stmt);
            
    $dbh->bindParam(1, $id);
    $dbh->execute($stmt);

    // $row = $stmt -> fetch(PDO::ASSOC);

    // $this->name = $row['name'];

    echo "Record updated successfully";
}
catch(PDOException $e)
{
echo $stmt . "<br>" . $e->getMessage();
}

echo"<table>";
$conn = null;

?>