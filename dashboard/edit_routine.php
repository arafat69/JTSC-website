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
    <?php $page = 'routine';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        edit Routine
                    </h3>
                </div>
                <?php
                $id = $_GET['nt_edit'];
                include('../oparetions/db_connect.php');

                $data = mysqli_query($con, "SELECT * FROM routine WHERE id='$id'");
                $data_info = mysqli_fetch_array($data);
                ?>


                <div class="notice-section pt-4">

                    <div class="addnote">
                        <div class="row">
                            <div class="col-sm-8 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="../oparetions/edit_routine.php?id=<?php echo $data_info['id']?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="text-dark">Edit Routine</label>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating"> Routine Title</label>
                                                    <input type="text" id="" class="form-control" name="title" value="<?php echo $data_info['title'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Select Routine Type</label>
                                                <select name="category" class="form-control">
                                                    <option value="<?php echo $data_info['category'] ?>"><?php echo $data_info['category'] ?></option>
                                                    <option value="class routine">Class Routine</option>
                                                    <option value="exam routine">Exam Routine</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <img class="rounded" src="../upload_photo/routine/<?php echo $data_info['photo'] ?>" alt="no file" width="100%">
                                                <label for="pfile" class="btn btn-primary mt-4">change file</label>
                                                <input type="file" id="pfile" name="photo">
                                            </div>

                                            <button type="submit" class="btn btn-primary pull-right ">update routine</button>
                                            <div class="clearfix"></div>
                                        </form>
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