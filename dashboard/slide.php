<!-- css link add -->
<?php include('inc/css.php') ?>
<div class="wrapper ">
    <?php
    session_start();

    if (!isset($_SESSION['first_name'])) {
        header('location:index.php');
    }
    ?>
    <!-- sidebar link add -->
    <?php $page='slide'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        <i class="fa fa-sliders mr-2 text-light" aria-hidden="true"></i>sliders
                    </h3>
                </div>

                <?php

                include('../oparetions/db_connect.php');

                $datas1 = mysqli_query($con, "SELECT * FROM slides WHERE id = 1");
                $datas1_all = mysqli_fetch_array($datas1);

                $datas2 = mysqli_query($con, "SELECT * FROM slides WHERE id = 2");
                $datas2_all = mysqli_fetch_array($datas2);

                $datas3 = mysqli_query($con, "SELECT * FROM slides WHERE id = 3");
                $datas3_all = mysqli_fetch_array($datas3);

                ?>

                <div class="first-slide">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="text-uppercase">first slide</h3>
                            <form action="../oparetions/sliders.php?slide=1" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="text-dark">First Slide Items</label>
                                    <div class="form-group">
                                        <label for="fimg" class="btn btn-primary">Add A picture</label>
                                        <input type="file" name="f-picture" id="fimg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Add Title</label>
                                        <input type="text" name="f-title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Add Short Description</label>
                                        <input type="text" name="f-description" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right ">Update Slide</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 d-sm-none d-md-block">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Preview First Image</h4>
                                    <img class="card-img-bottom" src="../upload_photo/s1<?php echo $datas1_all['picture'] ?>" alt="" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr style="border-color: teal;">

                <div class="second-slide">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="text-uppercase">second slide</h3>
                            <form action="../oparetions/sliders.php?slide=2" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="text-dark">second Slide Items</label>
                                    <div class="form-group">
                                        <label for="simg" class="btn btn-primary">Add A picture</label>
                                        <input type="file" name="s-picture" id="simg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Add Title</label>
                                        <input type="text" name="s-title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Add Short Description</label>
                                        <input type="text" name="s-description" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right ">Update Slide</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-3 d-sm-none d-md-block">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Preview Second Image</h4>
                                    <img class="card-img-bottom" src="../upload_photo/s2<?php echo $datas2_all['picture'] ?>" alt="" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr style="border-color: teal;">

                <div class="third-slide">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="text-uppercase">third slide</h3>
                            <form action="../oparetions/sliders.php?slide=3" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="text-dark">Third Slide Items</label>
                                    <div class="form-group">
                                        <label for="timg" class="btn btn-primary">Add A picture</label>
                                        <input type="file" name="th-picture" id="timg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Add Title</label>
                                        <input type="text" name="th-title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Add Short Description</label>
                                        <input type="text" name="th-description" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right ">Update Slide</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-3 d-sm-none d-md-block">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Preview Third Image</h4>
                                    <img class="card-img-bottom" src="../upload_photo/s3<?php echo $datas3_all['picture'] ?>" alt="" width="100%">
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