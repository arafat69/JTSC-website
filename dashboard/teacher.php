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
    <?php $page = 'teacher';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->
                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        all Teachers
                    </h3>
                </div>
                <div class="all-students pt-5">
                    <a href="add_teacher.php" class="btn btn-primary float-right"><i class="material-icons">add</i> Add Teacher</a>
                    <h3>All Teachers</h3>
                </div>
                <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">teachers</span></h3>

                <style>
                    .edit {
                        display: none;
                    }

                    .card-profile:hover .edit {
                        display: block;
                        transition-delay: 1s;
                    }
                </style>
                <div class="teachers mt-5">
                    <div class="row">

                        <?php

                        $data = mysqli_query($con, "SELECT * FROM teacher");
                        while ($data_info = mysqli_fetch_array($data)) :
                        ?>
                            <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="javascript:;">
                                            <img class="img" src="../upload_photo/teacher/<?php echo $data_info['photo'] ?>" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-category text-gray"><?php echo $data_info['position'] ?></h6>
                                        <h4 class="card-title text-capitalize p-1"><?php echo $data_info['name'] ?></h4>
                                        <h5 class="card-category text-gray text-capitalize m-1"><?php echo $data_info['qualification'] ?></h5>

                                        <p class="card-description text-capitalize m-1"><?php echo $data_info['address'] ?></p>
                                        <p class="card-description text-capitalize m-1">+88 <?php echo $data_info['contact'] ?></p>
                                        <p class="card-description m-1"><?php echo $data_info['email'] ?></p>

                                        <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                                        <a href="../oparetions/delete_teacher.php?del=<?php echo $data_info['id'] ?>" class="btn edit btn-danger btn-round pull-right btn-sm mt-3" onclick="return confirm('Are You sure?')"><i class="material-icons">delete_forever</i></a>
                                        <a href="edit_teacher.php?edit=<?php echo $data_info['id'] ?>" class="btn edit btn-info btn-round pull-right btn-sm mt-3"><i class="material-icons">edit</i></a>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>


                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>