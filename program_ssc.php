<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
    <!-- navbar-section-start -->
    <?php include('oparetions/db_connect.php'); 
    
    $page = 'program';
     $pages='ssc';
    ?>

    <?php include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

    <div class="container">
        <div class="rapper">

            <h4 class="text-uppercase border-4 py-3 text-center mx-auto w-50 d-name">select department</h4>

            <div class="student my-5">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=scom">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">SSc Vocational</p>
                                            <p class="text-uppercase d-name">computer</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=selc">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">SSc Vocational</p>
                                            <p class="text-uppercase d-name">electrical</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=smech">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">SSc Vocational</p>
                                            <p class="text-uppercase d-name">mechanical</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=sfarm">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">SSc Vocational</p>
                                            <p class="text-uppercase d-name">farm machinary</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=sauto">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">Vocational</p>
                                            <p class="text-uppercase d-name">automobile</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>





                    <!-- this is empty student section -->
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="#">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">empty item</p>
                                            <p class="text-uppercase d-name">empty item</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="#">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">empty item</p>
                                            <p class="text-uppercase d-name">empty item</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="#">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">empty item</p>
                                            <p class="text-uppercase d-name">empty item</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>




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