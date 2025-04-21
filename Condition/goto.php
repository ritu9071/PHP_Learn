<?php
// $x = 10;
// echo "before condition </br>";

// if($x==20){
//     goto  abc;
// }

// $name = "Ritu </br>";
// echo $name;



// abc:
// echo "Hello Ritu";

for($i=1; $i<=10; $i++){         // less than
    echo "$i</br>";

    if($i==5){
        goto abc;
    }
}

abc:
echo "loop is break";
?>