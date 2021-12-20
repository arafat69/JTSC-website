<?php
session_start();

if (isset($_SESSION['first_name'])) {
    header('location:dashboard.php');
}

include('../oparetions/db_connect.php');

if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $data = mysqli_query($con, "SELECT * FROM admin_info WHERE email='$email' AND `password`='$password'");

    $admin_num = mysqli_num_rows($data);

    $admin_info = mysqli_fetch_array($data);


    if ($admin_num == 1) {
        
        $_SESSION['first_name']= $admin_info['first_name'];
        $_SESSION['last_name']= $admin_info['last_name'];
        $_SESSION['picture']= $admin_info['picture'];

        header('location: dashboard.php');

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashbord | Jhenaidah Technical School and college</title>

    <!-- Bootstrap Core CSS -->
    <link href="login/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="login/css/toastr.min.css"> -->
    <link rel="stylesheet" href="login/css/animate.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel animated panel panel-default shake" style="margin-top: 80px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Login </h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block" id="btn">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('#btn').addEventListener('click', function(e) {
            var panel = document.querySelector('.panel');

            panel.className += ' shake';

            setTimeout(function() {
                panel.classList.remove('shake');
            }, 2000)


        })
    </script>


    <!-- jQuery -->
    <script src="login/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="login/js/bootstrap.min.js"></script>

    <script src="login/js/toastr.js"></script>
</body>

</html>