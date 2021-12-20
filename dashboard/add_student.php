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
    <?php $page='student'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                    <i class="material-icons text-white">add</i> Add  new Student
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
                  <form action="../oparetions/add_student.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" class="form-control" name="name" required>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Roll Number</label>
                          <input type="text" class="form-control" name="roll" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Registration Number</label>
                          <input type="text" class="form-control" name="reg" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Shift</label>
                          <select name="shift" class="form-control px-2">
                              <option>select shift</option>
                              <option value="1st" selected>1<sup>st</sup></option>
                              <option value="2nd">2<sup>nd</sup></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Semester/Class</label>
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
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <select name="department" class="form-control px-2">
                              <option>select department</option>
                              <option value="computer" selected>Computer</option>
                              <option value="electrical">Electrical</option>
                              <option value="mechanical">Mechanical</option>
                              <option value="farm machinery">Farm Machinery</option>
                              <option value="automobile">Automobile</option>
                              <option value="non tech">Non Tech</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Section</label>
                          <select name="section" class="form-control px-2">
                              <option >select section</option>
                              <option value="diploma-in-engineering" selected>Diploma-In-Engineering</option>
                              <option value="intermediate">Intermediate</option>
                              <option value="vocational">Vocational</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Session</label>
                          <input type="text" class="form-control" name="session" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Father Name</label>
                          <input type="text" class="form-control" name="father">
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mother Name</label>
                          <input type="text" class="form-control" name="mother">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="number" class="form-control" name="contact">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date Of Birth</label>
                          <input type="text" class="form-control" name="birth" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" name="address">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                      </div>
                       <div class="col-md-12">
                        <div class="form-group">
                          <label for="s-photo" class="bmd-label-floating btn btn-primary">Add Student Photo</label>
                          <input type="file" class="form-control" name="photo" id="s-photo">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">add student</button>
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