<!DOCTYPE HTML>
<html lang="en">
<head>
<link href="MainToDoApp.css" rel="Stylesheet">    
</head>
<body>
<h1>Here's Your To Do App</h1>
<form action = ""  method="post">
To Do Item:<input type ="text" name="name" value = "">
<input type="submit" value="AddToList">
   <table class="table table-striped">
</form>

<h2>Current To Do's<h2>

<?php
//  validate string

if(!empty($_POST) && isset($_POST)) {
    $name = $_POST['name'];
    function validateName($name) {
        return $name;
    }
    validateName($name);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todoapp";
echo"<table>";

// $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $xyz = "INSERT INTO tasks (task, status)
        VALUES ('$name','pending')";
    
        // use exec() because no results are returned

    $pdo->exec($xyz);
    $last_id = $pdo->lastInsertID();


    echo "New Record succesfully created";
}
catch(PDOExeption $e)
{
    echo $xyz . "<br>" . $e->getMessage();
}

$pdo = null;

//Create a task and bind the task to tasks column, or delete a 
//task from tasks on ID on done 'submit' in prepared statement 
// select tasks from db, per row data, display records
// in table 


try {
    
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // set the "Select * to fetch data
    $stmt =$pdo->prepare("SELECT * from tasks");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $taskList = $stmt->fetchAll();

    var_dump($taskList);

    foreach ($taskList as $row) {
     echo "<tr>";
     echo "<td>" .$row['Task'] . "</td>";
     echo "<td>" . "<form method='POST' action=''>" . "<button type ='submit' name='done'>Done</button></form>" .
     "<input type='hidden' name='id' value='" . $row['id'] ."' ><input type='hidden' name='delete' value='true'> ";     
    } 
}

catch(PDOExeption $e)
{
    echo "Error" . "<br>" . $e->getMessage();
}

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $xyz = $pdo->prepare("INSERT INTO tasks (Task) VALUES(:Task)");
        $xyz->bindValue(':task', $name, PDO::PARAM_STR);
        $xyz->execute();
     }elseif(isset($_POST['done'])) {
         $id = $_POST['id'];
         $xyz = $pdo->prepare("delete from tasks where id = :id");
         $xyz->bindValue(':id', $id, PDO::PARAM_INT);
         $xyz->execute();
     }

     try {

    $xyz = $pdo->prepare("SELECT * FROM tasks ORDER by (id) DESC");
    $xyz->execute();
    foreach($xyz as $row) {

?>


    <tbody>


<?php
    }
}
    catch(PDOExeption $e)
{
    echo "message". "<br>" . $e->getMessage();
}
     
?>

 </table>
 </body>
 </html>

