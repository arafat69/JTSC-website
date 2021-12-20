<?php

include('db_connect.php');

 $title = $_POST['title'];
 $category = $_POST['category'];
 $photo = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

 $date = date('F j, Y');

 $id = $_GET['id'];

 if ($photo=='') {
    mysqli_query($con,"UPDATE `routine` SET title='$title',category='$category',`date`='$date' WHERE id='$id' ");
    header('location:../dashboard/routine.php');
 }
 else{
    $data = mysqli_query($con, "SELECT * FROM routine WHERE id='$id'");
    $data_info = mysqli_fetch_array($data);

    $prephoto=$data_info['photo'];

    unlink('../upload_photo/routine/'.$prephoto);

    move_uploaded_file($phototmp,'../upload_photo/routine/'.$photo);

    mysqli_query($con,"UPDATE `routine` SET title='$title',category='$category',photo='$photo',`date`='$date' WHERE id='$id' ");
    header('location:../dashboard/routine.php');
 }





