<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>

    <?php include('oparetions/db_connect.php');
     $page = 'academic';
     $pages='notice';
     ?>
    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->


    <!-- notice start -->
    <div class="container">
        <div class="rapper">

            <h4 class="text-uppercase border-4 py-3 text-center mx-auto d-name">NOTICE BOARD</h4>

            <div class="student my-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-capitalize">
                                <th>No</th>
                                <th>date</th>
                                <th>title</th>
                                <th>file</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $data = mysqli_query($con, "SELECT * FROM notices ORDER BY id DESC");
                            $i = 1;
                            while ($data_info = mysqli_fetch_array($data)) :
                            ?>
                                <tr class="text-capitalize font">
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data_info['date'] ?></td>
                                    <td><a target="_blank" href="upload_photo/notices/<?php echo $data_info['photo'] ?>"><?php echo $data_info['title'] ?></a></td>
                                    <td><a target="_blank" href="upload_photo/notices/<?php echo $data_info['photo'] ?>" class="btn btn-info btn-sm" download="<?php echo $data_info['title'] ?>" title="Download File"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php $i++;
                            endwhile ?>
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