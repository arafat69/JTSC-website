<?php
include('db_connect.php');

$name = $_POST['name'];
$message = $_POST['message'];
$photo = $_FILES['photo']['name'];
$phototmp = $_FILES['photo']['tmp_name'];

if ($photo == '') {
    mysqli_query($con, "UPDATE principal_message SET `name`='$name',`message`='$message'");
    header('location:../dashboard/principal-message.php');
} else {
    $data = mysqli_query($con, "SELECT * FROM principal_message");
    $data_info = mysqli_fetch_assoc($data);
    $pphoto = $data_info['photo'];
    unlink('../upload_photo/pms' . $pphoto);

    mysqli_query($con, "UPDATE principal_message SET `name`='$name',`message`='$message',`photo`='$photo' ");
    move_uploaded_file($phototmp, '../upload_photo/pms' . $photo);
    header('location:../dashboard/principal-message.php');
}
