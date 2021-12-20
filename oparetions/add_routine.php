<?php

include('db_connect.php');

 $title = $_POST['title'];
 $category = $_POST['category'];
 $photo = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

 $date = date('F j, Y');

move_uploaded_file($phototmp,'../upload_photo/routine/'.$photo);

mysqli_query($con,"INSERT INTO routine (title,category,photo,`date`) VALUES ('$title','$category','$photo','$date')");

header('location:../dashboard/routine.php');