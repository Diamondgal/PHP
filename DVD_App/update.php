<a href="index.php">Back to Home</a>

<?php
include "connection.php";

$id = isset($_GET['id']) ? $_GET['id'] : die();

try{
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    $stmt= $dbh->prepare ("SELECT id  FROM mydvds WHERE id = ? LIMIT 0,1");

    $dbh->bindParam(1, $id);
    $dbh->execute($stmt);

    // read and remove from add table to the update table???
    //check order is correct ??

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