<?php

// echo "This is Sign Up Page";
// print_r($_POST);
if($_POST){
    echo "user name is : " .$_POST['user_name'];
    echo "<br>";
    echo "email is : " .$_POST["email"];
    echo "<br>";
    echo "password is : " . $_POST["password"];
}
?>

