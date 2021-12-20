<?php

include('db_connect.php');

$id = $_GET['update'];

$name = $_POST['name'];
$roll = $_POST['roll'];
$reg = $_POST['reg'];
$shift = $_POST['shift'];
$semester = $_POST['semester'];
$department = $_POST['department'];
$section = $_POST['section'];
$session = $_POST['session'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$birth = $_POST['birth'];
$date = date('F j, Y');

$photo = $_FILES['photo']['name'];
        $phototmp = $_FILES['photo']['tmp_name'];



if($photo == ''){

    mysqli_query($con,"UPDATE `students` SET `student_name`='$name',`student_roll`='$roll',`student_reg`='$reg',`student_session`='$session',
    `student_shift`='$shift',`student_semester`='$semester',`student_dipartment`='$department',`student_section`='$section',
    `student_contact`='$contact',`student_address`='$address',`student_email`='$email',`date`='$date',student_father='$father',student_mother='$mother',student_birth='$birth' WHERE id=$id");

    header('location:../dashboard/student.php');
}else{


    $data=mysqli_query($con,"SELECT * FROM students WHERE id = $id");
    $data_p =mysqli_fetch_array($data);
    $pre_photo=$data_p['student_photo'];
    unlink('../upload_photo/students/'.$pre_photo);

    move_uploaded_file($phototmp,'../upload_photo/students/'.$photo);
    
    mysqli_query($con,"UPDATE `students` SET `student_name`='$name',`student_roll`='$roll',`student_reg`='$reg',`student_session`='$session',
    `student_shift`='$shift',`student_semester`='$semester',`student_dipartment`='$department',`student_section`='$section',
    `student_contact`='$contact',`student_address`='$address',`student_photo`='$photo',`student_email`='$email',`date`='$date',student_father='$father',student_mother='$mother',student_birth='$birth' WHERE id=$id");

    header('location:../dashboard/student.php');
}




?>