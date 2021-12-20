<?php
session_start();

if (!isset($_SESSION['first_name'])) {
    header('location:index.php');
}

?>

<!-- css link add -->
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/animate.min.css">
<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/style.css">

<?php include('inc/css.php') ?>
<div class="wrapper ">
    <!-- sidebar link add -->
    <?php $page = 'bashboard';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->






                <div class="container">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <?php
                            $pdata = mysqli_query($con, "SELECT * FROM principal_message");
                            $pdata_info = mysqli_fetch_assoc($pdata);
                            ?>
                            <div class="principal py-3 pr-3">
                                <h3 class="border-4 mb-3 d-name">PRINCIPAL’S MESSAGE</h3>
                                <div class="principal-img float-left pr-3 pb-2">
                                    <img src="../upload_photo/pms<?php echo $pdata_info['photo'] ?>" alt="principal" width="180px" height="150">
                                </div>
                                <div class="principal-message">
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

                                                $data = mysqli_query($con, "SELECT * FROM notices ORDER BY id DESC limit 5");
                                                $i = 1;

                                                while ($data_info = mysqli_fetch_array($data)) :
                                                ?>
                                                    <tr class="font">
                                                        <td><?php echo $i ?></td>
                                                        <td><a href="#"><?php echo $data_info['title'] ?></a></td>
                                                    </tr>

                                                <?php $i++;
                                                endwhile ?>
                                            </tbody>
                                        </table>
                                    </div>
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
                                        <img src="../upload_photo/gallery/<?php echo $gdata_info['photo'] ?>" alt="gallery" width="100%">
                                    </div>

                                    <!-- The Modal -->
                                </div>
                            <?php endwhile ?>

                        </div>
                    </div>
                </div>
                <!-- gallery-section-end -->
                <div class="video-section py-3">
                    <div class="container">
                        <h3 class="border-4 w-50 text-center mx-auto mb-4 d-name">VIDEOS</h3>
                        <div class="row">
                            <?php
                            // include('oparetions/db_connect.php');
                            $video = mysqli_query($con, "SELECT * FROM video ORDER BY id DESC limit 2");
                            while ($video_all = mysqli_fetch_array($video)) :
                            ?>
                                <div class="col-md-6">
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

                <div class="other-section mt-3 py-5">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="other-item bg-white font-14 p-3 mb-4">
                                    <h4>শুদ্ধাচার</h4>
                                    <div class="row">
                                        <div class="col-4 enovets">
                                            <img src="../image/hand.jpg" alt="oher" width="100%">
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
                                            <img src="../image/hand.jpg" alt="oher" width="100%">
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
                                            <img src="../image/hand.jpg" alt="oher" width="100%">
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
                                            <img src="../image/hand.jpg" alt="oher" width="100%">
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
                                            <img src="../image/hand.jpg" alt="oher" width="100%">
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
                                            <img src="../image/hand.jpg" alt="oher" width="100%">
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


                <?php include('../inc/script.php') ?>
                </body>

                </html>











            </div>
        </div>
    </div>
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>