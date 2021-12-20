
<?php 


include('db_connect.php');

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
$father = $_POST['father'];
$mother = $_POST['mother'];
$birth = $_POST['birth'];
$date = date('F j, Y');

$photo = $_FILES['photo']['name'];
        $phototmp = $_FILES['photo']['tmp_name'];

move_uploaded_file($phototmp,'../upload_photo/students/'.$photo);


$add=mysqli_query($con,"INSERT INTO students (
student_name, student_roll, student_reg, student_session, student_shift, student_semester, student_dipartment, student_section, student_photo, student_contact, student_address, student_email, `date`,student_father,student_mother,student_birth)
 VALUES ('$name','$roll','$reg','$session','$shift','$semester','$department','$section','$photo','$contact','$address','$email','$date','$father','$mother','$birth')");

if ($add) {
    header('location:../dashboard/student.php');
}else{
    echo 'student add faild';
}