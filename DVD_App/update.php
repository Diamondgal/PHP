<a href="index.php">Back to Home</a>

<?php
include "connection.php";

$id = (isset($_POST['id']) ? $_POST['id'] : '');

try{
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    $sql= "UPDATE mydvds SET watched_status='watched' WHERE id=$id";

    // $dbh->bindParam(1, $id);
    $dbh->exec($sql);

    // read and remove from add table to the update table???
    //check order is correct ??

    // $row = $stmt -> fetch(PDO::ASSOC);

    // $this->name = $row['name'];

    echo "The database is updated to show you have watched this movie - Back to Home";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

echo"<table>";
$dbh = null;

?>