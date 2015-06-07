<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MutualFarm Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/theme-green-1.css" rel="stylesheet" id="theme-config-link">

    <!-- Head Libs -->
    <script src="assets/plugins/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->

<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

    <!-- Popup: Shopping cart items -->
<!--   --><?php //include 'includes/topbar.php';?>
    <!-- /Header top bar -->

    <!-- HEADER -->
<!--   --><?php //include 'includes/header.php';?>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="block-title"><span>Login</span></h3>
                        <form action="#" class="form-login">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, welcome to your account</span>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="text" id="username" placeholder="User name or email"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" type="password" id="password" placeholder="Your password"></div>
                                </div>
                                <div class="col-md-12 col-lg-6">
<!--                                    <div class="checkbox">-->
<!--                                        <label><input type="checkbox"> Remember me</label>-->
<!--                                    </div>-->
                                </div>
                                <div class="col-md-12 col-lg-6 text-right-lg">
                                    <a class="forgot-password" href="#">forgot password?</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-theme btn-block btn-theme-dark" href="javascript:authenticate()">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="block-title"><span>Create New Account</span></h3>
                        <form action="#" class="create-account">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Create Your Account on MutualFarm</span>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="block-title">Signup Today and You'll be able to</h3>
                                    <ul class="list-check">
                                        <li>Organic market Access</li>
                                        <li>99 Cents of land free</li>
                                        <li>Harvest farms at any time</li>
                                        <li>Sign up to receive exclusive news and private sales</li>
                                        <li>Quick Buy Stuffs</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-block btn-theme btn-theme-dark btn-create" href="register.php">Create Account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->


    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
   <?php include 'includes/footer.php'; ?>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<!-- JS Global -->
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.min.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/jquery.sticky.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/smooth-scrollbar.min.js"></script>

<!-- JS Page Level -->
<script src="assets/js/theme.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<!--<script src="assets/js/theme-config.js"></script>-->
<!--<![endif]-->


</body>
</html>