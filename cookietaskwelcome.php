<?php include "header.php" ?>


<form action ="cookietaskform.php" method="post">
Name : <input type ="text" name="name" required><br>
E-mail : <input type ="email" name="email" required><br>
<input type ="submit" value = "Submit">
</form>


<?php

$name = "Michelle" ;
$name_value = "";
setcookie($name, $name_value, time(30));


if(!isset($_COOKIE[$name])) {
       echo "Cookie Broken" ;
}
else {
    echo "Cookie Good";
}
?>