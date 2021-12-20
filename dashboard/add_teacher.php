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
    <?php $page='teacher'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                    <i class="material-icons text-white">add</i> Add  new Teacher
                    </h3>
                </div>



                <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Teacher</h4>
                  <p class="card-category">Complete Teacher Informations</p>
                </div>
                <div class="card-body">
                  <form action="../oparetions/add_teacher.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Teacher Full Name</label>
                          <input type="text" class="form-control" name="name" required>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Grad / position</label>
                          <input type="text" class="form-control" name="position" required>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <select name="department" class="form-control px-2">
                              <option>select department</option>
                              <option value="computer" >Computer</option>
                              <option value="electrical">Electrical</option>
                              <option value="mechanical">Mechanical</option>
                              <option value="farm machinery">Farm Machinery</option>
                              <option value="automobile">Automobile</option>
                              <option value="architacture">Architacture</option>
                              <option value="automobile">Automobile</option>
                              <option value="food">Food</option>
                              <option value="industrial">Industrial</option>
                              <option value="non tech">Non Tech</option>
                              <option value="short-course">Short-Course</option>
                              <option value="none">None</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Teacher Or Staff</label>
                          <select name="category" class="form-control px-2">
                              <option>Teacher / Staff</option>
                              <option value="teacher">Teacher</option>
                              <option value="staff">Staff</option>
                              <option value="Microsoft Office">Microsoft Office</option>
                              <option value="Driving">Driving</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Qualification</label>
                          <input type="text" class="form-control" name="quali" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="number" class="form-control" name="contact" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" name="address" required>
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
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="s-photo" class="bmd-label-floating btn btn-info">Add teacher Image</label>
                          <input type="file" class="form-control" name="photo" id="s-photo">
                        </div>
                      </div>
                    </div>
                    

                    <button type="submit" class="btn btn-primary pull-right">add Teacher</button>

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