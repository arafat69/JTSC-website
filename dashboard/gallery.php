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
    <?php $page='gallery'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        Gallery
                    </h3>
                </div>
                <style>
                    .edit {
                        display: none;
                    }

                    .card-profile:hover .edit {
                        display: block;
                    }
                </style>
                <div class="gallery-section pt-4">
                    <div class="add-gallery">
                        <form action="../oparetions/add_gallery.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                
                                <label for="gallery" class="btn btn-info"><span class="material-icons">add_photo_alternate</span> select a photo</label>
                                <label>Photo Size : 520px X 320px</label>
                                <input type="file" name="photo" id="gallery" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">add gallery</button>
                        </form>
                    </div>
                    <h3 class="pb-1 pt-4" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">gallery</span></h3>
                    <div class="gallery">
                        <div class="row">
                            <?php

                            include('../oparetions/db_connect.php');

                            $data = mysqli_query($con, " SELECT * FROM gallery ORDER BY id DESC");

                            while($data_info = mysqli_fetch_assoc($data)):

                            ?>
                            <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-body">
                                        <img src="../upload_photo/gallery/<?php echo $data_info['photo']?>" width="100%">
                                        <button class="btn btn-info btn-sm mb-0"><span class="material-icons"> timer </span> <?php echo $data_info['date']?> </button>
                                        <a href="../oparetions/delete_gallery.php?del=<?php echo $data_info['id']?>" class="btn mb-0 edit btn-danger btn-sm pull-right" onclick="return confirm('Are You Sure?')"><span class="material-icons">delete_forever</span></a>
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
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>