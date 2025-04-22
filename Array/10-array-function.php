<?php
$users = ["ritu", "raj", "guru", "raju","ritu", "raj"];
$user = ["name"=>"ritu","age"=>"20","email"=>"rtuuu@gmail.com"];
// $users = "abc";
// echo is_array($users);

// if(is_array($users)){
//     echo "this is an array";
// }else{
//     echo "this is not an array";
// }

// echo count($users);       // check array
// unset($users[1]);         // remove array
// array_push($users,"rtuuu");      // add array
// array_pop($users);       // remove array
// print_r($users);
// print_r(array_keys($user));    // only keys print 
// echo implode("<br/>",$users);       //convert array

// $str = "Hello Ritu";
// echo "$str";
// print_r(explode("  ",$str));
// print_r(array_merge($users,$user));     // merge array
// $data = array_merge($users,$user);        // merge array
// print_r($data);

$data = array_unique($users);       // duplicate array remove
print_r($data);
?>