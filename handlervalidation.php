
<form method="post" action="handlervalidation.php">
Name : <input type ="text" name="name" required><br>
E-mail : <input type ="email" name="email" required><br>
Password : <input type = "password" name = "password" required><br>
<input type ="submit" value = "Submit">
</form>



<?php

$name = $email = $password = " ";

if ($_POST) {
    $name = form_validate($_POST["name"]);
    $email = form_validate($_POST["email"]);
    $password = form_validate($_POST["password"]);
    echo $name;
    echo $email;
    echo $password;
}

function form_validate($info){
    $info = htmlspecialchars($info);
    $info = stripslashes($info);
    $info = trim($info);
    return $info;
}

?>