<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short-course | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>

    <?php

    $page = 'program';
    $pages = 'short';

    include('oparetions/db_connect.php');

        $data = mysqli_query($con, "SELECT * FROM `teacher` WHERE  category='Driving' AND department='short-course'");
        $pagetitle = 'Driving Course';
    ?>

    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <div class="container">
        <div class="teacher-sections">
            <h3 class="border-4 mx-auto text-center py-3 d-name text-uppercase"><?php echo $pagetitle ?></h3>
            
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
                                    <h6 class="card-category text-gray text-capitalize"><?php echo $data_info['department'] ?></h6>

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

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <h3 class="border-4 mx-auto text-center m-1 d-name w-100 text-uppercase"><?php echo 'course list' ?></h3>
                        <div class="card-body">
                            <!-- duration-3 month -->
                            <p class="font-weight-bold text-center" style="border: 1px dotted;">ড্রাইভিং কাম অটো মেকানিক্স কোর্স: সময়কাল -০৬ মাস।</p>
                            <div class="list mx-auto">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <ol>
                                            <p>শিক্ষার্থীদের উপর পর্যাপ্ত তাত্ত্বিক জ্ঞান এবং অনুশীলন দেওয়া হয়:</p>
                                            <?php
                                                $cdata = mysqli_query($con, "SELECT * FROM course WHERE (category='Driving') AND (duration='6-Month' || duration='3-Month And 6-Month') ");
                                            while ($cdata_info = mysqli_fetch_array($cdata)) :
                                            ?>
                                                <li class="py-1"><?php echo $cdata_info['name'] ?></li>
                                            <?php endwhile ?>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- duration-6 month -->
                            <p class="font-weight-bold text-center" style="border: 1px dotted;">ড্রাইভিং কাম অটো মেকানিক্স কোর্স: সময়কাল -০৪ মাস।</p>
                            <div class="list mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                    <ol>
                                    <p>শিক্ষার্থীদের উপর পর্যাপ্ত তাত্ত্বিক জ্ঞান এবং অনুশীলন দেওয়া হয়:</p>
                                            <?php
                                                $cdata = mysqli_query($con, "SELECT * FROM course WHERE (category='Driving') AND (duration='3-Month' || duration='3-Month And 6-Month') ");
                                            while ($cdata_info = mysqli_fetch_array($cdata)) :
                                            ?>
                                                <li class="py-1"><?php echo $cdata_info['name'] ?></li>
                                            <?php endwhile ?>
                                        </ol>
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