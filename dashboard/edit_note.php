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
                        Edit notice
                    </h3>
                </div>
                <?php
                $id = $_GET['nt_edit'];
                include('../oparetions/db_connect.php');

                $data = mysqli_query($con, "SELECT * FROM notices WHERE id='$id'");
                $data_info = mysqli_fetch_array($data);
                ?>

                <div class="notice-section pt-4">

                    <div class="addnote">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="../oparetions/edit_note.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="text-dark">Update Notices</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Notice Title</label>
                                            <input type="text" id="" class="form-control" name="title" value="<?php echo $data_info['title'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pfile" class="btn btn-primary">add new file</label>
                                        <input type="file" id="pfile" name="photo">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right ">update Notice</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                    <label for="">Notice Photo</label>
                                        <img src="../upload_photo/notices/<?php echo $data_info['photo'] ?>" width="100%">
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