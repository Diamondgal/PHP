<?php

// homework task

$ourArray =["jumpin" => "candy", "kiddy" => 2, "birdie" => 3] ;

function arrayRun ($position) {

    global $ourArray;
    return $ourArray [$position];

}
echo arrayRun ("birdie");

echo arrayRun ("jumpin");


echo arrayRun ("kiddy");




function flowerFnder ($flower) {
    global $type;
    return $type [$flower];
}
$type=["roses", "tulips", "daisies"];
echo flowerFnder (0,$type);


// practise loops

for ($dog = 0; $dog < 2; $dog ++) {
    echo "Hello world <br>";
}

$a = 0;
while ($a<7) {
    echo "chocolate $a <br>"; 
    $a++;
}

$candy=["peppermint","lifesaver","jolly","nerds"];
for ($c = 0; $c < count($candy); $c++) 
    {   
    echo "my favourtie candy is " . $candy[$c];
    }



$dan = ["smile", "dimples", "teeth"];

function createFace($dan) {

  $a = 0;

  do {
     echo "happy faces are " . $dan[$a] . "<br>";
     $a++;
  }
  while ($a < count($dan));
}
 createFace($dan);


?>