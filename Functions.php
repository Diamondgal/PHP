<?php
// function printaName() {
//     print_r ("My name is Michelle. <br>");
// }

// printaName();

// // create a function argument


// function printmyName($surnameChanges) {
//     print "Michelle $surnameChanges. <br>";
// }

// printmyName("Wray");
// printmyName("Fagan");

// function myFullName($givenName, $lastNames) {
//     print_r ("$givenName" . "$lastNames <br>");
// }

// myFullName("Michelle" , "Wray");
// myFullName("Michelle" , "Fagan");
// myFullName("Michelle" , "Tomsett");

// function printthisName($firstName) {
//     echo $firstName . "Wray. <br>";
// }

// printthisName ("Michelle");


// function tomatoType($tomatoName) {
//     print_r("$tomatoName Tomato.<br>");
// }

// tomatoType("Cherry");
// tomatoType("Red");
// tomatoType("Vintage");
// tomatoType("Green");


// function multiply($x,$y) {
//     $z = $x * $y;
//     return $z;
// }

// echo "1 * 5 = " . multiply(1,5) . "<br>";
// echo "2 * 5 = " . multiply(2,5) . "<br>";
// print "3 * 5 = " . multiply(3,5) . "<br>";  

// function fullnamemaker ($x, $y, $z) {}
//     $a = $x + $y + $z;
//     return $a;
// }

// echo "Michelle + Jennifer + Fagan = " . sum ()




// function ageFinder ($variableAge) {

//     $age = ["Peter"=>"12", "Mom"=>"33", "Dad"=>"1"];

// // var_dump ($age);
// // echo $age["Mom"];
// // echo $age["Dad"];
    
//     return $age[$variableAge];
// }
// echo ageFinder("Peter");


// using a global $type variable

function flowerFnder ($flower) {
    global $type;
    return $type [$flower];
}
$type=["roses", "tulips", "daisies"];
echo flowerFnder (0,$type);


?>
