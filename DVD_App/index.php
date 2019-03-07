<!DOCTYPE HTML>
<html lang="en">
<head>
<link href="maindvd.css" rel="Stylesheet">    
</head>
<body>
    <div class = "container">
<h1>Michelle's List of Movies</h1>
<form action = "./add.php"  method="post"> 
    Add a new movie :
    <input type ="text" name="name" value = "">
    <input type="submit" value="Click to Add a New Movie"> <br>
    


</form>

<h2>List of Movies<h2>

<?php

include "connection.php" ;


try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $stmt =$conn->prepare("SELECT * from mydvds");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $taskList = $stmt->fetchAll();

    foreach ($taskList as $row) {
        ?>
        <table class = "table">
             <tr class = "tr">
                <td class = "td" ><?php echo $row['name'] ; ?><?php echo $row ['description']; ?></td>
                <td>
                    <form method='post' action='./delete.php'>
                    <input type='hidden' name='id' value= <?php echo $row['id'] ?> >
                    <input type='hidden' name='delete' value='true'>
                    <button type ='submit' name='done'>Delete This Movie</button>
                    </form>
                    <form method='get' action='./update.php'>
                    <input type='hidden' name='id' value= <?php echo $row['id'] ?> >
                    <input type='hidden' name='update' value='true'>
                    <button type ='submit' name='done'>I've watched this movie</button>
    
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