<?php
// $file = "Files/test";
// $myFile = fopen($file,"r") or ("unable to read file");
// echo fread($myFile,filesize($file));
// fclose ($myFile);

if(isset($_FILES['file'])){
    // print_r($_FILES['file']);
    $file = $_FILES['file']['tmp_name'];
    $myFile = fopen($file,"r") or ("unable to read file");
    echo fread($myFile,filesize($file));
    fclose ($myFile);
    
}
?>

<!-- agr file local system k uper ho to    -->

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br/>
    <br/>
    <button>Read file</button>

</form>