<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php') ?>
</head>

<body>
    <!-- navbar-section-start -->
    <?php
    include('oparetions/db_connect.php');
    $page = 'about';
    include('inc/navbar.php') ?>
    <!-- navbar-section-end -->
    <div class="container">
        <h3 class="border-4 w-75 text-center mx-auto mb-4 d-name pt-3">ABOUT</h3>
        <div class="row">
            <div class="col-md-10 mx-auto">

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="vision">
                            <h3 class="py-3">Vision & Mission:</h3>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="vision-text">
                                        <h5><u>Our Vision</u></h5>
                                        <span>A leading Technical- vocational Training Institution committed to catalyze change through development
                                            of highly skilled manpower with positive work values.</span>
                                        <h5><u>Our Mission</u></h5>
                                        <li>To produce an ideal citizenry equipped with technical skills which are contributory
                                            to the development of the community.</li>
                                        <li>To develop mutual cooperation with the industry towards the development of relevant
                                            and responsive technical-vocational programs.</li>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="vision-img">
                                        <img src="about-image/vision.jpg" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="history">
                            <h3 class="py-3">History & Background:</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="history-img">
                                        <img src="about-image/history.jpg" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="history-text">
                                        <p>The Government Vocational Training Institute was established in 1975 on 362 acres of land in the heart of Jhenaidah city. At that time training was given on 2 years basic trade course. Later SSC (Vocational) course was introduced from 1995. Following this, HSC (Vocational) course was introduced from 1996. Although 2 trades were introduced from 1985 to 1996, a total of 4 trades were introduced from 1996. Later,
                                            from 2003, the Vocational Training Institute was upgraded to a government technical school and college.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="history">
                            <h3 class="py-3">Library:</h3>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="history-text">
                                        <p>আমাদের লাইব্রেরীতে অনেক বই রয়েছে এর মধ্যে</p>
                                        <p>লানিং মেটরিয়াল বিভিন্ন শ্রেণীর বই কম্পিটার শিক্ষার বই আইন-কানুন সম্পর্কিত বই ধর্মীয় বই গল্পের বই ইত্যাদী
                                            ইহার চার্জে আছেন<br>
                                            মোছা: শারমিন আরা পারভিন <br>
                                            ০১৭২০৫৭২৯৯৯
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="history-img">
                                        <img src="about-image/laibary.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="history">
                            <h3 class="py-3">Play Ground:</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="history-img">
                                        <img src="about-image/playground.jpg" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="history-text">
                                        <p>আমাদের রয়েছে একটি বিশাল খোলার মাঠ প্রায় ১৫০*৭৫ বর্গ মিটার</p>
                                        <p>তবে অতি বৃষ্টিতে এই মাঠ পানি জমে থাকার ফলে বর্ষাকালে খেলাধুলা করা যায় না।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="Campus">
                            <h3 class="py-3">Campus:</h3>
                            <p>Land and building Information:</p>
                            <div class="Campus-text">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Total Land</td>
                                        <td>4.0550 acors</td>
                                    </tr>
                                    <tr>
                                        <td>Building</td>
                                        <td>09 Nos.</td>
                                    </tr>
                                    <tr>
                                        <td>Tin Sheed</td>
                                        <td>01 No.</td>
                                    </tr>
                                    <tr>
                                        <td>Class Room</td>
                                        <td>10 Nos.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="Campus">
                            <h3 class="py-3">Administrative building :</h3>
                            <div class="Campus-text">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Principal Room</td>
                                        <td>01 No.</td>
                                    </tr>
                                    <tr>
                                        <td>Academic Room</td>
                                        <td>01 No.</td>
                                    </tr>
                                    <tr>
                                        <td>Chief instructor’s room</td>
                                        <td>01 No.</td>
                                    </tr>
                                    <tr>
                                        <td>Teacher’s room</td>
                                        <td>01 No.</td>
                                    </tr>
                                    <tr>
                                        <td>Office room</td>
                                        <td>01 No.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="Campus">
                            <h3 class="py-3">Quarter:</h3>
                            <div class="Campus-text">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Super quarter (Principal Live here)</td>
                                        <td>01 No.</td>
                                        <td>500 sqft</td>
                                    </tr>
                                    <tr>
                                        <td>Teacher/office staff</td>
                                        <td>01 No.</td>
                                        <td>1200 sqft</td>
                                    </tr>
                                    <tr>
                                        <td>Bicycle garage</td>
                                        <td>01 No.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Play ground</td>
                                        <td>01 No.</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="Campus">
                            <h3 class="py-3">Shop and lab Information:</h3>
                            <div class="Campus-text">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name of the shop</th>
                                        <th>No. of shop/lab</th>
                                        <th>Corridor</th>
                                    </tr>
                                    <tr>
                                        <td>Computer lab</td>
                                        <td>01</td>
                                        <td>01</td>
                                    </tr>
                                    <tr>
                                        <td>Science lab </td>
                                        <td>01</td>
                                        <td>01</td>
                                    </tr>
                                    <tr>
                                        <td>Electrical shop</td>
                                        <td>01</td>
                                        <td>02</td>
                                    </tr>
                                    <tr>
                                        <td>Farm machinery shop</td>
                                        <td>01</td>
                                        <td>02</td>
                                    </tr>
                                    <tr>
                                        <td>Library</td>
                                        <td>01</td>
                                        <td>01</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body font">
                        <div class="history">
                            <h3 class="py-3">Address:</h3>
                            <p>Government  Technical School and College Jhenaidah 7300. </p>
                            <p>EIIN No. 132882, BTEB Code: 25039</p>
                            <p><b>Email : </b> <a href="mailTo:jhenidah.tsc@gmail.com">jhenidah.tsc@gmail.com</a></p>
                            <p><b>Phone : </b> 0451-62144</p>
                            <p><b>Web :</b> <a target="_blank" href="http://www.tscjhenaidah.com">www.tscjhenaidah.com</a></p>
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