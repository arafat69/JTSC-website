<?php

include('db_connect.php');

 $title = $_POST['title'];
 $department = $_POST['department'];
 $semester = $_POST['semester'];
 $photo = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

 $date = date('F j, Y');

 $id = $_GET['id'];

 if ($photo=='') {
    mysqli_query($con,"UPDATE `results` SET title='$title',department='$department',semester='$semester',`date`='$date' WHERE id='$id' ");
    header('location:../dashboard/result.php');
 }
 else{
    $data = mysqli_query($con, "SELECT * FROM results WHERE id='$id'");
    $data_info = mysqli_fetch_array($data);

    $prephoto=$data_info['photo'];

    unlink('../upload_photo/results/'.$prephoto);

    move_uploaded_file($phototmp,'../upload_photo/results/'.$photo);

    mysqli_query($con,"UPDATE `results` SET title='$title',department='$department',semester='$semester',photo='$photo',`date`='$date' WHERE id='$id' ");
    header('location:../dashboard/result.php');
 }





