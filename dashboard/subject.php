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
    <?php $page = 'subject';
    include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                     Department Subject
                    </h3>
                </div>



                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Add Subject</h4>
                                <p class="card-category">Complete Subject Informations</p>
                            </div>
                            <div class="card-body">
                                <form action="../oparetions/add_subject.php" method="POST"">

                            <div class=" row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Subject Name</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">select semester/class</label>
                                                <select name="semester" class="form-control px-2">
                                                    <option value="">select semester/class</option>
                                                    <option value="1st" selected>1st</option>
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
                                                    <option>select department</option>
                                                    <option value="computer">Computer</option>
                                                    <option value="electrical">Electrical</option>
                                                    <option value="electronic">Electronic</option>
                                                    <option value="mechanical">Mechanical</option>
                                                    <option value="farm machinery">Farm Machinery</option>
                                                    <option value="automobile">Automobile</option>
                                                    <option value="civil">Civil</option>
                                                    <option value="text">Textile</option>
                                                    <option value="food">Food</option>
                                                    <option value="welding">Welding</option>
                                                    <option value="agro">Agro Mechinary</option>
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
                                                    <option>select Section</option>
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
                                                <input type="text" class="form-control" name="code" autocomplete="off">
                                            </div>
                                        </div>

                                    </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cradit</label>
                                        <input type="text" class="form-control" name="cradit">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">FM</label>
                                        <input type="text" class="form-control" name="fm">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">TC</label>
                                        <input type="text" class="form-control" name="tc">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">TF</label>
                                        <input type="text" class="form-control" name="tf">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">PC</label>
                                        <input type="text" class="form-control" name="pc">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">PF</label>
                                        <input type="text" class="form-control" name="pf">
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary pull-right">add subject</button>
                            <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student my-5">
                    <div class="card-header card-header-primary bg-info">
                                <p class="card-category text-center text-white"> Subject Informations</p>
                            </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-capitalize bg-success text-white">
                                    <th>Semester</th>
                                    <th>sub_code</th>
                                    <th>Subject Name</th>
                                    <th>Cradit</th>
                                    <th>FM</th>
                                    <th>TC</th>
                                    <th>TF</th>
                                    <th>PC</th>
                                    <th>PF</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $data = mysqli_query($con, "SELECT * FROM `subject`");
                                while ($data_info = mysqli_fetch_array($data)) :
                                ?>
                                    <tr class="text-capitalize font text-left">
                                        <td><?php echo $data_info['semester'] ?></td>
                                        <td><?php echo $data_info['code'] ?></td>
                                        <td><?php echo $data_info['name'] ?></td>
                                        <td><?php echo $data_info['cradit'] ?></td>
                                        <td><?php echo $data_info['fm'] ?></td>
                                        <td><?php echo $data_info['tc'] ?></td>
                                        <td><?php echo $data_info['tf'] ?></td>
                                        <td><?php echo $data_info['pc'] ?></td>
                                        <td><?php echo $data_info['pf'] ?></td>
                                        <td>
                                        <a href="edit_subject.php?sub_edit=<?php echo $data_info['id']?>" class="btn bg-info btn-sm">Edit</a>
                                        <a href="../oparetions/delete_subject.php?sub_del=<?php echo $data_info['id']?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delet</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
  </div>
</div>
<!-- script link add -->
<?php include('inc/script.php') ?>