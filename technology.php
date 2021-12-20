<!DOCTYPE html>
<html lang="en">
<style>
.table td{
    text-align: left;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
  
    <?php

    include('oparetions/db_connect.php');

    $teacher = $_GET['tsc'];

    $page = 'program';

      // diploma-in-engineering teacher section start
      if ($teacher == 'com') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='computer'");
        $pagetitle = 'COMPUTER TEACHERS INFO';
        $subtitle = 'COMPUTER SUBJECT INFO';
        $pages = 'dip';
    } elseif ($teacher == 'elec') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='electrical'");
        $pagetitle = 'ELECTRICAL TEACHERS INFO';
        $subtitle = 'ELECTRICAL SUBJECT INFO';
        $pages = 'dip';
    } elseif ($teacher == 'mecha') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='mechanical'");
        $pagetitle = 'MECHANICAL TEACHERS INFO';
        $subtitle = 'MECHANICAL SUBJECT INFO';
        $pages = 'dip';
    } elseif ($teacher == 'farm') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='farm machinery'");
        $pagetitle = 'Farm Machinery TEACHERS INFO';
        $subtitle = 'Farm Machinery SUBJECT INFO';
        $pages = 'dip';
    } elseif ($teacher == 'auto') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='automobile'");
        $pagetitle = 'automobile TEACHERS INFO';
        $subtitle = 'automobile SUBJECT INFO';
        $pages = 'dip';
    }elseif ($teacher == 'civil') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='civil'");
        $pagetitle = 'Civil TEACHERS INFO';
        $subtitle = 'civil SUBJECT INFO';
        $pages = 'dip';
    }elseif ($teacher == 'text') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='textile'");
        $pagetitle = 'textile TEACHERS INFO';
        $subtitle = 'textile SUBJECT INFO';
        $pages = 'dip';
    }elseif ($teacher == 'archi') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='architacture'");
        $pagetitle = 'architecture TEACHERS INFO';
        $subtitle = 'architecture SUBJECT INFO';
        $pages = 'dip';
    }elseif ($teacher == 'food') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='food'");
        $pagetitle = 'food TEACHERS INFO';
        $subtitle = 'food SUBJECT INFO';
        $pages = 'dip';
    }elseif ($teacher == 'ind') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='industrial'");
        $pagetitle = 'industrial TEACHERS INFO';
        $subtitle = 'industrial SUBJECT INFO';
        $pages = 'dip';
    }
     // hsc vocational teacher section start
    elseif ($teacher == 'hcom') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='computer'");
        $pagetitle = 'computer TEACHERS INFO';
        $subtitle = 'computer SUBJECT INFO';
        $pages = 'hsc';
    }elseif ($teacher == 'hele') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='electrical'");
        $pagetitle = 'electrical TEACHERS INFO';
        $subtitle = 'electrical SUBJECT INFO';
        $pages = 'hsc';
    }elseif ($teacher == 'helc') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='electronic'");
        $pagetitle = 'electronic TEACHERS INFO';
        $subtitle = 'electronic SUBJECT INFO';
        $pages = 'hsc';
    }elseif ($teacher == 'hagro') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='mechanical'");
        $pagetitle = 'agro mechinary TEACHERS INFO';
        $subtitle = 'agro mechinary SUBJECT INFO';
        $pages = 'hsc';
    }elseif ($teacher == 'hwel') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='industrial'");
        $pagetitle = 'welding & fab. TEACHERS INFO';
        $subtitle = 'welding & fab. SUBJECT INFO';
        $pages = 'hsc';
    }

    // hsc vocational teacher section start
    elseif ($teacher == 'scom') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='computer'");
        $pagetitle = 'COMPUTER TEACHERS INFO';
        $subtitle = 'COMPUTER SUBJECT INFO';
        $pages = 'ssc';
    } elseif ($teacher == 'selc') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='electrical'");
        $pagetitle = 'ELECTRICAL TEACHERS INFO';
        $subtitle = 'ELECTRICAL SUBJECT INFO';
        $pages = 'ssc';
    } elseif ($teacher == 'smech') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='mechanical'");
        $pagetitle = 'MECHANICAL TEACHERS INFO';
        $subtitle = 'MECHANICAL SUBJECT INFO';
        $pages = 'ssc';
    } elseif ($teacher == 'sfarm') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='farm machinery'");
        $pagetitle = 'Farm Machinery TEACHERS INFO';
        $subtitle = 'Farm Machinery SUBJECT INFO';
        $pages = 'ssc';
    } elseif ($teacher == 'sauto') {
        $data = mysqli_query($con, "SELECT * FROM teacher WHERE category='teacher' AND department='automobile'");
        $pagetitle = 'automobile TEACHERS INFO';
        $subtitle = 'automobile SUBJECT INFO';
        $pages = 'ssc';
    }

    ?>

  <!-- navbar-section-start -->
  <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <div class="container">
        <div class="teacher-sections">
            <h3 class="border-4 mx-auto text-center py-3 d-name text-uppercase"><?php echo $pagetitle ?></h3>
            <div class="teacher-info py-4">
                <div class="row">

                    <?php while ($data_info = mysqli_fetch_array($data)) : ?>
                        <div class="col-md-4">
                            <div class="card card-profile shadow font">
                                <div class="card-avatar">
                                    <a href="javascript:;">
                                        <img class="img" src="upload_photo/teacher/<?php echo $data_info['photo'] ?>" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray text-capitalize"><?php echo $data_info['position'] ?></h6>
                                    <h5 class="card-title text-capitalize p-0"><?php echo $data_info['name'] ?></h5>
                                    <h6 class="card-category text-gray text-capitalize"><?php echo $data_info['department'] ?> technology</h6>

                                    <h6 class="card-description text-capitalize m-1 py-1"><?php echo $data_info['address'] ?></h6>
                                    <h6 class="card-description text-capitalize m-1 py-1">+88 <?php echo $data_info['contact'] ?></h6>
                                    <h6 class="card-description m-1 py-1"><?php echo $data_info['email'] ?></h6>

                                    <a href="javascript:;" class="btn btn-primary btn-round mt-2">Follow</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>

                </div>
            </div>



          <div class="student my-5">
            <h3 class="border-4 mx-auto text-center py-3 d-name text-uppercase"><?php echo $subtitle ?></h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-capitalize">
                                <th>Semester</th>
                                <th>sub_code</th>
                                <th>Subject Name</th>
                                <th>Cradit</th>
                                <th>FM</th>
                                <th>TC</th>
                                <th>TF</th>
                                <th>PC</th>
                                <th>PF</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                           $subject = $_GET['tsc'];
 
                            // diploma-in-engineering subject section start
                             if ($subject == 'com') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='computer' && section='diploma'");
                            } elseif ($subject == 'elec') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='electrical' && section='diploma'");
                            } elseif ($subject == 'mecha') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='mechanical' && section='diploma'");
                            } elseif ($subject == 'farm') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='computer' && section='diploma'");
                            } elseif ($subject == 'auto') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='computer' && section='diploma'");
                            } elseif ($subject == 'civil') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='civil' && section='diploma'");
                            }elseif ($subject == 'archi') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='architacture' && section='diploma'");
                            }elseif ($subject == 'text') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='text' && section='diploma'");
                            }
                            // HSC subject section start
                            elseif ($subject == 'hcom') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='computer' && section='hsc'");
                            }elseif ($subject == 'hele') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='electrical' && section='hsc'");
                            }elseif ($subject == 'helc') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='electronic' && section='hsc'");
                            }elseif ($subject == 'hagro') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='agro' && section='hsc'");
                            }elseif ($subject == 'hwel') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='welding' && section='hsc'");
                            }
                             // SSC subject section start
                             elseif ($subject == 'scom') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='computer' && section='ssc'");
                            }elseif ($subject == 'selc') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='electrical' && section='ssc'");
                            }elseif ($subject == 'smech') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='mechanical' && section='ssc'");
                            }elseif ($subject == 'sfarm') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='farm machinery' && section='ssc'");
                            }elseif ($subject == 'sauto') {
                                $data = mysqli_query($con, "SELECT * FROM `subject` WHERE department='automobile' && section='ssc'");
                            }

                            while ($data_info = mysqli_fetch_array($data)) :
                            ?>
                                    <tr class="text-capitalize font text-left" style="text-align:left">
                                        <td><?php echo $data_info['semester'] ?></td>
                                        <td><?php echo $data_info['code'] ?></td>
                                        <td style="text-align:left"><?php echo $data_info['name'] ?></td>
                                        <td><?php echo $data_info['cradit'] ?></td>
                                        <td><?php echo $data_info['fm'] ?></td>
                                        <td><?php echo $data_info['tc'] ?></td>
                                        <td><?php echo $data_info['tf'] ?></td>
                                        <td><?php echo $data_info['pc'] ?></td>
                                        <td><?php echo $data_info['pf'] ?></td>
                                    </tr>
                                <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

    <!-- footer-section-start -->
    <?php include('inc/footer.php') ?>
    <!-- footer-section-end -->






    <?php include('inc/script.php') ?>
</body>

</html>