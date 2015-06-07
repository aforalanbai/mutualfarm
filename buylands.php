<?php include("includes/conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eazzy.me/html/bella-men/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:47:55 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agricultural Land</title>

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

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Agricultural Lands</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Purchase</a></li>
                    <li class="active">Lands</li>
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
                            <div><img src="assets/img/farmpageslide1.jpg" alt=""/></div>
                            <div><img src="assets/img/farmpageslide2.jpg" alt=""/></div>
                            <div><img src="assets/img/farmpageslide3.jpg" alt=""/></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="project-overview">
                            <h3 class="block-title"><span>Purchase a plot</span></h3>
                            <p>Each plot consist of 33 cents costing just 100/cent</p>
                        </div>

                        <div class="project-details">
                            <h3 class="block-title"><span>Project Details</span></h3>
                            <dl class="dl-horizontal">
                                <dt>Land</dt>
                                <dd>33 Cents</dd>
                                <dt>Cost</dt>
                                <dd><a href="javacript:void(0)">₹100/Cent</a></dd>
                                <dt>Total Cost</dt>
                                <dd>₹3300 only</dd>
                            </dl>
                        </div>
                        <hr class="page-divider small"/>


                        <div class="buttons">
                            <div class="quantity">
                                <input class="form-control qty" style="width: 75px !important;float:left;height: 45px" type="number" step="1" min="1" id="quantity" name="quantity" value="1" title="Qty">
                            </div>
                            <button class="btn btn-theme btn-cart btn-icon-left" onclick="getlanddetails()" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>

                        <hr class="page-divider small"/>

                    </div>

                </div>

                <hr class="page-divider"/>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Confirm Purchase</h4>
                            </div>
                            <div class="modal-body">
                                <div class="project-details">
                                    <h3 class="block-title"><span>Land Wallet</span></h3>
                                    <dl class="dl-horizontal">
                                        <dt>Land</dt>
                                        <dd>33 Cents * <span class="totallands">1</span></dd>
                                        <dt>Cost</dt>
                                        <dd><a href="javacript:void(0)">₹100/Cent</a></dd>
                                        <dt>Total Cost</dt>
                                        <dd>₹3300 only * <span class="totallands">1</span> = <span class="totallandscost">₹3300 only</span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="savetomylands()">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="page-divider half"/>



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
    function getlanddetails()
    {
        var quantity = $("#quantity").val();
        var total    = quantity*3300;
        $(".totallands").html(quantity);
        $(".totallandscost").html("₹"+total);

    }
    function savetomylands()
    {
        $("#preloader").show();
        var quantity = $("#quantity").val();
        var total    = quantity*3300;
        $.ajax({
            url:"includes/alanajax.php",
            data:"action=addcultivatablelands&quantity="+quantity,
            success:function(result){
            window.location.href = "myfarm.php";
            }
        });
    }
</script>
</body>

<!-- Mirrored from eazzy.me/html/bella-men/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:47:55 GMT -->
</html>