<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
    <!-- TEACHERS & OFFICERS INFO start -->


    <?php

    include('oparetions/db_connect.php');
    $page = 'teacher';

    $student_id = $_GET['stuid'];


    ?>
    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <div class="container">
        <div class="teacher-sections">
            <h3 class="border-4 mx-auto text-center py-3 d-name">Student View</h3>
            <div class="teacher-info py-4">


                <?php
                $data = mysqli_query($con, "SELECT * FROM students WHERE id=$student_id");

                $data_info = mysqli_fetch_array($data)

                ?>
                <div class="row">
                    <div class="col-sm-9 mx-auto">
                        <div class="card shadow font">
                            <div class="card-body">
                                <p class="text-uppercase text-center p-0 m-0 text-danger">Today</p>
                                <p class="text-center m-0"><?php echo Date(' j F, Y') ?></p>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="card-body">
                                        <div class="image">
                                            <a href="javascript:;">
                                                <img class="img" src="upload_photo/students/<?php echo $data_info['student_photo'] ?>" width="100%" />
                                            </a>
                                            <h4 class="text-uppercase text-center"><?php echo $data_info['student_name'] ?></h4>
                                            <h5 class="text-center text-capitalize"><?php echo $data_info['student_dipartment'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    span{
                                        color: red;
                                        margin-left: 6px;
                                    }
                                </style>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h6 class="card-category  text-capitalize">father's name: <span><?php echo $data_info['student_father'] ?></span></h6>
                                        <h6 class="card-title text-capitalize p-0">mother's name: <span> <?php echo $data_info['student_mother'] ?></span></h6>
                                        <h6 class="card-category text-capitalize">class / semester: <span> <?php echo $data_info['student_semester'] ?></span></h6>
                                        <h6 class="card-category text-capitalize">shift: <span> <?php echo $data_info['student_shift'] ?></span></h6>
                                        <h6 class=" text-capitalize m-1 py-1"> roll Number: <span><?php echo $data_info['student_roll'] ?></span></h6>
                                        <h6 class=" text-capitalize m-1 py-1">registration Number: <span><?php echo $data_info['student_reg'] ?></span></h6>
                                        <h6 class=" m-1 py-1 text-capitalize">department: <span><?php echo $data_info['student_dipartment'] ?></span></h6>
                                        <h6 class=" m-1 py-1 text-capitalize">section: <span><?php echo $data_info['student_section'] ?></span></h6>
                                        <h6 class=" m-1 py-1 text-capitalize">date of birth: <span><?php echo $data_info['student_birth'] ?></span></h6>
                                        <h6 class=" m-1 py-1 text-capitalize">phone number: <span>+88 <?php echo $data_info['student_contact'] ?></span></h6>
                                        <h6 class=" m-1 py-1">E-Mail: <span><?php echo $data_info['student_email'] ?></span></h6>
                                        <h6 class=" m-1 py-1 text-capitalize">address: <span><?php echo $data_info['student_address'] ?></span></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- footer-section-start -->
    <?php include('inc/footer.php') ?>
    <!-- footer-section-end -->






    <?php include('inc/script.php') ?>
</body>

</html>