<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>

    <?php

    $page = 'academic';
    $pages = 'student';

    include('oparetions/db_connect.php');

    $student = $_GET['st'];

    if (isset($_POST['search'])) {

        $searchkey = $_POST['search'];

        if ($student == 'dipc') {
            $pagetitle = 'diploma computer';
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='diploma-in-engineering' AND student_dipartment='computer'");
        } elseif ($student == 'dipe') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='diploma-in-engineering' AND student_dipartment='electrical'");
            $pagetitle = 'diploma electrical';
        } elseif ($student == 'intc') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='intermediate' AND student_dipartment='computer'");
            $pagetitle = 'Intermediate computer';
        } elseif ($student == 'inte') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='intermediate' AND student_dipartment='electrical'");
            $pagetitle = 'Intermediate electrical';
        } elseif ($student == 'vocc') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='vocational' AND student_dipartment='computer'");
            $pagetitle = 'vocational computer';
        } elseif ($student == 'voce') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='vocational' AND student_dipartment='electrical'");
            $pagetitle = 'vocational electrical';
        } elseif ($student == 'vocm') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='vocational' AND student_dipartment='mechanical'");
            $pagetitle = 'vocational mechanical';
        } elseif ($student == 'vocf') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='vocational' AND student_dipartment='farm machinary'");
            $pagetitle = 'vocational farm machinary';
        } elseif ($student == 'voca') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE (student_name LIKE '%$searchkey%') AND student_section='vocational' AND student_dipartment='automobile'");
            $pagetitle = 'vocational automobile';
        }
    } else {
        $searchkey = '';

        if ($student == 'dipc') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='diploma-in-engineering' AND student_dipartment='computer'");
            $pagetitle = 'diploma computer';
        } elseif ($student == 'dipe') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='diploma-in-engineering' AND student_dipartment='electrical'");
            $pagetitle = 'diploma electrical';
        } elseif ($student == 'intc') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='intermediate' AND student_dipartment='computer'");
            $pagetitle = 'Intermediate computer';
        } elseif ($student == 'inte') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='intermediate' AND student_dipartment='electrical'");
            $pagetitle = 'Intermediate electrical';
        } elseif ($student == 'vocc') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='vocational' AND student_dipartment='computer'");
            $pagetitle = 'vocational computer';
        } elseif ($student == 'voce') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='vocational' AND student_dipartment='electrical'");
            $pagetitle = 'vocational electrical';
        } elseif ($student == 'vocm') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='vocational' AND student_dipartment='mechanical'");
            $pagetitle = 'vocational mechanical';
        } elseif ($student == 'vocf') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='vocational' AND student_dipartment='farm machinary'");
            $pagetitle = 'vocational farm machinary';
        } elseif ($student == 'voca') {
            $data = mysqli_query($con, "SELECT * FROM students WHERE student_section='vocational' AND student_dipartment='automobile'");
            $pagetitle = 'vocational automobile';
        }
    }
    ?>

    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <!-- TEACHERS & OFFICERS INFO start -->
    <div class="container">

        <div class="teacher-sections">
            <h3 class="border-4 mx-auto text-center py-3 d-name text-uppercase"><?php echo $pagetitle ?></h3>
            <div class="teacher-info py-4">

                <div class="row">
                    <div class="col-sm-8 col-10 mx-auto">
                        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search By Name" name="search" value="<?php echo $searchkey ?>">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-capitalize ">
                                <th>No</th>
                                <th>Photo</th>
                                <th> Name</th>
                                <th>Roll</th>
                                <th>Shift</th>
                                <th>Session</th>
                                <th>Semester</th>
                                <th>Department</th>
                                <th>Section</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            while ($data_info = mysqli_fetch_array($data)) : ?>
                                <tr class="text-capitalize">
                                    <td class="p-2"><?php echo $i ?></td>
                                    <td><img src="upload_photo/students/<?php echo $data_info['student_photo'] ?>" width="50" height="50"></td>
                                    <td><?php echo $data_info['student_name'] ?></td>
                                    <td><?php echo $data_info['student_roll'] ?></td>
                                    <td><?php echo $data_info['student_shift'] ?></td>
                                    <td><?php echo $data_info['student_session'] ?></td>
                                    <td><?php echo $data_info['student_semester'] ?></td>
                                    <td><?php echo $data_info['student_dipartment'] ?></td>
                                    <td><?php echo $data_info['student_section'] ?></td>
                                    <td>
                                        <a href="view_student.php?stuid=<?php echo $data_info['id'] ?>">view</a>
                                    </td>
                                </tr>
                            <?php $i++; endwhile ?>
                        </tbody>
                    </table>
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