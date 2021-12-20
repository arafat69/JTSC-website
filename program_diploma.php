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
     $pages='dip';
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
                            <a href="technology.php?tsc=com">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">computer</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=elec">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">electrical</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=civil">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">Civil</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=mecha">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">mechanical</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=text">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">textile</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=archi">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">architecture</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

  
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=food">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">Food</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="student-item mx-auto shadow">
                            <a href="technology.php?tsc=ind">
                                <div class="card bg-color text-center">
                                    <div class="card-body">
                                        <div class="student-icon">
                                            <i class="fas styicon fa-graduation-cap"></i>
                                        </div>
                                        <div class="department">
                                            <p class="text-capitalize d-name txt-sm p-1 m-0">diploma-in-engineering</p>
                                            <p class="text-uppercase d-name">industrial</p>
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