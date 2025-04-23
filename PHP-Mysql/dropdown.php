<?php
include("./config.php");
$getStudents=$conn->prepare("select id,name from students");
$getStudents->execute();
$studentData=$getStudents->fetchAll();

// print_r($studentData);

echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $student){
    echo "<option value=".$student['id'].">".$student['name']."</option>";
}
echo "</select>";
?>