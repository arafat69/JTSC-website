<?php

include('db_connect.php');

$id = $_GET['edit'];

$name = $_POST['name'];
$position = $_POST['position'];
$department = $_POST['department'];
$category = $_POST['category'];
$contact = $_POST['contact'];
$qualification= $_POST['quali'];
$address = $_POST['address'];
$email = $_POST['email'];

$photo = $_FILES['photo']['name'];
$phototmp = $_FILES['photo']['tmp_name'];




if ($photo == '') {

    mysqli_query($con, "UPDATE `teacher` SET `name`='$name',`position`='$position',`department`='$department',`category`='$category',qualification='$qualification',`contact`='$contact',`address`='$address',`email`='$email' WHERE id='$id'");

    header('location:../dashboard/teacher.php');
} else {

    $data = mysqli_query($con, "SELECT * FROM teacher WHERE id='$id' ");
    $data_info = mysqli_fetch_array($data);

    $prephoto = $data_info['photo'];

    unlink('../upload_photo/teacher/' . $prephoto);

    move_uploaded_file($phototmp, '../upload_photo/teacher/' . $photo);

    mysqli_query($con, "UPDATE `teacher` SET `name`='$name',`position`='$position',`department`='$department',`photo`='$photo',`category`='$category',qualification='$qualification',`contact`='$contact',`address`='$address',`email`='$email' WHERE id='$id'");

    header('location:../dashboard/teacher.php');
}
