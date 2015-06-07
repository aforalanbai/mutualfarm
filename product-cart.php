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
    <div class="content-area" id="mainpage">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Organic Market</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    <li class="active">Organic Cart</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">

                <h3 class="block-title alt"><i class="fa fa-angle-down color"></i>1. Orders</h3>
                <div class="row orders">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Product Name</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody id="product-cart">

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="block-title"><span>Shopping cart</span></h3>
                        <div class="shopping-cart">
                            <table id="billamount">
                                <tr>
                                    <td>Sub-total:</td>
                                    <td id="sub-total"></td>
                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td>₹0</td>
                                </tr>
                                <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td id="totalamount"></td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>

                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>2. Delivery address</h3>
                <form action="#" class="form-delivery">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" type="text" placeholder="First Name"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Last Name"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Address"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                    data-toggle="tooltip" title="Select">
                                    <option>Country</option>
                                    <option>Country</option>
                                    <option>Country</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                    data-toggle="tooltip" title="Select">
                                    <option>City</option>
                                    <option>City</option>
                                    <option>City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Postcode/ZIP"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Email"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Phone Number"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><textarea class="form-control" placeholder="Addıtıonal Informatıon" name="name" id="id" cols="30" rows="10"></textarea></div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Ship to  Different address for invoice
                                </label>
                            </div>
                        </div>
                    </div>
                </form>

                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Payment</h3>
                <div class="panel-group payments-options" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel radio panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="dot"></span> Direct Bank Transfer
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                <div class="alert alert-success" role="alert">
                                    Online transactions can be done through neft,adding online banking accounts etc.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="dot"></span> Cheque Payment
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="dot"></span> Credit Card
                                </a>
                                <span class="overflowed pull-right">
                                    <img src="assets/img/preview/payments/mastercard-2.jpg" alt=""/>
                                    <img src="assets/img/preview/payments/visa-2.jpg" alt=""/>
                                    <img src="assets/img/preview/payments/american-express-2.jpg" alt=""/>
                                    <img src="assets/img/preview/payments/discovery-2.jpg" alt=""/>
                                    <img src="assets/img/preview/payments/eheck-2.jpg" alt=""/>
                                </span>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3"></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <span class="dot"></span> PayPal
                                </a>
                                <span class="overflowed pull-right"><img src="assets/img/preview/payments/paypal-2.jpg" alt=""/></span>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4"></div>
                    </div>
                </div>
                <div class="overflowed">
                    <a class="btn btn-theme btn-theme-dark" href="#">Home Page</a>
                    <a class="btn btn-theme pull-right" href="javascript:checkout()">Place Order</a>
                </div>


            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row blocks shop-info-banners">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-gift"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Buy 1 Get 1</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-comments"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Call to Free</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Money Back!</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <div id="messagearea" style="display: none;font-size: x-large;text-align: center; margin: 30px;">

    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">News Letter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Private Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-tag-cloud">
                            <h4 class="widget-title">Item Tags</h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Top Sellers</a></li>
                                <li><a href="#">E commerce</a></li>
                                <li><a href="#">Hot Deals</a></li>
                                <li><a href="#">Supplier</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Website</a></li>
                                <li><a href="#">Isamercan</a></li>
                                <li><a href="#">Themeforest</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="copyright">Copyright 2014 BELLA SHOP   |   All Rights Reserved   |   Designed By Jthemes</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payments">
                            <ul>
                                <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
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

<script>
    $(document).ready(function(){
        loadcartmain();
    });
</script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<!--<script src="assets/js/theme-config.js"></script>-->
<!--<![endif]-->

</body>

<!-- Mirrored from eazzy.me/html/bella-men/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:46:06 GMT -->
</html>