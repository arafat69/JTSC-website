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
    <?php $page = 'student';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        <i class="material-icons text-white">add</i> Add new Student
                    </h3>
                </div>



                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Add Student</h4>
                                <p class="card-category">Complete Student Informations</p>
                            </div>
                            <div class="card-body">
                                <form action="../oparetions/edit_subject.php?update=<?php echo $_GET['sub_edit'] ?>" method="POST">

                                    <?php

                                    include('../oparetions/db_connect.php');

                                    $id = $_GET['sub_edit'];

                                    $data = mysqli_query($con, "SELECT * FROM `subject` WHERE id = $id");

                                    $data_info = mysqli_fetch_array($data);

                                    ?>
                                    <div class=" row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Subject Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $data_info['name']?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">select semester/class</label>
                                                <select name="semester" class="form-control px-2">
                                                    <option value="<?php echo $data_info['semester']?>"><?php echo $data_info['semester']?></option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                    <option value="6th">6th</option>
                                                    <option value="7th">7th</option>
                                                    <option value="8th">8th</option>
                                                    <option value="nine">Class Nine</option>
                                                    <option value="ten">Class Ten</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Department</label>
                                                <select name="department" class="form-control px-2 ">
                                                    <option value="<?php echo $data_info['department']?>"><?php echo $data_info['department']?></option>
                                                    <option value="computer">Computer</option>
                                                    <option value="electrical">Electrical</option>
                                                    <option value="mechanical">Mechanical</option>
                                                    <option value="farm machinery">Farm Machinery</option>
                                                    <option value="automobile">Automobile</option>
                                                    <option value="civil">Civil</option>
                                                    <option value="text">Textile</option>
                                                    <option value="food">Food</option>
                                                    <option value="indust">Industrial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Section</label>
                                                <select name="section" class="form-control px-2 ">
                                                    <option value="<?php echo $data_info['section']?>"><?php echo $data_info['section']?></option>
                                                    <option value="diploma">Diploma-In-Engineering</option>
                                                    <option value="hsc">H.Sc Vocational</option>
                                                    <option value="ssc">S.Sc Vocational</option>
                                                    <option value="short">Short Course</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mt-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Subject Code</label>
                                                <input type="text" class="form-control" name="code" value="<?php echo $data_info['code']?>" autocomplete="off">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Cradit</label>
                                                <input type="text" class="form-control" name="cradit" value="<?php echo $data_info['cradit']?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">FM</label>
                                                <input type="text" class="form-control" name="fm" value="<?php echo $data_info['fm']?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">TC</label>
                                                <input type="text" class="form-control" name="tc" value="<?php echo $data_info['tc']?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">TF</label>
                                                <input type="text" class="form-control" name="tf" value="<?php echo $data_info['tf']?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">PC</label>
                                                <input type="text" class="form-control" name="pc" value="<?php echo $data_info['pc']?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">PF</label>
                                                <input type="text" class="form-control" name="pf" value="<?php echo $data_info['pf']?>">
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary pull-right">Update subject</button>
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
<!-- script link add -->
<?php include('inc/script.php') ?>