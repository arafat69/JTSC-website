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
    <?php $page='allnote'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        View notice
                    </h3>
                </div>
                <?php
                $id = $_GET['nt_view'];
                include('../oparetions/db_connect.php');

                $data = mysqli_query($con, "SELECT * FROM notices WHERE id='$id'");
                $data_info = mysqli_fetch_array($data);
                ?>

                <div class="notice-section pt-4">

                    <div class="addnote">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                     
                                    <div class="form-group">
                                        <label class="text-dark">view Notice</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Notice Title</label>
                                            <input type="text" id="" class="form-control" value="<?php echo $data_info['title'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Publish Date</label>
                                            <input type="text" id="" class="form-control" value="<?php echo $data_info['date'] ?>" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Notice file</label>
                                        <img class="rounded" src="../upload_photo/notices/<?php echo $data_info['photo'] ?>" width="100%">
                                    </div>
                                    <a href="../oparetions/delete_note.php?id=<?php echo $id ?>" class="btn btn-danger pull-right btn-sm" onclick="return confirm('Are You Sure?')">Delete</a>
                                       
                                    </div>
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