<?php

include('db_connect.php');

 $title = $_POST['title'];
 $photo = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

 $date = date('F j, Y');

 $id = $_GET['id'];

 if ($photo=='') {
    mysqli_query($con,"UPDATE `notices` SET title='$title',`date`='$date' WHERE id='$id' ");
    header('location:../dashboard/allnote.php');
 }
 else{
    $data = mysqli_query($con, "SELECT * FROM notices WHERE id='$id'");
    $data_info = mysqli_fetch_array($data);

    $prephoto=$data_info['photo'];

    unlink('../upload_photo/notices/'.$prephoto);

    move_uploaded_file($phototmp,'../upload_photo/notices/'.$photo);

    mysqli_query($con,"UPDATE `notices` SET title='$title',photo='$photo',`date`='$date' WHERE id='$id' ");
    header('location:../dashboard/allnote.php');
 }





