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
    $course = $_GET['course'];

    if ($course == 'office') {
        $data = mysqli_query($con, "SELECT * FROM `teacher` WHERE  category='Microsoft Office' AND department='short-course'");
        $pagetitle = 'Office Application';
    } elseif ($course == 'data') {
        $data = mysqli_query($con, "SELECT * FROM `teacher` WHERE  category='Microsoft Office' AND department='short-course'");
        $pagetitle = 'Database ';
    }

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
                            <p class="font-weight-bold text-center" style="border: 1px dotted;"><?php echo $pagetitle ?>-Duration–3 Month</p>
                            <div class="list mx-auto">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <ul>
                                            <?php
                                            if ($course == 'office') {
                                                $cdata = mysqli_query($con, "SELECT * FROM course WHERE (category='Office Application' || category='Office And Database') AND (duration='3-Month' || duration='3-Month And 6-Month') ");
                                            } elseif ($course == 'data') {
                                                $cdata = mysqli_query($con, "SELECT * FROM course WHERE (category='Database' || category='Office And Database') AND (duration='3-Month' || duration='3-Month And 6-Month') ");
                                            }

                                            while ($cdata_info = mysqli_fetch_array($cdata)) :
                                            ?>
                                                <li class="py-1"><?php echo $cdata_info['name'] ?></li>
                                            <?php endwhile ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- duration-6 month -->
                            <p class="font-weight-bold text-center" style="border: 1px dotted;"><?php echo $pagetitle ?>-Duration–6 Month</p>
                            <div class="list mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <?php
                                            if ($course == 'office') {
                                                $ddata = mysqli_query($con, "SELECT * FROM course WHERE (category='Office Application' || category='Office And Database') AND (duration='6-Month' || duration='3-Month And 6-Month') ");
                                            } elseif ($course == 'data') {
                                                $ddata = mysqli_query($con, "SELECT * FROM course WHERE (category='Database' || category='Office And Database') AND (duration='6-Month' || duration='3-Month And 6-Month') ");
                                            }

                                            while ($ddata_info = mysqli_fetch_array($ddata)) :
                                            ?>
                                                <li class="py-1"><?php echo $ddata_info['name'] ?></li>
                                            <?php endwhile ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mx-auto mt-4">
                    <div class="card">
                        <div class="card-body " style="font-family: sans-serif">
                            <h4 class="text-center">Overall Objective</h4>
                            <hr>
                            <ul>
                                <?php

                                if ($course == 'office') {
                                    echo "
                                <li class='py-1'> you can create and type Letters, Reports, Memos, Proposals, Newsletters, Brochures,
                                 Graphical Presentation, Web pages, etc. </li>

                                <li class='py-1'> Excel is used for preparing Company profiles in the form of Charts and Graphs.Excel 
                                stores the accounting spreadsheets in Electronic form. Create formulas on worksheets. It’s easy and fast. </li>

                                <li class='py-1'> With Microsoft Powerpoint you can create Company Presentations and Profiles. You can also create training presentation. </li>

                                <li class='py-1'> Access is used for preparing database. You can store Data and next time open any data in short time. </li>

                                <li class='py-1'> You can install any software, windows setup, create folder/shortcut, use USB, CD disk, Pendrive,
                                 Maintenance Anti Virus, Scan Virus .</li>

                                <li class='py-1'> Search Internet, Google, Facebook, Twitter, Google+, Email send & receive, Messenger, Skype, 
                                YouTube, Download, Gmail, Search Engine Google, Search Engine Yahoo, Job Search. </li>

                                <li class='py-1'> Provide and get technical support, product information, communication or collaborate on project in 
                                almost zero time.</li>

                                ";
                                } elseif ($course == 'data') {
                                    echo "
                                <li class='py-1'>Access is used for preparing database. You can store Data and next time open any data in short time.
                                 You can maintain small companies database software, school & college data.</li>

                                <li class='py-1'>Visual Basic is an object-oriented computer programming language. Visual Basic 2008 is an evolution
                                 of the Visual Basic language that is engineered for productively building type-safe and object-oriented applications.
                                  Visual Basic enables developers to target Windows, Web, and mobile devices.</li>

                                <li class='py-1'>Creates a new database and the files used to store the data, a database snapshot, or attaches a 
                                data from the detached files of a previously created database.</li>

                                <li class='py-1'>The Oracle Database (commonly referred to as Oracle RDBMS or simply as Oracle) is an object-relational 
                                database management system produced and marketed by Oracle Corporation.</li>
                              ";
                                }


                                ?>
                            </ul>
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