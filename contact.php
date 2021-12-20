<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Jhenaidah Technical School and college</title>
    <?php include('inc/css.php')?>
</head>

<body>
    <!-- navbar-section-start -->
    <?php 
     include('oparetions/db_connect.php'); 
     $page='contact';
     include('inc/navbar.php') ?>
    <!-- navbar-section-end -->

        <!-- TEACHERS & OFFICERS INFO start -->
        <div class="container">
         <div class="rapper" style="font-family: 'Roboto Slab', serif;">

            <div class="about p-4">
           <div class="row">
               <div class="col-md-6">
                   <h2 class="">About Information:</h2>
                   <h3 class=" text-muted">Information Officer:</h3>
                   <h5 class="text-muted">md. arafat ali</h5>
                   <h5 class="text-muted">Contact No: 01704039173</h5>
               </div>
               <div class="col-md-6 text-right">
                <h2 class="">About Information:</h2>
                <h3 class="text-muted">Appeal Authority:</h3>
                <h5 class="text-muted">md. arafat ali</h5>
                <h5 class="text-muted">Contact No: 01704039173</h5>
               </div>
           </div>
        </div>

  <div class="google-map py-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1828.9520457910037!2d89.17240212218002!3d23.53595170664173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fee5d813e24bbb%3A0xd4c1bf15e035b309!2sJhenaidah%20technical%20school%20and%20college!5e0!3m2!1sen!2sbd!4v1602426743901!5m2!1sen!2sbd"
     width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

         </div>
    
        </div>

        <!-- footer-section-start -->
        <?php include('inc/footer.php') ?>
        <!-- footer-section-end -->






        <?php include('inc/script.php')?>
</body>

</html>