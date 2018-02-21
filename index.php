<?php
    include 'login.php';
    if(isset($_SESSION['login_user'])){
        header("location: usuario.php");
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php

    ?>
    <div class="container">

        <!--Section: Live preview-->
        <section class="form-simple">

            <!--Form with header-->
            <div class="card">

                <!--Header-->
                <div class="header pt-3 grey lighten-2">

                    <div class="row d-flex justify-content-start">
                        <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Patata art photography</h3>
                    </div>

                </div>
                <!--Header-->

                <div class="card-body mx-4 mt-4">

                    <!--Body-->
                    <span><?php echo $error; ?></span>

                    <form name="formulario" method="POST" action="login.php">
                        <div class="md-form">

                            <input type="text" name="usuario" id="Form-email4" class="form-control">
                            <label for="Form-email4">Your usuario</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" name="pass" id="Form-pass4" class="form-control">
                            <label for="Form-pass4">Your password</label>
                            <p class="font-small grey-text d-flex justify-content-end">Forgot <a href="#" class="dark-grey-text font-bold ml-1"> Password?</a></p>
                        </div>

                        <div class="text-center mb-4">
                            <button type="submit" name="btnlogin" class="btn btn-danger btn-block z-depth-2">Log in</button>
                        </div>
                        <p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="#" class="dark-grey-text font-bold ml-1"> Sign up</a></p>
                    </form>
                </div>

            </div>
            <!--/Form with header-->

        </section>
        <!--Section: Live preview-->
    </div>
    <!-- Form contact -->
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>