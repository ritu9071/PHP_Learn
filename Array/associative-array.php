<?php
$userdetails=[
    "name"=>"ritu",
    "age"=>20,
    "city"=>"delhi",
    "country"=>"india",
];

// echo $userdetails["name"];
// echo "<br/>";
// echo $userdetails["age"];
// echo "<br/>";
// echo $userdetails["city"]2
// echo "<br/>";
// echo $userdetails["country"];

foreach($userdetails as $key=>$data){
    echo "<h2 style ='color:green';>".$key ." = ".$data."</h2>";
    echo "<br/>";
}
    // associative array using foreach loop
foreach($userdetails as $key=>$data):
    echo $key ." = ".$data;
    echo "<br/>";
endforeach;
?>