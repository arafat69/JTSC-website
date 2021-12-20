<div class="footer-top text-light py-5 mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contact my-2">
                    <h4 class="font-weight-normal">CONTACT US</h4>
                    <p class="font-14 m-0">Jhenaidah Technical School & college</p>
                    <p class="m-0">Address : Hamdah, Jhenaidah.</p>
                    <p class="m-0">Phone : 0451-62144</p>
                    <p class="m-0">E-mail : <a href="mailTo:jhenidah.tsc@gmail.com" target="_blanck" class="text-light">jhenidah.tsc@gmail.com</a></p>
                    <p class="m-0">Website : <a href="http://www.tscjhenaidah.com" target="_blanck" class="text-light">www.tscjhenaidah.com</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact my-2">
                    <h4 class="font-weight-normal">IMPORTANT LINKS</h4>
                    <ul class="pl-3 m-0">
                        <li><a href="http://www.bteb.gov.bd/" target="_blanck" class="text-light m-0">BTEB (bteb.gov.bd)</a></li>
                        <li><a href="http://www.tmed.gov.bd/" target="_blanck" class="text-light">TMED (www.tmed.gov.bd)</a></li>
                        <li><a href="http://www.techedu.gov.bd/" target="_blanck" class="text-light">Techedu (www.techedu.gov.bd)</a></li>
                        <li><a href="http://moedu.gov.bd/" target="_blanck" class="text-light">Moedu (moedu.gov.bd)</a></li>
                        <li><a href="http://www.jhenaidah.gov.bd/" target="_blanck" class="text-light">Jhenidah District</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact my-2">
                    <h4 class="font-weight-normal">ACADEMIC</h4>
                    <ul class="pl-3 m-0">
                        <li><a href="notice.php" class="text-light">Notice</a></li>
                        <li><a href="result.php" class="text-light">Result</a></li>
                        <li><a href="routine.php" class="text-light">Class Routine</a></li>
                        <li><a href="exam.php" class="text-light">Exam Routine</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3">
                <?php
                $fdata = mysqli_query($con, "SELECT * FROM banner WHERE logo ='flogo'");
                $fdata_info = mysqli_fetch_array($fdata);
                ?>
                <div class="contact my-2">
                    <img src="upload_photo/banner/<?php echo $fdata_info['photo']?>" alt="" width="160" height="160">
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="card">
    <div class="card-footer text-muted">
        <p class="m-0">Copyright &copy; All Right Reserved <?php echo Date('Y') ?>. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>
</footer>