<form action="" method=post>
    <input type="text" placeholder="enter name" name="name">
    <br/>
    <br/>
    <input type="text" placeholder="enter course" name="course">
    <br/>
    <br/>
    <input type="text" placeholder="enter batch" name="batch">
    <br/>
    <br/>
    <input type="text" placeholder="enter city" name="city">
    <br/>
    <br/>
    <input type="text" placeholder="enter year" name="year">
    <br/>
    <br/>
    <button>Add New Students</button>
   
</form>


<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    $city=$_POST['city'];
    $year=$_POST['year'];
    include("./config.php");
$student=$conn->prepare("INSERT INTO `students`(`id`,`name`,`course`,`batch`,`city`,`year`) 
VALUES (NULL,'$name','$course','$batch','$city','$year')");
$result =$student->execute();
if($result){
    echo "Data inserted";
}else{
    echo "operation failed";
}

}

?>