<?php
//connect to database
$conn = mysqli_connect('localhost','ahmedhelmy','','files');
$sql = "SELECT * FROM files";
$result = mysqli_query($conn,$sql);
$files = mysqli_fetch_all($result ,MYSQLI_ASSOC);
//upload files
if (isset($_POST['save'])) {
    $filename = $_FILES['myfile']['name'];
    $destination = $filename;
    $extension = pathinfo($filename , PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension , ['zip' , 'pdf' , 'docx' , 'jpg'])) {
       echo 'you file extention must be .zip .pdf .docx .jpg' ;
    } elseif ($_FILES['myfile']['size']> 1000000) {
        echo 'file is too large!';
    }
    else {
        if (move_uploaded_file($file , $destination)) {
            $sql = "INSERT INTO files (name , size, downloads) VALUES ('$filename', '$size', 0)";
            if (mysqli_query($conn , $sql)) {
                echo 'file upload success';
            }else {
                echo 'failed upload files';
            }
        }
    }
    
}














?>