!DOCTYPE HTML>
<html lang="en">
<head>
<link href="maindvd.css" rel="Stylesheet">    
</head>
<body>
    <div class = "container">
<h1>Michelle's List of Movies</h1>
<form action = "./Add.php"  method="post"> 
    Add a new movie :
    <input type ="text" name="name" value = "">
    <input type="submit" value="updateMyMovies">

</form>

<h2>List of Movies<h2>

<?php

include "connection.php" ;


try {
    
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $stmt =$pdo->prepare("SELECT * from mydvds");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $taskList = $stmt->fetchAll();

    foreach ($taskList as $row) {
        ?>
        <table class = "table">
             <tr class = "tr">
                <td class = "td" ><?php echo $row['name']; ?><?php ; ?></td>
                <td>
                    <form method='post' action='./Delete.php'>
                    <input type='hidden' name='id' value= <?php echo $row['id'] ?> >
                    <input type='hidden' name='delete' value='true'>
                        <input type ='submit' value='done'>
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