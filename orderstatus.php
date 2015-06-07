<!DOCTYPE html>
<html lang="en">
<?php include_once 'includes/conn.php'; ?>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Organic Cart</title>

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
    <?php include 'includes/topbar.php'; ?>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <?php include 'includes/header.php'; ?>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Order Status</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    <li class="active">Order Status</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="products list">
                    <!-- / -->
                    <?php
                    $query=$pdo->prepare("SELECT o.*,p.pimage FROM orders o LEFT JOIN product p ON o.pid=p.pid WHERE uid=:uid");
                    $query->execute(array(
                        ':uid' => $_SESSION['user']['uid'],
                    ));
                    while($res=$query->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="thumbnail no-border no-padding">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="media">
                                        <a class="media-link" href="javascript:void(0)">
                                            <img src="assets/img/akhil/<?= $res['pimage'] ?>" style="height: 270px"
                                                 alt="<?= $res['pname'] ?>"/>
                                                        <span class="icon-view"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="caption">
                                        <h4 class="caption-title"
                                            style="text-transform: capitalize"><?= $res['pname'] ?></h4>

                                        <div class="overflowed">
                                            <div class="availability">Quantity:<?= $res['pquantity'] ?></div>
                                            <div class="price">
                                                <ins>₹<?= $res['oprice'] ?></ins>
                                            </div>
                                        </div>
                                        <div class="caption-text">
                                            <?php
                                            $d1 = date("Y/m/d", strtotime($res['oconfirm']));
                                            $d2 = date("Y/m/d", strtotime($res['odispatch']));
                                            $d3 = date("Y/m/d", strtotime($res['odelivery']));

                                            if ($d1 == "1970/01/01") {
                                                echo '<p style="font-size: 0.9em;font-weight: bold;">Order Confirmed on  : Not Yet</p>';
                                            } else {
                                                echo '<p style="font-size: 0.9em;font-weight: bold;">Order Confirmed on  :' . $d1 . '</p>';
                                            }

                                            if ($d2 == "1970/01/01") {
                                                echo '<p style="font-size: 0.9em;font-weight: bold;">Dispatched For Delivey On  : Not Yet</p>';
                                            } else {
                                                echo '<p style="font-size: 0.9em;font-weight: bold;">Dispatched For Delivey On  :' . $d2 . '</p>';
                                            }

                                            if ($d3 == "1970/01/01") {
                                                echo '<p style="font-size: 0.9em;font-weight: bold;">Delivered On  : Not Yet</p>';
                                            } else {
                                                echo '<p style="font-size: 0.9em;font-weight: bold;">Delivered On  :' . $d3 . '</p>';
                                            } ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

<!--                        <div class="col-sm-4 col-sm-offset-4">-->
<!--                        <p>Please Enter your Order ID</p>-->
<!--                        <form action="orderstatus.php" method="get">-->
<!--                            <div class="form-group">-->
<!--                                <input class="form-control" name="order_id" type="text" placeholder="Enter Your Order ID"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <button type="submit" class="btn btn-theme btn-theme-transparent">Check</button>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                        </div>-->
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <?php include "includes/3box.php"; ?>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php include "includes/footer.php";?>
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
<!--<![endif]-->

</body>

<!-- Mirrored from eazzy.me/html/bella-men/compare-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:46:30 GMT -->
</html>