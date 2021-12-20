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
    <?php $page='banner'; include('inc/sidebar.php') ?>
    <div class="main-panel">
        <!-- Navbar link add-->
        <?php include('inc/topbar.php') ?>
        <div class="content">
            <div class="container-fluid">
                <!-- main content section -->

                <div class="page-title w-75 mx-auto pb-2 alert alert-info py-1">
                    <h3 class="text-uppercase text-center">
                        Banner Or Icon
                    </h3>
                </div>

                <div class="banner_section">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="bg-primary text-white p-3 rounded">Banner Section</h4>
                              <form action="../oparetions/logo.php?logo=banner" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                  <?php 
                                  include('../oparetions/db_connect.php');

                                  $data = mysqli_query($con, "SELECT * FROM banner WHERE logo ='banner'");
                                  $data_info = mysqli_fetch_array($data);
                                  
                                  ?>
                                   <label for="">Banner Image</label>
                                  <img src="../upload_photo/banner/<?php echo $data_info['photo']?>" alt="" width="100%">
                                   <label for="banner" class="btn btn-primary">change banner</label>
                                   <input type="file" name="photo" id="banner">
                               </div>
                               <button type="submit" class="btn btn-primary pull-right">upload</button>
                               
                              </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="bg-primary text-white p-3 rounded">Top Navbar Logo</h4>
                              <form action="../oparetions/logo.php?logo=tlogo" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                  <?php 
                                  $data = mysqli_query($con, "SELECT * FROM banner WHERE logo ='tlogo'");
                                  $data_info = mysqli_fetch_array($data);
                                  
                                  ?>
                                   <label for="">Top Logo Image</label>
                                  <img src="../upload_photo/banner/<?php echo $data_info['photo']?>" alt="" width="100%">
                                   <label for="tlogo" class="btn btn-primary">change logo</label>
                                   <input type="file" name="photo" id="tlogo">
                               </div>
                               <button type="submit" class="btn btn-primary pull-right">upload</button>
                               
                              </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="bg-primary text-white p-3 rounded">Footer Logo</h4>
                              <form action="../oparetions/logo.php?logo=flogo" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                              <?php 
                                  $data = mysqli_query($con, "SELECT * FROM banner WHERE logo ='flogo'");
                                  $data_info = mysqli_fetch_array($data);
                                  
                                  ?>
                                   <label for="">Footer Logo Image</label>
                                  <img src="../upload_photo/banner/<?php echo $data_info['photo']?>" alt="" width="100%">
                                   <label for="flogo" class="btn btn-primary">change logo</label>
                                   <input type="file" name="photo" id="flogo">
                               </div>
                               <button type="submit" class="btn btn-primary pull-right">upload</button>
                               
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
<!-- script link add -->
<?php include('inc/script.php') ?>