<?php
session_start();

if (!isset($_SESSION['first_name'])) {
    header('location:index.php');
}


include('../oparetions/db_connect.php');

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
                        all students
                    </h3>
                </div>
                <div class="all-students">
                    <a href="add_student.php" class="btn btn-primary float-right"><i class="material-icons">add</i> Add Student</a>
                    <h3>All Students</h3>
                </div>


                <!-- computer-section-start -->
                <div class="department-name mt-5">
                    <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">Computer</span></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead class="">
                                <tr class=" bg-success text-light">
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Shift</th>
                                    <th>Session</th>
                                    <th>Semester</th>
                                    <th>Department</th>
                                    <th>Section</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $cdata = mysqli_query($con, "SELECT * FROM students WHERE student_dipartment='computer'");
                                while ($com_data_info = mysqli_fetch_array($cdata)) :

                                ?>
                                    <tr>
                                        <td><?php echo $com_data_info['date'] ?></td>
                                        <td><?php echo $com_data_info['student_name'] ?></td>
                                        <td><?php echo $com_data_info['student_roll'] ?></td>
                                        <td><?php echo $com_data_info['student_shift'] ?></td>
                                        <td><?php echo $com_data_info['student_session'] ?></td>
                                        <td><?php echo $com_data_info['student_semester'] ?></td>
                                        <td><?php echo $com_data_info['student_dipartment'] ?></td>
                                        <td><?php echo $com_data_info['student_section'] ?></td>
                                        <td>
                                            <img src="../upload_photo/students/<?php echo $com_data_info['student_photo'] ?>" width="50" height="50">
                                        </td>
                                        <td>
                                            <a href="edit_student.php?edit=<?php echo $com_data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                            <a href="view_student.php?view=<?php echo $com_data_info['id'] ?>" class="btn btn-warning btn-sm">View</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- computer-section-end -->

                <!-- electrical-section-start -->
                <div class="department-name mt-5">
                    <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">Electrical</span></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead>
                                <tr class=" bg-success text-light sticky-top">
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Shift</th>
                                    <th>Session</th>
                                    <th>Semester</th>
                                    <th>Department</th>
                                    <th>Section</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $edata = mysqli_query($con, "SELECT * FROM students WHERE student_dipartment='electrical'");
                                while ($elc_data_info = mysqli_fetch_array($edata)) :

                                ?>
                                    <tr>
                                        <td><?php echo $elc_data_info['date'] ?></td>
                                        <td><?php echo $elc_data_info['student_name'] ?></td>
                                        <td><?php echo $elc_data_info['student_roll'] ?></td>
                                        <td><?php echo $elc_data_info['student_shift'] ?></td>
                                        <td><?php echo $elc_data_info['student_session'] ?></td>
                                        <td><?php echo $elc_data_info['student_semester'] ?></td>
                                        <td><?php echo $elc_data_info['student_dipartment'] ?></td>
                                        <td><?php echo $elc_data_info['student_section'] ?></td>
                                        <td>
                                            <img src="../upload_photo/students/<?php echo $elc_data_info['student_photo'] ?>" width="50" height="50">
                                        </td>
                                        <td>
                                            <a href="edit_student.php?edit=<?php echo $elc_data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                            <a href="#" class="btn btn-warning btn-sm">View</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>

                            </tbody>
                        </table>
                    </div>
                </div><!-- electrical-section-end -->

                <!-- MECHANICAL-section-end -->
                <div class="department-name mt-5">
                    <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">Mechanical </span></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead>
                                <tr class=" bg-success text-light sticky-top">
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Shift</th>
                                    <th>Session</th>
                                    <th>Class</th>
                                    <th>Department</th>
                                    <th>Section</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $mdata = mysqli_query($con, "SELECT * FROM students WHERE student_dipartment='mechanical'");
                                while ($mac_data_info = mysqli_fetch_array($mdata)) :

                                ?>
                                    <tr>
                                        <td><?php echo $mac_data_info['date'] ?></td>
                                        <td><?php echo $mac_data_info['student_name'] ?></td>
                                        <td><?php echo $mac_data_info['student_roll'] ?></td>
                                        <td><?php echo $mac_data_info['student_shift'] ?></td>
                                        <td><?php echo $mac_data_info['student_session'] ?></td>
                                        <td><?php echo $mac_data_info['student_semester'] ?></td>
                                        <td><?php echo $mac_data_info['student_dipartment'] ?></td>
                                        <td><?php echo $mac_data_info['student_section'] ?></td>
                                        <td>
                                            <img src="../upload_photo/students/<?php echo $mac_data_info['student_photo'] ?>" width="50" height="50">
                                        </td>
                                        <td>
                                            <a href="edit_student.php?edit=<?php echo $mac_data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                            <a href="#" class="btn btn-warning btn-sm">View</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>

                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="department-name mt-5">
                    <h3 class="pb-1 " style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">Farm Machinery</span></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead>
                                <tr class=" bg-success text-light sticky-top">
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Shift</th>
                                    <th>Session</th>
                                    <th>Class</th>
                                    <th>Department</th>
                                    <th>Section</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $fdata = mysqli_query($con, "SELECT * FROM students WHERE student_dipartment='farm machinery'");
                                while ($farm_data_info = mysqli_fetch_array($fdata)) :

                                ?>
                                    <tr>
                                        <td><?php echo $farm_data_info['date'] ?></td>
                                        <td><?php echo $farm_data_info['student_name'] ?></td>
                                        <td><?php echo $farm_data_info['student_roll'] ?></td>
                                        <td><?php echo $farm_data_info['student_shift'] ?></td>
                                        <td><?php echo $farm_data_info['student_session'] ?></td>
                                        <td><?php echo $farm_data_info['student_semester'] ?></td>
                                        <td><?php echo $farm_data_info['student_dipartment'] ?></td>
                                        <td><?php echo $farm_data_info['student_section'] ?></td>
                                        <td>
                                            <img src="../upload_photo/students/<?php echo $farm_data_info['student_photo'] ?>" width="50" height="50">
                                        </td>
                                        <td>
                                            <a href="edit_student.php?edit=<?php echo $farm_data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                            <a href="#" class="btn btn-warning btn-sm">View</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>


                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="department-name mt-5">
                    <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">Automobile</span></h3>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead class="sticky-top">
                                <tr class=" bg-success text-light">
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Shift</th>
                                    <th>Session</th>
                                    <th>Class</th>
                                    <th>Department</th>
                                    <th>Section</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $adata = mysqli_query($con, "SELECT * FROM students WHERE student_dipartment='automobile'");
                                while ($auto_data_info = mysqli_fetch_array($adata)) :

                                ?>
                                    <tr>
                                        <td><?php echo $auto_data_info['date'] ?></td>
                                        <td><?php echo $auto_data_info['student_name'] ?></td>
                                        <td><?php echo $auto_data_info['student_roll'] ?></td>
                                        <td><?php echo $auto_data_info['student_shift'] ?></td>
                                        <td><?php echo $auto_data_info['student_session'] ?></td>
                                        <td><?php echo $auto_data_info['student_semester'] ?></td>
                                        <td><?php echo $auto_data_info['student_dipartment'] ?></td>
                                        <td><?php echo $auto_data_info['student_section'] ?></td>
                                        <td>
                                            <img src="../upload_photo/students/<?php echo $auto_data_info['student_photo'] ?>" width="50" height="50">
                                        </td>
                                        <td>
                                            <a href="edit_student.php?edit=<?php echo $auto_data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                            <a href="#" class="btn btn-warning btn-sm">View</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>

                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>