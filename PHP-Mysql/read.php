<?php
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students=$getStudents->fetchAll();
// echo "<pre>";
// print_r($students);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Name</th>
        <th>Course</th>
        <th>Batch</th>
        <th>City</th>
        <th>Year</th>
    </tr>";
foreach($students as $student){
    
     echo "<tr> 
     <td> ".$student['name']." </td> 
     <td> ".$student['course']."</td>
     <td> ".$student['batch']."</td>
     <td> ".$student['city']."</td>
     <td> ".$student['year']."</td>
     </tr>";
      
     
    // echo "<br/>";
}
echo "</table>";
?>