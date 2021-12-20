<?php

include('db_connect.php');

 $title = $_POST['title'];
 $department = $_POST['department'];
 $semester = $_POST['semester'];

 $photo = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

 $date = date('F j, Y');

move_uploaded_file($phototmp,'../upload_photo/results/'.$photo);

mysqli_query($con,"INSERT INTO results (title,department,semester,photo,`date`) VALUES ('$title','$department','$semester','$photo','$date')");

header('location:../dashboard/result.php');