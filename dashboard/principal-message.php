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
    <?php $page='message'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        PRINCIPAL’S MESSAGE
                    </h3>
                </div>
                <?php

                include('../oparetions/db_connect.php');

                $data = mysqli_query($con, "SELECT * FROM principal_message");

                $data_info = mysqli_fetch_assoc($data);

                ?>
                <div class="message-section pt-4">
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Principal Message</h4>
                                    <p class="card-category">Complete Messages Informations</p>
                                </div>
                                <div class="card-body">
                                    <form action="../oparetions/principal_message.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Principal Full Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $data_info['name'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Principal Messages</label>
                                            <textarea class="form-control" rows="8" name="message" required><?php echo $data_info['message']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Principal Photo</label>
                                            <img src="../upload_photo/pms<?php echo $data_info['photo'] ?>" width="100%">
                                        </div>
                                        <div class="form-group">
                                            <label for="img" class="btn btn-primary">change Photo</label>
                                            <input type="file" name="photo" id="img">
                                        </div>

                                        <button type="submit" class="btn btn-primary pull-right ">update</button>
                                    </form>
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