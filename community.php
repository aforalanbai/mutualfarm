<?php include_once("includes/conn.php") ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Community</title>

  
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

   
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

    <link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

   
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/theme-green-1.css" rel="stylesheet" id="theme-config-link">

   
    <script src="assets/plugins/modernizr.custom.js"></script>

    
</head>
<body id="home" class="wide">

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

<div class="wrapper">

<?php include_once("includes/topbar.php") ?>

<?php include_once("includes/header.php") ?>


<div class="content-area">

       
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Community</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    
                    <li class="active">Community</li>
                </ul>
            </div>
        </section>
        <section class="page-section no-padding no-bottom-space">
            <div class="container full-width">

                <!-- Google map -->
                <div class="google-map">
                    <div id="map-canvas"></div>
                </div>
                <!-- /Google map -->

            </div>
        </section>
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    
                    <aside class="col-md-3 sidebar" id="sidebar">
                        
                        <div class="widget">
                            <div class="widget-search">
                                <input class="form-control" type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Fruit</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Banana
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackfruit
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Papaya
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Coconut
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Mango
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Vegetables</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">colocasia
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Tapioca
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Beetroot
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Cucumber
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pumpkin
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Groceries</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Rice
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Wheat
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Dal
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Top Sellers</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Tapioca
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Mango
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Banana
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Coconut
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Rice
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        
                        <div class="widget widget-filter-price">
                            <h4 class="widget-title">Price</h4>
                            <div class="widget-content">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly />
                                <button class="btn btn-theme">Filter</button>
                            </div>
                        </div>
                        
                      
                        <!-- /widget shop hot deals -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                       

                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                <div class="col-sm-8">
                                    
                                </div>
                              
                            </div>
                        </div>
                        <!-- /shop-sorting -->

                        <!-- Products List -->
                        <div class="products list">
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-1l.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Banana</h4>
                                           
                                               
                                            
                                            <div class="overflowed availability" href="#">Quantity:<strong> 16 &shy; Kg</strong></div><br>
                                            
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong></div>
                                                <div class="price"><ins>₹100.00</ins></div>
                                            </div>
                                            <div class="caption-text">Freshly plucked bananas at just 100 rupees</div>
                                             <div class="price">Pin:<ins>682022</ins></div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-phone"></i>8548954854</a><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-user"></i>John Doe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                            <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-1l2.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Papaya</h4>
                                           
                                               
                                            
                                            <div class="overflowed availability" href="#">Quantity:<strong> 4 &shy; Kg</strong></div><br>
                                            
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong></div>
                                                <div class="price"><ins>₹40.00</ins></div>
                                            </div>
                                            <div class="caption-text">Freshly plucked Papaya at just 40 rupees</div>
                                             <div class="price">Pin:<ins>682022</ins></div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-phone"></i>8548954854</a><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-user"></i>John Doe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / -->
                           <div class="thumbnail no-border no-padding">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-1l1.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                            <h4 class="caption-title">Pineapple</h4>
                                           
                                               
                                            
                                            <div class="overflowed availability" href="#">Quantity:<strong> 10 &shy; Kg</strong></div><br>
                                            
                                            <div class="overflowed">
                                                <div class="availability">Availability: <strong>In stock</strong></div>
                                                <div class="price"><ins>₹150.00</ins></div>
                                            </div>
                                            <div class="caption-text">Freshly plucked pineapple at just 150 rupees</div>
                                             <div class="price">Pin:<ins>682022</ins></div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-phone"></i>8548954854</a><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-user"></i>John Doe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       

                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        <?php include_once("includes/3box.php") ?>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
<?php include_once("includes/footer.php") ?>;


<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>

<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.min.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/jquery.sticky.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/smooth-scrollbar.min.js"></script>


<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="assets/js/theme.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


<script src="assets/plugins/jquery.cookie.js"></script>

</body>


</html>