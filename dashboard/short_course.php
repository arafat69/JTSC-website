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
                    <h3 class="text-uppercase text-center">short course</h3>
                </div>





                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Add course list</h4>
                                <p class="card-category">Complete list Informations</p>
                            </div>
                            <div class="card-body">
                                <form action="../oparetions/add_course.php" method="POST">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Course Name</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Category</label>
                                                <select name="category" class="form-control px-2">
                                                    <option>select category</option>
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
                                                    <option value="">select duration</option>
                                                    <option value="3-Month">3-Month</option>
                                                    <option value="6-Month">6-Month</option>
                                                    <option value="3-Month And 6-Month">3-Month And 6-Month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">submit</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">Add course list</h4>
                            </div>
                            <div class="card-body">
                                <!-- duration-3 month -->
                                <p class="font-weight-bold text-center" style="border: 1px dotted;">Office And Database Application</p>
                                <div class="list mx-auto">
                                    <style> .edit {display: none;}ul li:hover .edit {display: inline-block;} </style>
                                    <ul>
                                        <?php

                                        include('../oparetions/db_connect.php');

                                        $offdata = mysqli_query($con, "SELECT * FROM course WHERE category='Office Application' || category='Database' || category='Office And Database' ");

                                        while ($offdata_info = mysqli_fetch_array($offdata)) :
                                        ?>
                                            <li><?php echo $offdata_info['name'] ?>
                                                <a href="edit_course.php?edit=<?php echo $offdata_info['id'] ?>" class="btn edit btn-info btn-round btn-sm"><i class="material-icons">edit</i></a>
                                                <a href="../oparetions/delete_course.php?del=<?php echo $offdata_info['id'] ?>" class="btn btn-danger edit btn-round btn-sm" onclick="return confirm('Are You sure?')"><i class="material-icons">delete_forever</i></a>
                                            </li>
                                        <?php endwhile ?>
                                    </ul>
                                </div>
                                <!-- duration-3 month -->
                                <p class="font-weight-bold text-center" style="border: 1px dotted;">Driving</p>
                                <div class="list mx-auto">
                                    <ul>
                                        <?php
                                        $vdata = mysqli_query($con, "SELECT * FROM course WHERE category='Driving'");

                                        while ($vdata_info = mysqli_fetch_array($vdata)) :
                                        ?>
                                            <li><?php echo $vdata_info['name'] ?>
                                                <a href="edit_course.php?edit=<?php echo $vdata_info['id'] ?>" class="btn edit btn-info btn-round btn-sm"><i class="material-icons">edit</i></a>
                                                <a href="../oparetions/delete_course.php?del=<?php echo $vdata_info['id'] ?>" class="btn btn-danger edit btn-round btn-sm" onclick="return confirm('Are You sure?')"><i class="material-icons">delete_forever</i></a>
                                            </li>
                                        <?php endwhile ?>
                                    </ul>
                                </div>
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