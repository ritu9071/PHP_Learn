<?php
include("./config.php");
// $students= $conn->prepare("delete from students where id = '6'");
// echo $students->execute();

$students = $conn->prepare("select * from students");
$students->execute();
$result = $students->fetchAll();
// print_r($result);

echo "<table border='1' >";
foreach($result as $student){
    echo "<tr>
    <td>".$student['name']."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
    <td>".$student['city']."</td>
    <td>".$student['year']."</td>
    <td><form method='post' >
    <button name=delete value=".$student['id'].">delete</button>
    </form></td>  
    <td><a href='update.php?id=".$student['id']."'>edit</a></td> 
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
     $id=$_POST['delete'];
     $students = $conn->prepare("delete from students where id='$id'");
    if($students->execute()){
        echo "record deleted";
    }else{
        echo "record not deleted";
    }

}
?>