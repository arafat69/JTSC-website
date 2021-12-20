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
    <?php $page = 'video';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        Videos
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
                        <form action="../oparetions/add_video.php" method="POST">
                            <div class="form-group">
                                <label> Youtube Video link: example :- 3Cix3YGezrI</label>
                                <div class="form-group">
                                    <label for="video" class="bmd-label-floating">Enter Youtube watch?v Link</label>
                                    <input type="text" name="photo" id="video" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">upload video</button>
                        </form>
                    </div>
                    <h3 class="pb-1 pt-4" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">Videos</span></h3>
                    <div class="gallery">
                        <div class="row">
                            <?php

                            $data = mysqli_query($con, " SELECT * FROM video ORDER BY id DESC");

                            while ($data_info = mysqli_fetch_assoc($data)) :

                            ?>
                                <div class="col-md-6">
                                    <div class="card ">
                                        <div class="card-body card-profile">
                                            <iframe width="100%" height="280" src="https://www.youtube.com/embed/<?php echo $data_info['file'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <button class="btn btn-sm mb-0"><span class="material-icons"> timer </span> <?php echo $data_info['date'] ?> </button>
                                            <a href="../oparetions/delete_video.php?del=<?php echo $data_info['id'] ?>" class="btn mb-0 edit btn-danger btn-sm pull-right" onclick="return confirm('Are You Sure?')"><span class="material-icons">delete_forever</span></a>
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