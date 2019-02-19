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
  

  //array key exists function

  $student_numbers = [
    "Tatum" => "288-4422-2234",
    "Connor" => "188-443-3345",
  ];
  
  if (array_key_exists("Tatum", $student_numbers)) {
      echo "Tatum's student number is " . $student_numbers["Tatum"];
  } else {
      echo "Tatums's phone number is not in the phone book!";
  }
  
  if (array_key_exists("Michelle", $student_numbers)) {
      echo "Michelle's phone number is " . $student_numbers["Michelle"];
  } else {
      echo "Michelle's phone number is not in the phone book!";
  }
  




// get the keys of the array (the names)

$student_numbers = [
  "Tatum" => "288-5235-8573",
  "Connor" => "288-4092-4856",
];

print_r(array_keys($student_numbers));


//get values from an array\$student_numbers = the telephone number
  // here or the [0],[1] if not assigned to array
 
  "Tatum" => "288-22335-8573",
  "Connor" => "288-4932-4856",
];
print_r(array_values($student_numbers));

//split a string with a list of names separated by a comma use explode funtion

$names = "Jane,John,Tom";
$names_list = explode(",", $names);
echo "The second person in the list is $names_list[1]";

//join back to an array, use implode function

$names_list = ["jon","jane","otom"];
$names = implode(",", $name_list);
echo "The people are $names";

// split the $numbers variable to an array
// called $number_list

$numbers = "38,42,58,48,33,59,87,17,20,8,98,14,48,10,44,39,82,19,77,100,98,53,95,30,17,30,96,68,47,81,52,82,11,13,83,10,14,49,96,27,73,42,76,71,15,81,36,77,38,17,2,29,100,26,86,22,18,38,64,82,51,39,7,88,53,82,30,98,86";
$number_list=explode(",", $numbers);


print_r($number_list);
  
// print odd numbers in array use while & continue loop to skip even numbers
$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97];

$index = 0;
while( $index < count( $numbers ) )
{
    $number = $numbers[ $index ];
    ++$index;

    if( $number % 2 == 0 )
        continue;

    echo "$number\n";
}


?>