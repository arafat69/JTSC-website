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
                        Edit notice
                    </h3>
                </div>
                <?php
                $id = $_GET['nt_edit'];
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
                                <form action="../oparetions/edit_result.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="text-dark">Update result</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Result Title</label>
                                            <input type="text" id="" class="form-control" name="title" value="<?php echo $data_info['title'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Department</label>
                                        <select name="department" class="form-control px-3">
                                            <option value="<?php echo $data_info['department'] ?>"><?php echo $data_info['department'] ?></option>
                                            <option value="computer">Computer</option>
                                            <option value="electrical">Electrical</option>
                                            <option value="mechanical">Mechanical</option>
                                            <option value="farm machinery">Farm Machinery</option>
                                            <option value="automobile">Automobile</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Semester Or Class</label>
                                        <select name="semester" class="form-control px-3">
                                            <option value="<?php echo $data_info['semester'] ?>"><?php echo $data_info['semester'] ?></option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="4th">4th</option>
                                            <option value="5th">5th</option>
                                            <option value="6th">6th</option>
                                            <option value="7th">7th</option>
                                            <option value="8th">8th</option>
                                            <option value="class nine">Class Nine</option>
                                            <option value="class ten">Class Ten</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Result Photo</label>
                                        <img src="../upload_photo/results/<?php echo $data_info['photo'] ?>" width="100%">
                                        <label for="pfile" class="btn btn-primary">change file</label>
                                        <input type="file" id="pfile" name="photo">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right ">update Notice</button>
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