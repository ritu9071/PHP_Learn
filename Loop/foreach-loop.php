<?php
$users = ["ritu","guru","raj","raju","rani"];

foreach($users as $x){

        if($x=="raj"){
            continue;
        }
    echo "<h1 style='color:green';>".$x."<br/>"."</h1>";

    

    // if($x=="raj"){
    //     break;
    // }
}

 

      // associative array using foreach loop
    foreach($users as $x):
    echo $x;
    echo "<br/>";
    endforeach;

 ?>