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
                    <i class="material-icons text-white">edit</i> edit Teacher
                    </h3>
                </div>

<?php 
include('../oparetions/db_connect.php');

$id = $_GET['edit'];

$data =mysqli_query($con,"SELECT * FROM teacher WHERE id='$id' ");

$data_info = mysqli_fetch_array($data);

?>

                <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">edit Teacher</h4>
                  <p class="card-category">Complete Teacher Informations</p>
                </div>
                <div class="card-body">
                  <form action="../oparetions/edit_teacher.php?edit=<?php echo $_GET['edit']?>" method="POST" enctype="multipart/form-data">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Teacher Full Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $data_info['name']?>"  required>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Grad / position</label>
                          <input type="text" class="form-control" name="position" value="<?php echo $data_info['position']?>" required>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <select name="department" class="form-control px-2">
                              <option value="<?php echo $data_info['department']?>"><?php echo $data_info['department']?></option>
                              <option value="computer" >Computer</option>
                              <option value="electrical">Electrical</option>
                              <option value="mechanical">Mechanical</option>
                              <option value="farm machinery">Farm Machinery</option>
                              <option value="automobile">Automobile</option>
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
                              <option value="<?php echo $data_info['category']?>"><?php echo $data_info['category']?></option>
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
                          <input type="text" class="form-control" name="quali" value="<?php echo $data_info['qualification']?>" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="number" class="form-control" name="contact" value="<?php echo $data_info['contact']?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" name="address" value="<?php echo $data_info['address']?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $data_info['email']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Teacher Image</label>
                              <img class="rounded" src="../upload_photo/teacher/<?php echo $data_info['photo']?>" width="100%" alt="no photo">
                              <label class="btn btn-info" for="img">change Image</label>
                              <input type="file" name="photo" id="img">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">update</button>

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