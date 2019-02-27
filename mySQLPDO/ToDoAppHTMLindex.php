<!DOCTYPE HTML>
<html lang="en">
<head>
<link href="MainToDoApp.css" rel="Stylesheet">    
</head>
<body>
    <div class = "container">
<h1>Here's Your To Do App</h1>
<form action = "./Add.php"  method="post"> 
    To Do Item:
    <input type ="text" name="name" value = "">
    <input type="submit" value="AddToList">
</form>

<h2>Current To Do's<h2>

<?php

$servername = "localhost";
$username = "root";
$password = "todo#1";
$dbname = "todoapp";


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

    foreach ($taskList as $row) {
?>
<table class = "table">
     <tr class = "tr">
        <td class = "td" ><?php echo $row['Task']; ?><?php ; ?></td>
        <td>
            <form method='post' action='./Delete.php'>
            <input type='hidden' name='id' value= <?php echo $row['id'] ?> >
            <input type='hidden' name='delete' value='true'>
                <button type ='submit' name='done'>Done</button>
            </form>
        
        </td>
    </tr> 
</table>    
<?php
    } 
}

catch(PDOExeption $e)
{
    echo "Error" . "<br>" . $e->getMessage();
}
?>
 </body>
 </html>

