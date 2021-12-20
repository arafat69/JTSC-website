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
                        all Routine
                    </h3>
                </div>


                <div class="notice-section pt-4">

                    <div class="addnote">
                        <form action="../oparetions/add_routine.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="text-dark">Add Routine</label>
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Routine Title</label>
                                    <input type="text" id="" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Select Routine Type</label>
                                        <select name="category" class="form-control px-2">
                                            <option value="">select type</option>
                                            <option value="class routine">Class Routine</option>
                                            <option value="exam routine">Exam Routine</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pfile" class="btn btn-primary mt-4">select a file</label>
                                        <input type="file" id="pfile" name="photo" required>
                                    </div>
                                </div>
                            </div>
                                    <button type="submit" class="btn btn-primary pull-right ">public routine</button>
                                    <div class="clearfix"></div>
                        </form>
                    </div>
                    <hr class="border-secondary" style="border: 3px double;">
                    <!-- all notices -->
                    <div class="all-note mt-5">
                        <h3 class="pb-1" style="border-bottom: 4px solid #9124A3;"><span class="py-2 px-3 text-capitalize" style="background: #9124A3; color: #fff;">all routine</span></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr class="bg-success text-light">
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Routine</th>
                                        <th>Files</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('../oparetions/db_connect.php');

                                    $data = mysqli_query($con, "SELECT * FROM routine ORDER BY id DESC");
                                    $i = 1;
                                    while ($data_info = mysqli_fetch_array($data)) :
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $data_info['date'] ?></td>
                                            <td><?php echo $data_info['title'] ?></td>
                                            <td><?php echo $data_info['category'] ?></td>
                                            <td>
                                                <img src="../upload_photo/routine/<?php echo $data_info['photo'] ?>" width="80" height="50">
                                            </td>
                                            <td>
                                                <a href="edit_routine.php?nt_edit=<?php echo $data_info['id'] ?>" class="btn bg-info btn-sm">Edit</a>
                                                <a href="view_routine.php?nt_view=<?php echo $data_info['id'] ?>" class="btn btn-warning btn-sm">View</a>
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