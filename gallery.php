<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>
<style>
    .card{
        overflow: hidden;
    }
    .card-body img{
        transition: transform 1s ease;
    }
    .card-body img:hover{
        transform: scale(1.1);
        z-index: 9;
        border-radius: 8px;
    }
     * {
            box-sizing: border-box;
        }

        .container .gallery a img {
            float: left;
            width:100%;
            max-height:190px;
            -webkit-transition: -webkit-transform 1s ease;
            -moz-transition: -moz-transform 1s ease;
            -o-transition: -o-transform 1s ease;
            -ms-transition: -ms-transform 1s ease;
            transition: transform 1s ease;
            position: relative;
        }

    .clear {
        clear: both;
    }
</style>

<body>
    <?php include('oparetions/db_connect.php');
    $page = 'gallery';$pages = 'photo';  ?>
    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>

    <!-- navbar-section-end -->

    <!-- gallery start -->
    <div class="rapper">
        <div id="gallery-section">
            <div class="container">
                <h3 class="border-4  text-center mx-auto mb-3 d-name">GALLERY</h3>
                <div class="row">

                    <?php
                    $data = mysqli_query($con, "SELECT * FROM gallery ORDER BY id DESC");

                    while ($data_info = mysqli_fetch_array($data)) :
                    ?>
                        <div class="col-md-4 py-2 ">
                            <div class="gallery">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="upload_photo/gallery/<?php echo $data_info['photo'] ?>" class="big"><img src="upload_photo/gallery/<?php echo                                                $data_info['photo'] ?>" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>

                </div>
            </div>
        </div>
    </div>

    </div>


    <!-- footer-section-start -->
    <?php include('inc/footer.php') ?>
    <!-- footer-section-end -->

    <?php include('inc/script.php') ?>

    <script>
        (function() {
            var $gallery = new SimpleLightbox('.gallery a', {});
        })();
    </script>
</body>

</html>