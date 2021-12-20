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
    <?php $page = 'result';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        all results
                    </h3>
                </div>
<style>
    .font-14{
        font-size: 14px;
    }
</style>

                <div class="notice-section pt-4">

                    <div class="addnote">
                        <form action="../oparetions/add_result.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="text-dark">Add result</label>
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Result Title</label>
                                    <input type="text" id="" class="form-control" name="title" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pfile" class="btn btn-primary">select a file</label>
                                        <input type="file" id="pfile" name="photo" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Department</label>
                                        <select name="department" class="form-control px-3">
                                            <option value="">select department</option>
                                            <option value="computer">Computer</option>
                                            <option value="electrical">Electrical</option>
                                            <option value="mechanical">Mechanical</option>
                                            <option value="farm machinery">Farm Machinery</option>
                                            <option value="automobile">Automobile</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Semester Or Class</label>
                                        <select name="semester" class="form-control px-3">
                                            <option value="">Select Semester/Class</option>
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
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right ">published result</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <hr class="border-secondary" style="border: 3px double;">
                    <!-- all notices -->
                    <div class="all-note mt-5">
                        <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">all Results</span></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr class="bg-success text-light">
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Department</th>
                                        <th>Semester/Class</th>
                                        <th>Files</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('../oparetions/db_connect.php');

                                    $data = mysqli_query($con, "SELECT * FROM results ORDER BY id DESC");
                                    $i = 1;
                                    while ($data_info = mysqli_fetch_array($data)) :
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td class="font-14"><?php echo $data_info['date'] ?></td>
                                            <td><?php echo $data_info['title'] ?></td>
                                            <td><?php echo $data_info['department'] ?></td>
                                            <td><?php echo $data_info['semester'] ?></td>
                                            <td>
                                                <img src="../upload_photo/results/<?php echo $data_info['photo'] ?>" width="80" height="50">
                                            </td>
                                            <td>
                                                <a href="edit_result.php?nt_edit=<?php echo $data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                                <a href="view_result.php?nt_view=<?php echo $data_info['id'] ?>" class="btn btn-warning btn-sm">View</a>
                                            </td>
                                        </tr>

                                    <?php $i++;
                                    endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>