<?php 

include('db_connect.php');

$id = $_GET['del'];



    $data = mysqli_query($con, "SELECT * FROM teacher WHERE id='$id' ");
    $data_info = mysqli_fetch_array($data);

    $prephoto = $data_info['photo'];

    unlink('../upload_photo/teacher/' . $prephoto);
   
    mysqli_query($con,"DELETE FROM teacher WHERE id='$id' ");

    header('location:../dashboard/teacher.php');

