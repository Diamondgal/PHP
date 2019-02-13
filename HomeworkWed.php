<?php

$ourArray =["jumpin" => "candy", "kiddy" => "2", "birdie" => "3"] ;

function arrayRun ($position) {

    global $ourArray;
    return $ourArray [$position];

}
echo arrayRun ("kiddy",$ourArray);

echo arrayRun ("jumpin");


echo arrayRun ("kiddy");




// function flowerFnder ($flower) {
//     global $type;
//     return $type [$flower];
// }
// $type=["roses", "tulips", "daisies"];
// echo flowerFnder (0,$type);






?>