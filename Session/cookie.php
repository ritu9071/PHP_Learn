<?php
setcookie('fruit','apple',time()+(86400));
setcookie('color','green',time()+(86400));
// print_r($_COOKIE);
if(isset($_COOKIE['fruit'])){
    // print_r($_COOKIE['fruit']);
    echo "current cookie is ".$_COOKIE['fruit'];
}else{
    echo "no cookie set";
    
}

echo "<br/>";



if(isset($_COOKIE['color'])){
    echo "current color is ".$_COOKIE['color'];
}else{
    echo "no color set";
}

echo "<br/>";
print_r($_COOKIE);
?>