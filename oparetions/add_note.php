<?php

include('db_connect.php');

 $title = $_POST['title'];
 $photo = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

 $date = date('F j, Y');

move_uploaded_file($phototmp,'../upload_photo/notices/'.$photo);

mysqli_query($con,"INSERT INTO notices (title,photo,`date`) VALUES ('$title','$photo','$date')");

header('location:../dashboard/allnote.php');