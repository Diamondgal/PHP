<!DOCTYPE HTML>
<html lang="en">
<head></head>
<body>
<h1>Here's Your To Do App</h1>
<form method="post">
To Do Item:<input type ="text" name="name" value = "">
<input type="submit" value="AddToList">

</form>

<h2>Current To Do's<h2>
<table class="table table-striped">
<tbody>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todoapp";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//Create a task and bind the record to tasks column, or delete a 
//task from tasks on ID on done 'submit' 

if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $xyz = $pdo->prepare("INSERT INTO tasks (task) VALUES(:task)");
    $xyz->bindValue(':task', $name, PDO::PARAM-STR);
    $xyz->execute();
 }elseif(isset($_POST['done'])) {
     $id = $_POST['id'];
     $xyz = $pdo->prepare("delete from tasks where id = :id");
     $xyz->bindValue(':id',$id, PDO::PARAM_INT);
     $xyz->execute();
 }
?>

<?php

// select tasks from db, per row validate data, display records
// in table 
$xyz = $pdo->prepare("SELECT * FROM tasks ORDER by ID DESC");
$xyz->execute();
foreach($xyz as $row) {
?>

<tr>

    <td><?=htmlspecialchars($row['task'])?></td>
    <td>

<form method="POST">
<input type ="submit" name="done">Done</button>
<input type="hidden" name="id" value=<?=row['id']?>>
<input type="hidden" name="delete" value="true">
</form>

</td>
</tr>
<?php
    }
?>


</table>
</body>
</html>

