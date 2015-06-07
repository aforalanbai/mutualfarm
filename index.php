<?php include_once("includes/conn.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
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


    <!-- Header top bar -->
    <?php include_once("includes/topbar.php") ?>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <?php include_once("includes/header.php") ?>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section no-padding slider">
            <div class="container full-width">

                <div class="main-slider">
                    <div class="owl-carousel" id="main-slider">

                        <!-- Slide 1 -->
                        <div class="item slide1">
                            <img class="slide-img" src="assets/img/preview/slider/slide-1.jpg" alt=""/>
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <h2 class="caption-title">The Biggest</h2>
                                                <h3 class="caption-subtitle">Sale</h3>
                                                <p class="caption-text">
                                                    <a class="btn btn-theme" href="products-list.php">Shop Now</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 1 -->

                        <!-- Slide 2 -->
                        <div class="item slide2 alt">
                            <img class="slide-img" src="assets/img/preview/slider/slide-2.jpg" alt=""/>
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <h2 class="caption-title">Invest On a Farm Near By You</h2>
                                                <h3 class="caption-subtitle"><span>Help Farmers</span></h3>
                                                <h2 class="caption-title">Invest On Your Health</h2>
                                                <p class="caption-text">
                                                    <a class="btn btn-theme" href="myfarm.php">Invest</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 2 -->

                        <!-- Slide 3 -->
                        <div class="item slide3 dark">
                            <img class="slide-img" src="assets/img/preview/slider/slide-3.jpg" alt=""/>
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                
                                                <h3 class="caption-subtitle"><span>Community Sharing</span></h3>
                                                <p class="caption-text">
                                                    <a class="btn btn-theme" href="community.php">Community</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 3 -->
 <div class="item slide3 ">
                            <img class="slide-img" src="assets/img/Mutual-Farm.jpg" alt=""/>
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
         <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="thumbnail no-border no-padding thumbnail-banner size-3x3">
                            <div class="media">
                                <a class="media-link" href="buylands.php">
                                    <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-3.jpg')"></div>
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <h2 class="caption-title"><span>Invest in a Farmland</span></h2>
                                                <h3 class="caption-sub-title"><span>Get Returns &shy; &amp; &shy; Also Help A <b>Farmer</b></span></h3>
                                                <span class="btn btn-theme btn-theme-sm">Invest</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail no-border no-padding thumbnail-banner size-2x3">
                            <div class="media">
                                <a class="media-link" href="products-list.php">
                                    <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-4.jpg')"></div>
                                    <div class="caption text-right">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <h2 class="caption-title"><span>Fresh Organic Food</span></h2>
                                                <h3 class="caption-sub-title"><span>Eat Healthy Stay Healthy</span></h3>
                                                <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="thumbnail no-border no-padding thumbnail-banner size-2x3">
                            <div class="media">
                                <a class="media-link" href="community.php">
                                    <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-5.jpg')"></div>
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <h2 class="caption-title"><span>Share With The Community Around You</span></h2>
                                                <h3 class="caption-sub-title"><span>Nothing Feels Better Than Sharing</span></h3>
                                                <span class="btn btn-theme btn-theme-sm">Community</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="message-box">
                    <div class="message-box-inner">
                        <h2>Be The Part Of Green Revolution</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>Best Selling Product</span></h2>
                <div class="top-products-carousel">
                    <div class="owl-carousel" id="top-products-carousel">
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                <img src="assets/img/preview/shop/top-rated-1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="products-list.php">Organic Tomato</a></h4>
                            
                            <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent" href="products-list.php">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big1.jpg">
                                <img src="assets/img/preview/shop/top-rated-2.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="products-list.php">Organic Rice</a></h4>
                            
                            <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                            <div class="buttons">
                               <a class="btn btn-theme btn-theme-transparent" href="products-list.php">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big2.jpg">
                                <img src="assets/img/preview/shop/top-rated-3.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="products-list.php">Organic Mango</a></h4>
                            
                            <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent" href="products-list.php">Add to Cart</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big3.jpg">
                                <img src="assets/img/preview/shop/top-rated-4.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="products-list.php">ORganic Ginger</a></h4>
                           
                            <div class="price"><ins>₹50</ins> <del>₹60</del></div>
                            <div class="buttons">
                               
                                <a class="btn btn-theme btn-theme-transparent" href="products-list.php">Add to Cart</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big4.jpg">
                                <img src="assets/img/preview/shop/top-rated-5.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="products-list.php">Organic Lemon</a></h4>
                            
                            <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent" href="products-list.php">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big5.jpg">
                                <img src="assets/img/preview/shop/top-rated-6.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="products-list.php">Organic Horse Gram</a></h4>
                            
                            <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent" href="products-list.php">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                   
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <a class="btn btn-theme btn-title-more btn-icon-left" href="community.php"><i class="fa fa-file-text-o"></i>See All Posts</a>
                <h2 class="block-title"><span>Community Updates</span></h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="recent-post">
                            <div class="media">
                                <a class="pull-left media-link" href="community.php">
                                    <img class="media-object" src="assets/img/preview/blog/recent-post-1.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <p class="media-category"><a href="community.php">Banana</a></p>
                                    <h4 class="media-heading Price"><a href="community.php">₹20</a></h4>
                                    Fresh homely farmed bananas worth 2 kgs for 20 rupees.
                                    <div class="media-meta">
                                        6th June 2015
                                        <span class="divider">/</span><a href="community.php"><i class="fa fa-comment"></i>27</a>
                                        <span class="divider">/</span><a href="">670564</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="recent-post">
                            <div class="media">
                                <a class="pull-left media-link" href="community.php">
                                    <img class="media-object" src="assets/img/preview/blog/recent-post-2.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <p class="media-category"><a href="community.php">Coconut</a></p>
                                    <h4 class="media-heading"><a href="community.php">₹60</a></h4>
                                    7kgs of coconut for 60 rupees.
                                    <div class="media-meta">
                                        6th June 2015
                                        <span class="divider">/</span><a href="community.php"><i class="fa fa-comment"></i>27</a>
                                        <span class="divider">/</span><a href="community.php">682041</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="recent-post">
                            <div class="media">
                                <a class="pull-left media-link" href="community.php">
                                    <img class="media-object" src="assets/img/preview/blog/recent-post-3.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <p class="media-category"><a href="community.php">Beetroot</a></p>
                                    <h4 class="media-heading price"><a href="community.php">₹5</a></h4>
                                    1kg beetroot for 5 rupees.
                                    <div class="media-meta">
                                        6th June 2015
                                        <span class="divider">/</span><a href="community.php"><i class="fa fa-comment"></i>27</a>
                                        <span class="divider">/</span><a href="community.php">401202</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="recent-post">
                            <div class="media">
                                <a class="pull-left media-link" href="community.php">
                                    <img class="media-object" src="assets/img/preview/blog/recent-post-4.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <p class="media-category"> <a href="community.php">Drumstick</a></p>
                                    <h4 class="media-heading"><a href="community.php">₹15</a></h4>
                                    1.5 kg of drumstick for 15 rupees.
                                    <div class="media-meta">
                                        6th June 2014
                                        <span class="divider">/</span><a href="community.php"><i class="fa fa-comment"></i>27</a>
                                        <span class="divider">/</span><a href="community.php">682022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="products-list.php">See All</a>
                            <h4 class="block-title"><span>Fruits</span></h4>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=fruit">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-1.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=fruit">Papaya</a></h4>
                                   
                                    <div class="price"><ins>₹20.00</ins> <del>₹25.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=fruit">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=fruit">Custard Apple</a></h4>
                                    
                                    <div class="price"><ins>₹50.00</ins> <del>₹55.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=fruit">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=fruit">Guava</a></h4>
                                   
                                    <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="products-list.php?ct=vegetable">See All</a>
                            <h4 class="block-title"><span>Vegetables</span></h4>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=vegetable">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-4.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=vegetable">Colocasia</a></h4>
                                   
                                    <div class="price"><ins>₹15.00</ins> <del>₹25.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-5.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=vegetable">Tapioca</a></h4>
                                    
                                    <div class="price"><ins>₹20.00</ins> <del>₹25.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=vegetable">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-6.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=vegetable">Black Peper</a></h4>
                                    
                                    <div class="price"><ins>₹30.00</ins> <del>₹45.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="products-list.php?ct=grocery">See All</a>
                            <h4 class="block-title"><span>Groceries</span></h4>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=grocery">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-7.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=grocery">Toor Dal</a></h4>
                                   
                                    <div class="price"><ins>₹60.00</ins> <del>₹65.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=grocery">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-8.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=grocery">Wheat</a></h4>
                                    
                                    <div class="price"><ins>₹40.00</ins> <del>₹45.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left media-link" href="products-list.php?ct=grocery">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-9.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="products-list.php?ct=grocery">Basmati Rice</a></h4>
                                    <div class="rating">
                                     
                                    <div class="price"><ins>₹90.00</ins> <del>₹95.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
<?php include_once("includes/3box.php") ?>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php include_once ("includes/footer.php") ?>
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
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
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


</html>