<?php  

    // $Name = "Ritu";     // global variable  ko khi v exess kr skte h
    // function getname(){ 
    //    // $name = "guru";     // local variable
    //    global $name;
    //    $name = "guru";
    //     echo $name;  
    // }
    
    // getname();
    // echo "<br>";
    // echo $Name;
    // getname();

    $name = "Ritu";
    function test(){
        $name = "guru";
        echo $name;

        function test2(){
            // $name = "raj";
            global $name;
            echo $name;
        }
    }

    
    test();
    echo "<br>";
    test2();
    echo "<br>";
    echo $name;
    

?>