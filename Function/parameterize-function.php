<?php
function sum($a,$b){
    echo $a+$b;
    echo "<br/>";
}

sum(10,20);

sum(50,50);

function UserData($name,$color){
    echo "<h1 style='color:$color' >$name</h1>";
}

UserData("Ritu","green");
UserData("Guru","red");
?>