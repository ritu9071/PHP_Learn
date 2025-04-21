<?php
$users = [
    ["name"=>"Ritu","age"=>"20","email"=>"ritu@gmail.com"],
    ["name"=>"Guru","age"=>"21","email"=>"guru@gmail.com"],
    ["name"=>"Raj","age"=>"22","email"=>"raj@gmail.com"],
    ["name"=>"Rajesh","age"=>"23","email"=>"rajesh@gmail.com"]
];

// print_r($users);

//nested foreach loop

// foreach($users as $x){
//     // print_r($x);
//     // echo "<br/>";
//     foreach($x as $key =>$y){
//         echo $key ."=". $y;
//         echo "<br/>";
//     }
//     echo "<br/>";
//     echo "<br/>";
// }

// table ki form me data

echo "<table border='1'>";

foreach($users as $x){
    // print_r($x);
    // echo "<br/>";
    echo "<tr>";
    foreach($x as $key =>$y){
        echo "<td>";
        echo $key ."=". $y;
        // echo "<br/>";
        echo "</td>";
    }
    echo "</tr>";
    // echo "<br/>";
    // echo "<br/>";
}
echo "</table>";
 

?>