<?php include("includes/conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eazzy.me/html/bella-men/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:46:02 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Cart</title>

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
        <div id="preloader-title">Loading Cart</div>
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
                    <h1>Farm Cart</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    <li class="active">Farm Cart</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
               <input type="hidden" id="userid" value="<?php echo $userid ?>"/>
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>1. Orders</h3>
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
                            <tbody>
                            <?php
                            $totalprice  = 0;
                            $findquery   = $db->query("select * from cartfarms where userid = '$userid'");
                            while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC))
                            {
                                $farmidinside = $finfindquery['farmid'];
                                $productid = $finfindquery['productid'];
                                $findquery2  = $db->query("select * from individualfarms where id = '$farmidinside'");
                                $finfindquery2 = $findquery2->fetch(PDO::FETCH_ASSOC);
                                $totalprice  = $totalprice + intval($finfindquery2['cost']);
                                $farmid      = $finfindquery2['id'];
                                ?>
                                <tr id="order_<?php echo  $productid ?>">
                                    <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i>
                                            <img src="assets/img/<?php echo $finfindquery2['thumb'] ?>"
                                                 style="width:100px;height:100px" alt="<?php echo $finfindquery2['farm_name'] ?>"/></a></td>
                                    <td class="quantity">x1</td>
                                    <td class="description">
                                        <?php echo $finfindquery2['farm_name'] ?>
                                    </td>
                                    <td class="total">₹<?php echo $finfindquery2['cost'] ?>
                                        <a href="javascript:void(0)" onclick="deletefarmcart('<?php echo $productid ?>')">
                                            <i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="block-title"><span>Farm Cart</span></h3>
                        <div class="shopping-cart">
                            <table>
                                <tr>
                                    <td>Sub-total:</td>
                                    <td id="subtotal">₹<?php echo  $totalprice ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td>₹0</td>
                                </tr>
                                <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td id="fulltotal">₹<?php echo $totalprice ?></td>
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

                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Payments options</h3>
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
                                    Online transactions can be done through neft,adding online banking accounts etc.</div>
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
                    <a class="btn btn-theme btn-theme-dark" href="index.php">Home Page</a>
                    <a class="btn btn-theme pull-right" onclick="placeorder();" href="javascript:void(0)">Place Order</a>
                </div>



            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <?php include_once('includes/3box.php') ?>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php include_once('includes/footer.php') ?>
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
<script>
    var userid = $("#userid").val();
    function replacepopupform2()
    {
        $.ajax({
            url:"includes/alanajax.php",
            data:"action=replacepopupform2&userid="+$("#userid").val(),
            success:function(result){
                $("#popup-cart2").html(result);
            }
        });
    }
    function deletefarmcart(productid)
    {
        $("#preloader").show();
        $.ajax({
            url:"includes/alanajax.php",
            data:"action=deletecartfarm&userid="+$("#userid").val()+"&productid="+productid,
            dataType : "json",
            success:function(result){
                $("#preloader").hide();
                $("#order_"+productid).hide();
                $("#cart2").html(result.totalcount+" Farm(s) - ₹"+result.totalprice);
                $("#subtotal").html('₹'+result.totalprice);
                $("#fulltotal").html('₹'+result.totalprice);
                replacepopupform2();
            }
        });
    }
    function placeorder()
    {
        $("#preloader").show();
        $.ajax({
            url:"includes/alanajax.php",
            data:"action=purchasefarms&userid="+$("#userid").val(),
            success:function(result){
                $("#preloader").hide();
                window.location.href = "myfarm.php";
            }
        });
    }
</script>
</body>
</html>