<form action="" method="post">
    <input type="text" name="search" placeholder="enter name for search">
    <br/>
    <br/>
    <button>Search</button>

</form>

<?php
include("./config.php");
if(isset($_POST['search'])){
    // echo $search= $_POST['search'];
    $search= $_POST['search'];
    // $student=$conn->prepare("select * from students where name='$search'");
    $student=$conn->prepare("select * from students where name like'%$search%'");
    $student->execute();
    $result=$student->fetchAll();
    // print_r($result);
    echo "<table border='1' >";
    foreach($result as $student){
    
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
}
?>