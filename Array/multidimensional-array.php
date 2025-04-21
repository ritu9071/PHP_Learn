<?php
$users=[
    [1,"ritu","delhi"],
    [2,"guru","mumbai"],
    [3,"raj","kolkata"]
];
// echo "<pre>";
// print_r ($users);
// echo "</pre>";

for($i=0;$i<count($users);$i++){
    // echo $i;
    // print_r($users[$i]);
    
     
    for($j=0; $j<count($users[$i]);$j++){
        echo $users[$i ][$j];
    }
    echo "<br/>";
    
}


?>