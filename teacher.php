<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
    <!-- TEACHERS & OFFICERS INFO start -->


    <?php

    include('oparetions/db_connect.php');
    $page = 'teacher';

    $teacher = $_GET['tsc'];

    if ($teacher == 'teacher') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher'");
        $pagetitle = 'TEACHERS AND OFFICERS INFO';
        $pages = 'teacher';
    } elseif ($teacher == 'staff') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='staff'");
        $pagetitle = 'STAFF INFO';
        $pages = 'staff';
    }



    ?>
    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <div class="container">
        <div class="teacher-sections">
            <h3 class="border-4 mx-auto text-center py-3 d-name"><?php echo $pagetitle ?></h3>
            <div class="teacher-info py-4">
                <div class="row">

                    <?php while ($data_info = mysqli_fetch_array($data)) : ?>
                        <div class="col-md-4">
                            <div class="card card-profile shadow font">
                                <div class="card-avatar">
                                    <a href="javascript:;">
                                        <img class="img" src="upload_photo/teacher/<?php echo $data_info['photo'] ?>" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray text-capitalize"><?php echo $data_info['position'] ?></h6>
                                    <h5 class="card-title text-capitalize p-0"><?php echo $data_info['name'] ?></h5>
                                    <h6 class="card-category text-gray text-capitalize"><?php echo $data_info['qualification'] ?></h6>

                                    <h6 class="card-description text-capitalize m-1 py-1"><?php echo $data_info['address'] ?></h6>
                                    <h6 class="card-description text-capitalize m-1 py-1">+88 <?php echo $data_info['contact'] ?></h6>
                                    <h6 class="card-description m-1 py-1"><?php echo $data_info['email'] ?></h6>

                                    <a href="javascript:;" class="btn btn-primary btn-round mt-2">Follow</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>

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