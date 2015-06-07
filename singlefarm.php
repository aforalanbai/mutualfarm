<?php include("includes/conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eazzy.me/html/bella-men/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:47:55 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Single Farm</title>

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
    <link href="assets/css/alan.css" rel="stylesheet">


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
    <?php include_once ('includes/topbar.php') ?>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <?php include_once ('includes/header.php') ?>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">
        <?php
        $farmidinside = $_REQUEST['id'];
        $findquery2  = $db->query("select * from individualfarms where id = '$farmidinside'");
        $finfindquery2 = $findquery2->fetch(PDO::FETCH_ASSOC);
        ?>

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1><?php echo $finfindquery2['farm_name']  ?></h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Farms</a></li>
                    <li class="active">Single Farms</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 project-media">
                        <div class="img-carousel">
                            <?php
                            if($finfindquery2['image1'] !="")
                            {
                                ?>
                                <div><img src="assets/img/<?php echo $finfindquery2['image1'] ?>" alt=""/></div>
                            <?php
                            }
                            if($finfindquery2['image2'] !="")
                            {
                                ?>
                                <div><img src="assets/img/<?php echo $finfindquery2['image2'] ?>" alt=""/></div>
                            <?php
                            }
                            if($finfindquery2['image3'] !="")
                            {
                                ?>
                                <div><img src="assets/img/<?php echo $finfindquery2['image3'] ?>" alt=""/></div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="project-details">
                            <h3 class="block-title"><span>Farm Details</span></h3>
                            <dl class="dl-horizontal">
                                <dt>Available</dt>
                                <dd><?php echo $finfindquery2['available'] ?> Farms</dd>
                                <dt>Cost</dt>
                                <dd><?php echo '₹'.$finfindquery2['cost'] ?></dd>
                                <dt>Returns</dt>
                                <dd><a href="javacript:void(0)"><?php echo '₹'.$finfindquery2['returns'] ?></a></dd>
                                <dt>Seeding Time</dt>
                                <dd><?php echo $finfindquery2['seeding_time'] ?> Days</dd>
                            </dl>
                        </div>
                        <hr class="page-divider small"/>

                    </div>

                </div>
                <hr class="page-divider"/>

                <!-- Modal -->
                <hr class="page-divider half"/>

                <div class="container">
                    <div class="tabs-wrapper content-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#item-description" data-toggle="tab">Item Description</a></li>
                            <li><a href="#reviews" data-toggle="tab">Reviews (2)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="item-description">
                                <p><?php echo $finfindquery2['description']  ?></p>
                            </div>
                            <div class="tab-pane fade" id="reviews">

                                <div class="comments">
                                    <div class="media comment">
                                        <a href="#" class="pull-left comment-avatar">
                                            <img alt="" src="assets/img/preview/avatars/avatar-1.jpg" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                            <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                        </div>
                                    </div>
                                    <div class="media comment">
                                        <a href="#" class="pull-left comment-avatar">
                                            <img alt="" src="assets/img/preview/avatars/avatar-3.jpg" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                            <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <h4 class="block-title">Add a Review</h4>
                                    <form method="post" action="#" name="comments-form" id="comments-form">
                                        <div class="form-group"><input type="text" placeholder="Your name and surname" class="form-control" title="comments-form-name" name="comments-form-name"></div>
                                        <div class="form-group"><input type="text" placeholder="Your email adress" class="form-control" title="comments-form-email" name="comments-formemail"></div>
                                        <div class="form-group"><textarea placeholder="Your message" class="form-control" title="comments-form-comments" name="comments-form-comments" rows="6"></textarea></div>
                                        <div class="form-group"><button type="submit" class="btn btn-theme btn-theme-transparent btn-icon-left" id="submit"><i class="fa fa-comment"></i> Review</button></div>
                                    </form>
                                </div>
                                <!-- // -->

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!-- /PAGE -->



    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
<?php include("includes/footer.php"); ?>
<!-- FOOTER -->

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
<script>
</script>
</body>

<!-- Mirrored from eazzy.me/html/bella-men/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:47:55 GMT -->
</html>