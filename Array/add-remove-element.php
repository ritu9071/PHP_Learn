<?php
$users = ["Ritu","Guru","Raj","Rajesh"];

//   print_r($users);

   // add element
array_push($users,"raju","rani");
// print_r($users);


//remove element
// array_pop($users);  // last 1 element remove
array_splice($users,-2);    // last 2 element remove
print_r($users);
?>