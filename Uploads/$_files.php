<?php
// print_r($_FILES["fileUpload"]);

if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    // echo $path;
    $upload_path = "./files_Upload".$path;
    // echo $upload_path;
    
    // || die('failed to upload');
    if(move_uploaded_file ($_FILES['fileUpload']['tmp_name'],$upload_path)){
        echo "file upload";
    }else{
        echo "failed to upload";
    }

}
// else{
//     die('no file upload');
// }
 
?>