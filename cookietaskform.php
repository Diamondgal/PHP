<?php include "header.php" ?>


<form action ="cookietaskform.php" method="post">
Name : <input type ="text" name="name" required><br>
E-mail : <input type ="email" name="email" required><br>
<input type ="submit" value = "Submit">
</form>



<?php


$email = " ";

if ($_POST) {
    $email = form_validate($_POST["email"]);
    $name = form_validate($_POST["name"]);
    print_r("Welcome");

}

function form_validate($info){
    $info = htmlspecialchars($info);
    $info = stripslashes($info);
    $info = trim($info);
    return $info;
}

// if(!isset($_COOKIE[$name])) {
//     echo "Cookie Failure" ;
// }
// else {
//  echo "Cookie Success";
// }


?>






