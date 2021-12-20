<?php
$bdata = mysqli_query($con, "SELECT * FROM banner WHERE logo ='banner'");
$bdata_info = mysqli_fetch_array($bdata);

$tdata = mysqli_query($con, "SELECT * FROM banner WHERE logo ='tlogo'");
$tdata_info = mysqli_fetch_array($tdata);

?>

<div class="navicationbar" id="top">
<div class="banner color-bg animated fadeInDown">
    <div class="container">
        <img src="upload_photo/banner/<?php echo $bdata_info['photo']?>" width="100%" style="max-height: 160px;">
    </div>
</div>
</div>
<div class="navicationbar sticky-top">
<nav class="navbar navbar-expand-md navbar-light color-bg p-0 shadow animated fadeInUp ">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="upload_photo/banner/<?php echo $tdata_info['photo']?>" alt="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item <?php if($page=='home'){ echo 'active';} ?>">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page=='teacher'){ echo 'active';} ?>" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TEACHERS</a>
                    <div class="dropdown-menu animated fadeInUp" aria-labelledby="dropdownId">
                        <a class="dropdown-item <?php if($pages=='teacher'){ echo 'active';} ?>" href="teacher.php?tsc=teacher">TEACHERS & OFFICERS INFO</a>
                        <a class="dropdown-item <?php if($pages=='staff'){ echo 'active';} ?>" href="teacher.php?tsc=staff">STAFF INFO</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page=='academic'){ echo 'active';} ?>" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACADEMIC</a>
                    <div class="dropdown-menu animated fadeInUp" aria-labelledby="dropdownId">
                        <a class="dropdown-item <?php if($pages=='student'){ echo 'active';} ?>" href="student.php">STUDENTS</a>
                        <a class="dropdown-item <?php if($pages=='notice'){ echo 'active';} ?>" href="notice.php">NOTICE</a>
                        <a class="dropdown-item <?php if($pages=='result'){ echo 'active';} ?>" href="result.php">RESULT</a>
                        <a class="dropdown-item <?php if($pages=='routine'){ echo 'active';} ?>" href="routine.php">CLASS ROUTING</a>
                        <a class="dropdown-item <?php if($pages=='exam'){ echo 'active';} ?>" href="exam.php">EXAM ROUTING</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page=='program'){ echo 'active';} ?>" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROGRAM</a>
                    <div class="dropdown-menu animated fadeInUp" aria-labelledby="dropdownId">
                        <a class="dropdown-item <?php if($pages=='dip'){ echo 'active';} ?>" href="program_diploma.php">DIPLOMA ENG:</a>
                        <a class="dropdown-item <?php if($pages=='hsc'){ echo 'active';} ?>" href="program_hsc.php">HSC VOCATIONAL</a>
                        <a class="dropdown-item <?php if($pages=='ssc'){ echo 'active';} ?>" href="program_ssc.php">SSC VOCATIONAL</a>
                        <a class="dropdown-item <?php if($pages=='short'){ echo 'active';} ?>" href="program_short.php">SHORT COURSE</a>
                    </div>
                </li>

                <li class="nav-item <?php if($page=='about'){ echo 'active';} ?>">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page=='gallery'){ echo 'active';} ?>" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GALLERY</a>
                    <div class="dropdown-menu animated fadeInUp" aria-labelledby="dropdownId">
                        <a class="dropdown-item <?php if($pages=='photo'){ echo 'active';} ?>" href="gallery.php">PHOTO</a>
                        <a class="dropdown-item <?php if($pages=='video'){ echo 'active';} ?>" href="video.php">VIDEO</a>
                    </div>
                </li>
                <li class="nav-item <?php if($page=='contact'){ echo 'active';} ?>">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
<!-- navbar-section-end -->

<?php

include('oparetions/db_connect.php');

$top = mysqli_query($con, "SELECT * FROM top_note");

$top_note = mysqli_fetch_array($top);

?>

<div class="container">
    <!-- Top-notice-section -->
    <div class="alert alert-info mt-1 py-0 mb-1" role="alert">
        <marquee class="p-2" onmousemove="this.stop()" onmouseout="this.start()">
            <?php echo $top_note['title'] ?>
        </marquee>
    </div>
</div>
<!-- Top-notice-section end-->