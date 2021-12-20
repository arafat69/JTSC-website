<?php
session_start();

include('db_connect.php');


$datas1 = mysqli_query($con, "SELECT * FROM slides WHERE id = 1");
$datas1_all = mysqli_fetch_array($datas1);

$datas2 = mysqli_query($con, "SELECT * FROM slides WHERE id = 2");
$datas2_all = mysqli_fetch_array($datas2);

$datas3 = mysqli_query($con, "SELECT * FROM slides WHERE id = 3");
$datas3_all = mysqli_fetch_array($datas3);

if ($_GET['slide'] == 1) {

    $title = $_POST['f-title'];

    $description = $_POST['f-description'];

    //    delete previes photo
    $prephoto = $datas1_all['picture'];
    unlink('../upload_photo/s1' . $prephoto);

    $photo = $_FILES['f-picture']['name'];
    $ptmp = $_FILES['f-picture']['tmp_name'];

    move_uploaded_file($ptmp, '../upload_photo/s1' . $photo);

    echo $photo;

    mysqli_query($con, "UPDATE slides SET picture ='$photo',title ='$title',`description`='$description' WHERE id=1 ");
    header('location:../dashboard/slide.php');
} elseif ($_GET['slide'] == 2) {

    $title = $_POST['s-title'];

    $description = $_POST['s-description'];

    $photo = $_FILES['s-picture']['name'];
    $ptmp = $_FILES['s-picture']['tmp_name'];
    //    delete previes photo
    $prephoto = $datas2_all['picture'];
    unlink('../upload_photo/s2' . $prephoto);

    move_uploaded_file($ptmp, '../upload_photo/s2' . $photo);


    mysqli_query($con, "UPDATE slides SET picture ='$photo',title ='$title',`description`='$description' WHERE id=2 ");
    header('location:../dashboard/slide.php');
} elseif ($_GET['slide'] == 3) {

    $title = $_POST['th-title'];

    $description = $_POST['th-description'];

    $photo = $_FILES['th-picture']['name'];
    $ptmp = $_FILES['th-picture']['tmp_name'];
    //    delete previes photo
    $prephoto = $datas3_all['picture'];
    unlink('../upload_photo/s3' . $prephoto);

    move_uploaded_file($ptmp, '../upload_photo/s3' . $photo);


    mysqli_query($con, "UPDATE slides SET picture ='$photo',title ='$title',`description`='$description' WHERE id=3 ");
    header('location:../dashboard/slide.php');
}
