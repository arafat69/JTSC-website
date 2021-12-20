<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>

    <?php include('oparetions/db_connect.php'); 
    
    $page = 'academic';
     $pages='result';
    
    ?>
    <!-- navbar-section-start -->
    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->


    <!-- result start -->
    <div class="container">
        <div class="rapper">

            <h4 class="text-uppercase border-4 py-3 text-center mx-auto w-50 d-name">results</h4>

            <div class="student my-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-capitalize">
                                <th>No</th>
                                <th>date</th>
                                <th>title</th>
                                <th>department</th>
                                <th>semester</th>
                                <th>file</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $data = mysqli_query($con, "SELECT * FROM results ORDER BY id DESC");
                            $i = 1;
                            while ($data_info = mysqli_fetch_array($data)) :
                            ?>
                                <tr class="text-capitalize">
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data_info['date'] ?></td>
                                    <td><a target="_blank" href="upload_photo/results/<?php echo $data_info['photo'] ?>"><?php echo $data_info['title'] ?></a></td>
                                    <td><?php echo $data_info['department'] ?></td>
                                    <td><?php echo $data_info['semester'] ?></td>
                                    <td><a target="_blank" href="upload_photo/results/<?php echo $data_info['photo'] ?>" class="btn btn-info btn-sm" download="<?php echo $data_info['title'] ?>" title="Download File"><i class="fa fa-download" aria-hidden="true"></i></a></td>
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