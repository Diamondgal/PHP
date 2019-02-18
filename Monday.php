<?php 

echo "Hello World!"

//splice arrays and two arguments 
$numbers = [1,2,3,4,5,6];
print_r(array_splice($numbers, 3, 2));
print_r($numbers);

//concatenate two arrays


$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);

// arrays with keys and adding a new member to the array

$student_numbers = [
    "Tatum" => "288-1234",
    "Connor" => "288-1235",
  ];
  
  $student_numbers["Michael"] = "7755-23432-123444";
  
  print_r($student_numbers);
  
  

?>