<?php 

include('db_connect.php');

$logo = $_GET['logo'];

$photo =$_FILES['photo']['name'];
  $tmp = $_FILES['photo']['tmp_name'];

if($logo=='banner'){
    $data = mysqli_query($con, "SELECT * FROM banner WHERE logo ='banner'");
    $data_info = mysqli_fetch_array($data);

    $prephoto = $data_info['photo'];

    unlink('../upload_photo/banner/'.$prephoto);

    move_uploaded_file($tmp,'../upload_photo/banner/'.$photo);

    mysqli_query($con,"UPDATE banner SET photo='$photo' WHERE logo='banner' ");

    header('location:../dashboard/banner.php');
}
elseif($logo=='tlogo'){
    $data = mysqli_query($con, "SELECT * FROM banner WHERE logo ='tlogo'");
    $data_info = mysqli_fetch_array($data);

    $prephoto = $data_info['photo'];

    unlink('../upload_photo/banner/'.$prephoto);

    move_uploaded_file($tmp,'../upload_photo/banner/'.$photo);

    mysqli_query($con,"UPDATE banner SET photo='$photo' WHERE logo='tlogo' ");

    header('location:../dashboard/banner.php');
}
elseif($logo=='flogo'){
    $data = mysqli_query($con, "SELECT * FROM banner WHERE logo ='flogo'");
    $data_info = mysqli_fetch_array($data);

    $prephoto = $data_info['photo'];

    unlink('../upload_photo/banner/'.$prephoto);

    move_uploaded_file($tmp,'../upload_photo/banner/'.$photo);

    mysqli_query($con,"UPDATE banner SET photo='$photo' WHERE logo='flogo' ");

    header('location:../dashboard/banner.php');
}



?>