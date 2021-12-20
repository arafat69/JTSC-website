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
    <?php $page='top-note'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        top notice
                    </h3>
                </div>

                <?php 
                include('../oparetions/db_connect.php');
                $data= mysqli_query($con,"SELECT * FROM top_note");
                $data_info = mysqli_fetch_array($data);
                
                ?>
                <div class="alert alert-primary" role="alert">
                    <marquee behavior="" direction="" class="pt-2">
                        <?php echo $data_info['title']?>
                    </marquee>
                </div>

                <form action="../oparetions/top_note.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Add Notice</label>
                            <div class="form-group">
                                <label class="bmd-label-floating"> write top notice title , it's only show top notice bar</label>
                                <textarea class="form-control" rows="5" name="title" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right note">Update Notice</button>
                <span class="btn btn-info pull-right">Last Update : <?php echo $data_info['date']?></span>
                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- script link add -->
<?php include('inc/script.php'); ?>
