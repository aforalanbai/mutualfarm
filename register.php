<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

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
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
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
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3 class="block-title"><span>Create New Account</span></h3>
                        <form action="php/service.php?action=register" method="post" class="form-login">
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Create Your Account on MutualFarm</span>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="text" id="username" name="username" onblur="checkuser()" placeholder="User name" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="Password" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="password" id="passwordcnf"  onblur="checkpassword()" placeholder="Confirm - Password" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="text" id="firstname" name="firstname" placeholder="First Name" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last Name" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="email" id="email" name="email" onblur="checkemail()" placeholder="Email Address" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><input class="form-control" type="number" id="phone" name="phone" pattern="/[2-9]{2}\d{8}/" title="10 digit mobile number without country code" placeholder="Mobile Number (without country code)" required></div>
                                </div>
                                <div class="col-md-12"><div class="form-group"><textarea class="form-control" name="address" placeholder="Full Address" required></textarea></div>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" value="Register" class="btn btn-block btn-theme btn-theme-dark btn-create">
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