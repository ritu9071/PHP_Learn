<?php
class MathOperations{
    // public $val=30;
    function sum($a,$b){
        // return 10+20;
        echo $a+$b;
        // echo $a+$b+$this->val;
       
    }

    function multi($a,$b){
        echo $a*$b;
    }

    function sub($a,$b){
        echo $a-$b;
    }

}

$maths= new MathOperations();
//    echo $maths->sum();
   $maths->sum(20,30);
   echo "<br/>";
   $maths->multi(20,30);
   echo "<br/>";
   $maths->sub(50,70);
//    $maths->sum(100,200);

//    $maths1= new MathOperations();
//    echo "<br/>";
//    $maths1->sum(1000,2000);
 
?>

