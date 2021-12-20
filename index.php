<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
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
            max-height:180px;
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

<?php include('oparetions/db_connect.php'); $page='home'?>
    <!-- navbar-section-start -->

    <?php
    include('inc/navbar.php');

    ?>
    <!-- navbar-section-end -->

    <!-- slide -carousel start -->
    <?php

    $datas1 = mysqli_query($con, "SELECT * FROM slides WHERE id = 1");
    $datas1_all = mysqli_fetch_array($datas1);

    $datas2 = mysqli_query($con, "SELECT * FROM slides WHERE id = 2");
    $datas2_all = mysqli_fetch_array($datas2);

    $datas3 = mysqli_query($con, "SELECT * FROM slides WHERE id = 3");
    $datas3_all = mysqli_fetch_array($datas3);

    ?>
    <div class="container">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active animated fadeInDown">
                    <img src="upload_photo/s1<?php echo $datas1_all['picture'] ?>" alt="First slide"> <!-- sliade image 1 -->
                    <div class="carousel-caption animated fadeInLeftBig">
                        <h3 class="text-capitalize"><?php echo $datas1_all['title'] ?></h3>
                        <p><?php echo $datas1_all['description'] ?></p>
                    </div>
                </div>
                <div class="carousel-item animated fadeInDown">
                    <img src="upload_photo/s2<?php echo $datas2_all['picture'] ?>" alt="Second slide"> <!-- sliade image 2 -->
                    <div class="carousel-caption animated fadeInRight">
                        <h3 class="text-capitalize"><?php echo $datas2_all['title'] ?></h3>
                        <p><?php echo $datas2_all['description'] ?></p>
                    </div>
                </div>
                <div class="carousel-item animated fadeInUp">
                    <img src="upload_photo/s3<?php echo $datas3_all['picture'] ?>" alt="Third slide"> <!-- sliade image 3 -->
                    <div class="carousel-caption animated fadeInLeft">
                        <h3 class="text-capitalize"><?php echo $datas3_all['title'] ?></h3>
                        <p><?php echo $datas3_all['description'] ?></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- slide -carousel end -->

        <!-- PRINCIPAL’S MESSAGE + NOTICE section -->

        <div class="row mt-4">
            <div class="col-md-6">
                <?php
                $pdata = mysqli_query($con, "SELECT * FROM principal_message");
                $pdata_info = mysqli_fetch_assoc($pdata);
                ?>
                <div class="principal py-3 pr-3">
                    <h3 class="border-4 mb-3 d-name">PRINCIPAL’S MESSAGE</h3>
                    <div class="principal-img float-left pr-3 pb-2">
                        <img src="upload_photo/pms<?php echo $pdata_info['photo'] ?>" alt="principal">
                    </div>
                    <div class="principal-message ">
                        <div class="principal-name font">
                            <h4><?php echo $pdata_info['name'] ?></h4>
                            <p class="text-justify"><?php echo $pdata_info['message'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- notice-section-start -->
            <div class="col-md-6">
                <div class="notice-section py-3 pr-3">
                    <h3 class="border-4 mb-3 d-name">NOTICE</h3>
                    <div class="notice">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $data = mysqli_query($con, "SELECT * FROM notices ORDER BY id DESC limit 4");
                                    $i = 1;

                                    while ($data_info = mysqli_fetch_array($data)) :
                                    ?>
                                        <tr class="font">
                                            <td><?php echo $i ?></td>
                                            <td><a href="notice.php"><?php echo $data_info['title'] ?></a></td>
                                        </tr>

                                    <?php $i++;
                                    endwhile ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="notice.php" class="btn btn-info px-3">VIEW ALL</a>
                    </div>
                </div>
            </div>
            <!-- notice-section-end -->
        </div>

    </div>

    <!-- gallery-section-start -->

    <div id="gallery-section">
        <div class="container">
            <h3 class="border-4 w-50 text-center mx-auto mb-3 d-name">GALLERY</h3>
            <div class="row">

                <?php

                $gdata = mysqli_query($con, "SELECT * FROM gallery ORDER BY id DESC limit 6");

                while ($gdata_info = mysqli_fetch_array($gdata)) :
                ?>
                    <div class="col-md-4 py-2">
                        <div class="gallery">
                            <div class="card">
                                <div class="card-body">
                                 <a href="upload_photo/gallery/<?php echo $gdata_info['photo'] ?>" class="big"><img src="upload_photo/gallery/<?php echo $gdata_info                                  ['photo'] ?>"/></a>
                               </div>
                           </div>
                        </div>
                    </div>
                <?php endwhile ?>

            </div>

            <div class="gallery-view text-center m-3">
                <a href="gallery.php" class="btn btn-success p-3 font-14">show more</a>
            </div>
        </div>
    </div>
    <!-- gallery-section-end -->

   <div class="container-fluid" style="position: sticky; top: 92%; z-index: 1090;">
        <div class="top-up float-right">
            <a href="#top"><button class="btn btn-danger rounded-circle"><i class="fa fa-arrow-up" aria-hidden="true"></i></button></a>
        </div>
    </div>

    <div class="video-section py-3">
        <div class="container">
        <h3 class="border-4 w-50 text-center mx-auto mb-4 d-name">VIDEOS</h3>
        <div class="row">

        <?php

$vdata = mysqli_query($con, " SELECT * FROM video ORDER BY id DESC limit 2");

while ($vdata_info = mysqli_fetch_assoc($vdata)) :

?>
    <div class="col-md-6">
        <div class="card ">
            <div class="card-body">
                <iframe width="100%" height="280" src="https://www.youtube.com/embed/<?php echo $vdata_info['file'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php endwhile ?>

        </div>
        <div class="video-view text-center m-3">
                <a href="video.php" class="btn btn-info px-3 ">VIEW ALL</a>
            </div>
        </div>
    </div>

    <div class="other-section mt-3 py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="other-item bg-white font-14 p-3 mb-4">
                        <h4>শুদ্ধাচার</h4>
                        <div class="row">
                            <div class="col-4 enovets">
                                <img src="about-image/hand.jpg" alt="oher" width="100%">
                            </div>
                            <div class="col-8">
                                <ul class="p-0 enovet">
                                    <li><a href="#" class="link">জাতীয় শুদ্ধাচার কৌশল</a></li>
                                    <li><a href="#" class="link">অধিদপ্তরের কর্মপরিকল্পনা</a></li>
                                    <li><a href="#" class="link">জাতীয় শুদ্ধাচার কৌশল কমিটি</a></li>
                                    <li><a href="#" class="link">স্বচ্ছ ও সেবামূলক কার্যালয় ঘোষনা</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="other-item bg-white font-14 p-3 mb-4">
                        <h4>উদ্ভাবনী কার্যক্রম</h4>
                        <div class="row">
                            <div class="col-4">
                                <img src="about-image/hand.jpg" alt="oher" width="100%">
                            </div>
                            <div class="col-8">
                                <ul class="p-0 enovet">
                                    <li><a href="#" class="link">উদ্ভাবনী আইডিয়া সাবমিট</a></li>
                                    <li><a href="#" class="link">বার্ষিক উদ্ভাবন কর্মপরিকল্পনা</a></li>
                                    <li><a href="#" class="link">ইনোভেশন টিম</a></li>
                                    <li><a href="#" class="link">উদ্ভাবন বাণিজ্যিকীকরণ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="other-item bg-white font-14 p-3 mb-4">
                        <h4>প্রশিক্ষণ সংক্রান্ত</h4>
                        <div class="row">
                            <div class="col-4">
                                <img src="about-image/hand.jpg" alt="oher" width="100%">
                            </div>
                            <div class="col-8">
                                <ul class="p-0 enovet">
                                    <li><a href="#" class="link">প্রশিক্ষণ আদেশ (দেশে)</a></li>
                                    <li><a href="#" class="link">প্রশিক্ষণ আদেশ (বিদেশে)</a></li>
                                    <li><a href="#" class="link">প্রশিক্ষণ কর্মসূচী’ ২০১৯-২০</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="other-item bg-white font-14 p-3 mb-4">
                        <h4>অনলাইন সেবা</h4>
                        <div class="row">
                            <div class="col-4">
                                <img src="about-image/hand.jpg" alt="oher" width="100%">
                            </div>
                            <div class="col-8">
                                <ul class="p-0 enovet">
                                    <li><a href="#" class="link">ভিডিও কনফারেন্স [Poly.]</a></li>
                                    <li><a href="#" class="link">স্কাইপি ঠিকানা [Skype, TSC]</a></li>
                                    <li><a href="#" class="link">স্কাইপি ঠিকানা [Skype, Poly.]</a></li>
                                    <li><a href="#" class="link">প্রতিষ্ঠান প্রধান [সকল]</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="other-item bg-white font-14 p-3 mb-4">
                        <h4>ফরম ও প্রকাশনা</h4>
                        <div class="row">
                            <div class="col-4">
                                <img src="about-image/hand.jpg" alt="oher" width="100%">
                            </div>
                            <div class="col-8">
                                <ul class="p-0 enovet">
                                    <li><a href="#" class="link">জিপিএফ এর জন্য আবেদন ফরম</a></li>
                                    <li><a href="#" class="link">বিদেশ ভ্রমনের আবেদন</a></li>
                                    <li><a href="#" class="link">পারিবারিক পেনশন ফরম</a></li>
                                    <li><a href="#" class="link">বাংলাদেশ সরকারের ফরম</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="other-item bg-white font-14 p-3 mb-4">
                        <h4>অনলাইন সেবা</h4>
                        <div class="row">
                            <div class="col-4">
                                <img src="about-image/hand.jpg" alt="oher" width="100%">
                            </div>
                            <div class="col-8">
                                <ul class="p-0 enovet">
                                    <li><a href="#" class="link">ভিডিও কনফারেন্স [Poly.]</a></li>
                                    <li><a href="#" class="link">স্কাইপি ঠিকানা [Skype, TSC]</a></li>
                                    <li><a href="#" class="link">স্কাইপি ঠিকানা [Skype, Poly.]</a></li>
                                    <li><a href="#" class="link">প্রতিষ্ঠান প্রধান [সকল]</a></li>
                                </ul>
                            </div>
                        </div>
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