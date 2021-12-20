<?php

include('db_connect.php');

$title = $_POST['title'];

$date = date('F j, Y');

if ($title != '') {
    
    mysqli_query($con,"UPDATE top_note SET title='$title',`date`='$date' WHERE id = 1");
    header('location:../dashboard/top_note.php');
}else{
    header('location:../dashboard/top_note.php');
}


?>

