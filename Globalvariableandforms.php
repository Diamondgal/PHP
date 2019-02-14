

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name : <input type="text"  name="name">
        <input type="submit">
        <input type="reset"><br>

Nick Name:   <input type="text" name="yourNickName">
     <input type="submit">
     <input type="reset"><br>
        
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   // collect value (your name) from input field  
    $name1 = $_REQUEST['name'];
    if (empty($name1)) {
        echo "You must type your name";
    } else {
        echo $name1;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // collect value (your Nickname) from input field  
     $name = $_REQUEST['yourNickName'];
     if (empty($name)) {
         echo "Don't be shy - you can tell us";
     } else {
         echo $name;
     }
 }
?>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>

 <?php 

 if($_SERVER["REQUEST_METHOD"] === "GET") {
     echo "Thank you";
 }

 ?>


