<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
    <?php include('oparetions/db_connect.php'); ?>
    <!-- navbar-section-start -->
    <?php $page='gallery'; $pages='video'; include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <!-- notice start -->
    <div class="container">
        <div class="rapper">
            <h4 class="text-uppercase border-4 pt-3 text-center mx-auto d-name">All videos</h4>
            <div class="video my-5">
                <div class="row">

                    <?php
                    include('oparetions/db_connect.php');
                    $video = mysqli_query($con, "SELECT * FROM video ORDER BY id DESC");
                    while ($video_all = mysqli_fetch_array($video)) :
                    ?>
                        <div class="col-md-6 pb-3">
                            <div class="card">
                                <div class="card-body">
                                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/<?php echo $video_all['file'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    <?php endwhile ?>
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