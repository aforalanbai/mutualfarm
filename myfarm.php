<?php include("includes/conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eazzy.me/html/bella-men/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2015 15:47:39 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Farms</title>

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
                    <h1>Cultivate My Farms</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Investments</a></li>
                    <li class="active">Organise My Farms</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                     <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget shop categories -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">My Farms</h4>
                            <div class="widget-content">
                                <ul>
                                    <?php
                                    $querylanddetials =  $db->query("select * from  userfarms where userid = '$userid'");
                                    while($fin = $querylanddetials->fetch(PDO::FETCH_ASSOC))
                                    {
                                        ?>
                                        <li>
                                            <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                            <a href="#"><?php echo $fin['farm_name'] ?></a>
                                            <ul class="children">
                                                <li>
                                                    <a href="#">Status
                                                        <span class="count"><?php echo  $fin['status'] ?></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Purchase Date
                                                        <span class="count"><?php echo date('F j, Y', strtotime($fin['purchase_date'])) ?></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Land Transactions
                                                        <span class="count">1</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Harvest
                                                        <span class="count">-</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Profit
                                                        <span class="count">-</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php
                                    }
                                    ?>
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
                        <!-- widget products carousel -->
                        <div class="widget">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Top products</span></h4>
                            <div class="sidebar-products-carousel">
                                <div class="owl-carousel" id="sidebar-products-carousel">
                                    <?php
                                    $query  = $db->query("select * from individualfarms order by id asc limit 0,3");
                                    while($queryfarms = $query->fetch(PDO::FETCH_ASSOC)) {
                                        if ($queryfarms['available'] > 0) {

                                            ?>
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a class="media-link" href="#">
                                                        <img src="assets/img/<?php echo $queryfarms['thumb']  ?>" style="width: 270px; height: 270px"  alt=""/>
                                                    <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="caption text-center">
                                                    <h4 class="caption-title"><?php echo $queryfarms['farm_name']  ?></h4>
                                                    <div class="price">
                                                        <ins>₹<?php echo $queryfarms['cost'] ?></ins>
                                                        <del>₹<?php echo intval($queryfarms['cost'])+1000;  ?></del>
                                                    </div>
                                                    <div class="buttons">
                                                   <a class="btn btn-theme btn-theme-transparent btn-icon-left"
                                                          href="javascript:void(0)" onclick="addtofarmcart('<?php echo $queryfarms['id'] ?>')"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /widget products carousel -->
                        <!-- widget shop hot deals -->
                        <div class="widget widget-shop-deals">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Hot Deals</span></h4>
                            <div class="hot-deals-carousel">
                                <div class="owl-carousel" id="hot-deals-carousel">
                                    <?php
                                    $query  = $db->query("select * from individualfarms order by thumb desc limit 0,3");
                                    while($queryfarms = $query->fetch(PDO::FETCH_ASSOC)) {
                                        if ($queryfarms['available'] > 0) {
                                            ?>
                                            <div class="thumbnail thumbnail-hot-deal no-border no-padding">
                                                <div class="media">
                                                    <a class="media-link" href="#">
                                                        <img src="assets/img/<?php echo $queryfarms['thumb']  ?>" style="width: 270px; height: 270px" alt=""/>
                                                        <span class="icon-view"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>

                                                        <div class="countdown-wrapper">
                                                            <div id="dealCountdown1"
                                                                 class="defaultCountdown clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="caption text-center">
                                                    <h4 class="caption-title"><?php echo $queryfarms['farm_name']  ?></h4>
                                                    <span class="reviews">16 reviews</span>

                                                    <div class="price">
                                                        <ins>₹<?php echo $queryfarms['cost'] ?></ins>
                                                        <del>₹<?php echo intval($queryfarms['cost'])+1000;  ?></del>
                                                    </div>
                                                    <div class="caption-text">
                                                        <?php echo substr($queryfarms['description'],0,200) ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                    }
                                    ?>
      </div>
                            </div>
                        </div>
                        <!-- /widget shop hot deals -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">
                        <div style="text-align: center">
                            <input type="hidden" id="userid" value="<?php echo $userid ?>">
                            <?php
                            $query  = $db->query("select * from userfarms where userid = '$userid'");
                            while($querylands = $query->fetch(PDO::FETCH_ASSOC))
                            {
                                $querylandid = $querylands['id'];
                                if($querylands['status'] == "free")
                                {
                                    $findrepeatation = $db->query("select * from cartfarms where userid = '$userid' and productid  = '$querylandid'");
                                    if($findrepeatation->rowCount()>0)
                                    {
                                    $findrepeatationarray = $findrepeatation->fetch(PDO::FETCH_ASSOC);
                                    $landid               = $findrepeatationarray['farmid'];
                                    $finddisplaytextquery = $db->query("select * from individualfarms where id ='$landid'");
                                    $displayarraytitle    = $finddisplaytextquery->fetch(PDO::FETCH_ASSOC);
                                    $displayname          = $displayarraytitle['farm_name'];
                                    }
                                    else
                                    {
                                    $displayname          =     $querylands['displaytext'];
                                    }

                               ?>
                                <div class="col-md-4 myfarms" id="<?php echo $querylands['id'] ?>"
                                     style="background-size: 100% 100%; background-image: url(assets/img/<?php echo $querylands['background'] ?>);">
                                    <?php echo  $displayname ?>
                                </div>
                            <?php
                            }
                                else if($querylands['status'] == "cultivation")
                                {
                                 $productid    = $querylands['id'];
                                 $querypurchasecartfarms = $db->query("select * from purchasecartfarms where productid = '$productid' order by id desc limit 0,1");
                                 $querypurchasecartfarmsarray = $querypurchasecartfarms->fetch(PDO::FETCH_ASSOC);
                                 $farmid                      = $querypurchasecartfarmsarray['farmid'];
                                 $purchased_date              = $querypurchasecartfarmsarray['purchased_date'];
                                 $queryindividualfarms        = $db->query("select *  from individualfarms where id = '$farmid'");
                                 $queryindividualfarmsarray   = $queryindividualfarms->fetch(PDO::FETCH_ASSOC);
                                 $seeding_time                = $queryindividualfarmsarray['seeding_time'];
                                 $farm_name                   = $queryindividualfarmsarray['farm_name'];
                                 $harvestday                  = date('F j, Y, g:i a', strtotime($purchased_date. ' + '.$seeding_time.' days'));
                                    ?>
                                    <div class="col-md-4 myfarms2" id="<?php echo $querylands['id'] ?>"
                                         style="background-size: 100% 100%; background-image: url(assets/img/<?php echo $querylands['background'] ?>);">
                                        <?php echo $farm_name . "<br>"."Harvests on :".$harvestday ?>
                                    </div>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                <div class="col-sm-8">
<!--                                    <form class="form-inline" action="#">-->
<!--                                        <div class="form-group selectpicker-wrapper">-->
<!--                                            <select-->
<!--                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"-->
<!--                                                    data-toggle="tooltip" title="Select">-->
<!--                                                <option>Product Name</option>-->
<!--                                                <option>Product Name</option>-->
<!--                                                <option>Product Name</option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                        <div class="form-group selectpicker-wrapper">-->
<!--                                            <select-->
<!--                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"-->
<!--                                                    data-toggle="tooltip" title="Select">-->
<!--                                                <option>Select Manifacturers</option>-->
<!--                                                <option>Select Manifacturers</option>-->
<!--                                                <option>Select Manifacturers</option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </form>-->
                                </div>
                                <div class="col-sm-4 text-right-sm">
                                    <a href="javascript:void(0)" style="width: auto;" class="btn btn-theme btn-theme-transparent btn-call-checkout"  onclick="deleteselected()">Delete</a>
                                    <a href="farm-cart.php" style="width: auto;" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- /shop-sorting -->

                        <!-- Products List -->
                        <div class="products list">
                            <!-- / -->
                            <?php
                            $queryeee  = $db->query("select * from individualfarms order by id desc");
                            while($queryfarmseeearray = $queryeee->fetch(PDO::FETCH_ASSOC))
                            {
                                    ?>
                                    <div class="thumbnail no-border no-padding">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="media">
                                                    <a class="media-link" href="javascript:void(0)">
                                                        <img src="assets/img/<?php echo $queryfarmseeearray['thumb']  ?>" style="height: 270px" alt="<?php echo $queryfarmseeearray['farm_name']  ?>"/>
                                                        <span class="icon-view"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="caption">
                                                    <h4 class="caption-title" style="text-transform: capitalize"><?php echo $queryfarmseeearray['farm_name']  ?></h4>
                                                    <a class="reviews" href="javascript:void(0)">16 Purchases</a>

                                                    <div class="overflowed">
                                                        <div class="availability">Availability: <strong>In
                                                                stock</strong> <?php echo $queryfarmseeearray['available'] ?> Farm(s)
                                                        </div>
                                                        <div class="price">
                                                            <ins>₹<?php echo $queryfarmseeearray['cost'] ?></ins>
                                                            <del>₹<?php echo intval($queryfarmseeearray['cost'])+1000;  ?></del>
                                                        </div>
                                                    </div>
                                                    <div class="caption-text">
                                                        <?php echo  substr($queryfarmseeearray['description'],0,400)  ?>
                                                        <a href="singlefarm.php?id=<?php echo $queryfarmseeearray['id'] ?>"><strong style="cursor: pointer" class="text-color">View More</strong>.</a>
                                                    </div>
                                                    <div class="buttons">
                                                        <a class="btn btn-theme btn-theme-transparent btn-icon-left" onclick="addtofarmcart('<?php echo $queryfarmseeearray['id'] ?>')" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- /Products list -->


                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        <?php include_once('includes/3box.php') ?>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php include_once ('includes/footer.php') ?>
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
<!--<![endif]-->
<script>
    function replacepopupform2()
    {
        $.ajax({
            url:"includes/alanajax.php",
            data:"action=replacepopupform2&userid="+userid,
            success:function(result){
                $("#popup-cart2").html(result);
            }
        });
    }
    var productid = "";
    var userid    = $("#userid").val();
    $(".myfarms").click(function(){
        $(".myfarms").each(function(event)
        {
            $(this).removeClass("activefarm");
        });
        $(this).addClass("activefarm");
        productid = $(this).attr('id');
});
    function deleteselected()
    {
        if(productid == "")
        {
            alert("Please select a barren land");
        }
        else
        {
            $("#preloader").show();
            $.ajax({
                url:"includes/alanajax.php",
                data:"action=deletecartfarm&userid="+userid+"&productid="+productid,
                dataType : "json",
                success:function(result){
                    $("#preloader").hide();
                    $("#"+productid).html(result.farmname);
                    $("#cart2").html(result.totalcount+" Farm(s) - ₹"+result.totalprice);
                    replacepopupform2();
                }
            });
        }
    }
    function addtofarmcart(farmid)
    {
        $("#preloader-title").html("Adding to Cart");
        if(productid == "")
        {
            alert("Please select a barren land");
        }
        else
        {
            $("#preloader").show();
            $.ajax({
                url:"includes/alanajax.php",
                data:"action=outcartfarm&userid="+userid+"&productid="+productid+"&farmid="+farmid,
                dataType : "json",
                success:function(result){
                    $("#preloader").hide();
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);
                    $("#"+productid).html(result.farmname);
                    $("#cart2").html(result.totalcount+" Farm(s) - ₹"+result.totalprice);
                    replacepopupform2();
                }
            });
        }
    }
</script>
</body>
</html>