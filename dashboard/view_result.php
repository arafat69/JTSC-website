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
    <?php $page='result'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        View Result
                    </h3>
                </div>
                <?php
                $id = $_GET['nt_view'];
                include('../oparetions/db_connect.php');

                $data = mysqli_query($con, "SELECT * FROM results WHERE id='$id'");
                $data_info = mysqli_fetch_array($data);
                ?>

                <div class="notice-section pt-4">

                    <div class="addnote">
                        <div class="row">
                            <div class="col-sm-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="text-dark">view result</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Result Title</label>
                                            <input type="text" id="" class="form-control" name="title" value="<?php echo $data_info['title'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Department</label>
                                        <select name="department" class="form-control px-1" disabled>
                                            <option><?php echo $data_info['department'] ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Semester Or Class</label>
                                        <select name="semester" class="form-control px-1" disabled>
                                            <option><?php echo $data_info['semester'] ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Result Photo</label>
                                        <img src="../upload_photo/results/<?php echo $data_info['photo'] ?>" width="100%">
                                        <label class="btn btn-light btn-sm">published date <?php echo $data_info['date'] ?></label>
                                    </div>
                                    <a href="../oparetions/delete_result.php?del=<?php echo $_GET['nt_view']?>" type="submit" class="btn btn-danger pull-right btn-sm" onclick="return confirm('Are You Sure?')">delete</a>
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