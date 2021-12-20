<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('location:index.php');
}
?>
<!-- css link add -->
<?php include('inc/css.php') ?>
<div class="wrapper ">
    <!-- sidebar link add -->
    <?php $page='student'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                         View Student
                    </h3>
                </div>



                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">View Student</h4>
                                <p class="card-category">Complete Student Informations</p>
                            </div>

                            <?php

                            include('../oparetions/db_connect.php');

                            $id = $_GET['view'];

                            $data = mysqli_query($con, "SELECT * FROM students WHERE id = $id");

                            $data_info = mysqli_fetch_array($data);

                            ?>
                            <div class="card-body">
                                  <div class="form-group">
                                  <label class="bmd-label-floating">Student Photo</label>
                                  <div class="img p-1">
                                      <img class="rounded" src="../upload_photo/students/<?php echo $data_info['student_photo'] ?>" width="100%">
                                  </div>
                                  </div>


                                <div class="form-group">
                                    <label class="bmd-label-floating">Full Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $data_info['student_name'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Roll Number</label>
                                    <input type="text" class="form-control" name="roll" value="<?php echo $data_info['student_roll'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Registration Number</label>
                                    <input type="text" class="form-control" name="reg" value="<?php echo $data_info['student_reg'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating"> Shift</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_shift'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Semester/Class</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_semester'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Department</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_dipartment'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Section</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_section'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Father Name</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_father'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Mother Name</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_mother'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Date Of Birth</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_birth'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Session</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_session'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Contact Number</label>
                                    <input type="number" class="form-control" value="<?php echo $data_info['student_contact'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Adress</label>
                                    <input type="text" class="form-control" value="<?php echo $data_info['student_address'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="email" class="form-control" value="<?php echo $data_info['student_email'] ?>" disabled>
                                </div>

                                <a href="../oparetions/delete_student.php?id=<?php echo $id?>" class="btn btn-danger pull-right btn-sm" onclick="return confirm('Are You Sure?')">delete</a>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>