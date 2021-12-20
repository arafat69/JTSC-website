<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/google-translate.css">
<link rel="stylesheet" href="css/simple-lightbox.css">
<?php
include('oparetions/db_connect.php');
$tdata = mysqli_query($con, "SELECT * FROM banner WHERE logo ='tlogo'");
$tdata_info = mysqli_fetch_array($tdata);

?>
<link rel="icon" href="upload_photo/banner/<?php echo $tdata_info['photo'] ?>">

<style>
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: orangered;
        border-bottom: 3px solid orangered;
    }

    .btn.btn-round {
        border-radius: 30px;
    }

    .card-profile {
        margin-top: 85px;
        text-align: center;
    }

    .card-profile .card-avatar {
        max-width: 140px;
        max-height: 140px;
    }

    .card-profile .card-avatar {
        margin: -65px auto 0;
        border-radius: 50%;
        overflow: hidden;
        padding: 0;
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    }

    .description,
    .card-description,
    .footer-big p {
        color: #999999;
    }

    .card-avatar img {
        vertical-align: middle;
        text-align: center;
        width: 140px;
        height: 140px;
    }

    .btn.btn-primary {
        color: #fff;
        background-color: #9c27b0;
        border-color: #9c27b0;
        text-transform: uppercase;
        padding: 6px 22px;
    }

    .btn.btn-primary:hover {
        box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12);
    }





    /* student pages style */
    .student-item {
        width: 200px;
        height: auto;
        margin: 16px 8px;
    }

    .student-icon {
        width: 120px;
        height: 120px;
        background: #165374;
        border-radius: 50%;
        padding: 20px;
        margin: auto;
    }

    .bg-color {
        border: 1px solid;
        border-top-color: blueviolet;
        border-bottom-color: brown;
        border-left-color: #0E4455;
        border-right-color: orangered;
        transition: 0.05s;
    }

    .bg-color:hover {
        border: 1px dotted orangered;
        background-color: #eee;
        margin-top: -5px;
    }

    .student-icon>.styicon {
        width: 100%;
        height: 100%;
        color: #fff;
    }

    .text-gray {
        color: #999999 !important;
    }

    .font {
        font-family: 'Roboto Slab', serif;
    }

    .d-name {
        font-family: 'Roboto Slab', serif;
        color: #117a8b;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    .txt-sm {
        font-weight: 300;
        font-size: 13px;
    }

    .goog-te-banner-frame {
        display: none;
        margin: 0;
        padding: 0;
        position: absolute;
        
    }
</style>