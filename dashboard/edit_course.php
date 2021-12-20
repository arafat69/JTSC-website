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
    <?php $page = 'short';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">course list Edit</h3>
                </div>


                <?php

                $id = $_GET['edit'];
                include('../oparetions/db_connect.php');

                $data = mysqli_query($con, "SELECT * FROM course WHERE id = '$id' ");

                $data_info = mysqli_fetch_assoc($data);

                ?>


                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">editcourse list</h4>
                            </div>
                            <div class="card-body">
                                <form action="../oparetions/edit_course.php?id=<?php echo $id?>" method="POST">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Course Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $data_info['name'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Category</label>
                                                <select name="category" class="form-control px-2">
                                                    <option value="<?php echo $data_info['category'] ?>"><?php echo $data_info['category'] ?></option>
                                                    <option value="Office Application">Office Application</option>
                                                    <option value="Database">Database</option>
                                                    <option value="Office And Database">Office And Database</option>
                                                    <option value="Driving">Driving</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Course Duration</label>
                                                <select name="duration" class="form-control px-2">
                                                    <option value="<?php echo $data_info['duration'] ?>"><?php echo $data_info['duration'] ?></option>
                                                    <option value="3-Month">3-Month</option>
                                                    <option value="6-Month">6-Month</option>
                                                    <option value="3-Month And 6-Month">3-Month And 6-Month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">update</button>
                                    <div class="clearfix"></div>
                                </form>
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