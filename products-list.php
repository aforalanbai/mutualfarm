<!DOCTYPE html>
<html lang="en">
<?php include_once 'includes/conn.php'; ?>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Cart</title>

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

    <link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

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
    <?php include 'includes/topbar.php';?>
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
                    <h1>Organic Store</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href=javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    <li class="active">Online Cart</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">


                        <!-- Products grid -->
                        <div class="row products grid">
                            <?php
                            $i=0;
                            $a=array();
                            if(isset($_REQUEST['ct'])){
                                $q="SELECT * FROM product WHERE pcategory=:pcategory";
                                $a[':pcategory'] = $_REQUEST['ct'];
                            }
                            else{
                                $q="SELECT * FROM product";
                            }

                            $query=$pdo->prepare($q);
                            $query->execute($a);
                            while($res=$query->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img style="width: 273px;height: 240px" src="assets/img/akhil/<?=$res['pimage']?>" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i></strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><?=$res['pname']?></h4>
                                        <div class="price">
                                            <ins>₹<?=$res['pprice']?>/Kg</ins>
                                        </div>
                                        <div class="buttons">
                                         <div class="qntytybox"><span>Qty</span><input type="number" maxlength="2" value="1" id="quantity<?=$i?>"></div>
                                        <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:addtocart(<?=$i,',',$res['pid'],',&#34;',$res['pname'],'&#34;,',$res['pprice'],',',$res['pavailable'],',&#34;',$res['pimage'],'&#34;'?>)"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $i++;
                            }
                            ?>
                        </div>
                        <!-- /Products grid -->

                    </div>
                    <!-- /CONTENT -->
                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget search -->
                        <!-- /widget search -->
                        <!-- widget shop categories -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Fruits</a>
                                        <ul class="children">
                                            <?php
                                            $queryfruits = $db->query("select * from product where pcategory = 'fruit'");
                                            while($queryfruitsarray = $queryfruits->fetch(PDO::FETCH_ASSOC))
                                            {
                                                ?>
                                                <li>
                                                    <a href="javascript:void(0)"><?php echo $queryfruitsarray['pname'] ?>
                                                        <span class="count"><?php echo $queryfruitsarray['pavailable'] ?></span>
                                                    </a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Grocery</a>
                                        <ul class="children">
                                            <?php
                                            $queryfruits = $db->query("select * from product where pcategory = 'grocery'");
                                            while($queryfruitsarray = $queryfruits->fetch(PDO::FETCH_ASSOC))
                                            {
                                                ?>
                                                <li>
                                                    <a href="javascript:void(0)"><?php echo $queryfruitsarray['pname'] ?>
                                                        <span class="count"><?php echo $queryfruitsarray['pavailable'] ?></span>
                                                    </a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Vegetables</a>
                                        <ul class="children">
                                            <?php
                                            $queryfruits = $db->query("select * from product where pcategory = 'vegetable'");
                                            while($queryfruitsarray = $queryfruits->fetch(PDO::FETCH_ASSOC))
                                            {
                                                ?>
                                                <li>
                                                    <a href="javascript:void(0)"><?php echo $queryfruitsarray['pname'] ?>
                                                        <span class="count"><?php echo $queryfruitsarray['pavailable'] ?></span>
                                                    </a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget shop categories -->

                        <!-- widget price filter -->
                        <div class="widget widget-filter-price">
                            <h4 class="widget-title">Price</h4>
                            <div class="widget-content">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly />
                                <button class="btn btn-theme">Filter</button>
                            </div>
                        </div>
                        <!-- /widget price filter -->

                        <!-- widget tag cloud -->
                        <div class="widget widget-tag-cloud">
                            <a class="btn btn-theme btn-title-more" href="javascript:void(0)">See All</a>
                            <h4 class="widget-title"><span>Tags</span></h4>
                            <ul>
                                <li><a href="#">Fruits</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Groceries</a></li>
                                <li><a href="#">Onion</a></li>
                                <li><a href="#">Potato</a></li>
                                <li><a href="#">Rice</a></li>
                                <li><a href="#">Wheat</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Orange</a></li>
                                <li><a href="#">Banana</a></li>
                                <li><a href="#">Tomato</a></li>
                            </ul>
                        </div>
                        <!-- /widget tag cloud -->


                    </aside>
                    <!-- /SIDEBAR -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        <?php include 'includes/3box.php'; ?>
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
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/jquery.sticky.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/smooth-scrollbar.min.js"></script>

<!-- JS Page Level -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="assets/js/theme.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<!--<script src="assets/js/theme-config.js"></script>-->
<!--<![endif]-->

</body>

<!-- Mirrored from eazzy.me/html/bella-men/category-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:47:39 GMT -->
</html>