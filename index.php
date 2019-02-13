<!-- 
<?php 
echo "Hello, World! <br>"
?> -->

<!-- <?php
    $myname = "Michelle\n";
    echo $myname ;
    echo $myname . "is my name";
    $mynewname = "<div>" . $myname . "</div>" ;
    echo $mynewname;
    var_dump($mynewname);
    ?> -->



<?php


/* TASK : Make an object and set keys and values
step 1 create a variable and set as empty object 
step 2 create variable set as empty array
step 3 add a string to array
step 4 add array as a value to object
step 5 add an integer as new postion in array
step 5 var dump object
step 6 var dump array*/

    class Cars {};
    
    $car = new Cars;
    $typecars = [];
    array_push($typecars, "mazda", "volkswagen");
    array_push($typecars, "12")  ;
    $car->{'typeCars'} = $typecars;

    // $trucks = new Cars could add a new category of trucks;

    var_dump($car);
    echo "<br><br>";


    // var_dump($typecars);
    strrev(car$typecars) : car;

?>

