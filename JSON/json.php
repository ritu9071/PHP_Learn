<?php
// $user = ["name"=>"Ritu","age"=>"20","email"=>"rituuu@gmail.com"];
// // print_r($user);
// $userJson = json_encode($user);
// echo $userJson;

$data = '{"name":"Ritu","age":"20","email":"rituu@gmail.com"}';
// echo $data;
$dataArray=json_decode($data,true);
print_r($dataArray)
?>