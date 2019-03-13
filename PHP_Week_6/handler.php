<?php
// if (!empty($_REQUEST["Michelle"])){
//     $name=$_REQUEST["Michelle"];
//     if(!empty($_REQUEST["password"])){
//     $password=$_REQUEST["Chump"];  
//         echo "You imposter";
// } 
//  else {
//     echo "welcome boss";
// }
// }

// linked from form.php for a 2 part login in verification,
// attention to get and post methods 

if($_SERVER["REQUEST_METHOD"] === "POST"){
 if ($_POST["Michelle"] === "Michelle"
 && $_POST["password"] === "Seventeen"){
 
 echo "You be the ONE obi kanobi";}

 else {
 echo "I caught you imposter"; 
}
}
?>