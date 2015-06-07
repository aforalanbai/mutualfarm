<?php
$userid = $_SESSION['user']['uid'];
?>
<div class="modal fade popup-cart" id="popup-cart2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="container">
            <div class="cart-items">
                <div class="cart-items-inner">
                    <?php
                    $totalprice  = 0;
                    $userid = $_SESSION['user']['uid'];
                    $findquery   = $db->query("select * from cartfarms where userid = '$userid'");
                    while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC))
                    {
                    $farmidinside   = $finfindquery['farmid'];
                    $findquery2     = $db->query("select * from individualfarms where id = '$farmidinside'");
                    $finfindquery2  = $findquery2->fetch(PDO::FETCH_ASSOC);
                    $farmname       = $finfindquery2['farm_name'];
                    $totalprice     = $totalprice + intval($finfindquery2['cost']);
                        ?>
                        <div class="media">
                            <a class="pull-left" href="javascript:void(0)"><img class="media-object item-image" style="width:32px;heigth:32px" src="assets/img/<?php echo $finfindquery2['thumb'] ?>" alt=""></a>
                            <p class="pull-right item-price">₹<?php echo $finfindquery2['cost'] ?></p>
                            <div class="media-body">
                                <h4 class="media-heading item-title"><a href="javascript:void(0)"><?php echo $finfindquery2['farm_name'] ?></a></h4>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="media">
                        <p class="pull-right item-price">₹<?php echo $totalprice ?></p>
                        <div class="media-body">
                            <h4 class="media-heading item-title summary">Subtotal</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <div>
                                <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                    --><a href="farm-cart.php" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="container">
            <div class="cart-items">
                <div class="cart-items-inner">
                    <div id="cartlist">

                    </div>
                    <div class="media">
                        <p class="pull-right item-price" id="carttotal"></p>
                        <div class="media-body">
                            <h4 class="media-heading item-title summary">Subtotal</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <div>
                                <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                    --><a href="product-cart.php" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <ul class="list-inline">
                <li class="icon-form"><a href="login.php"><img src="assets/img/icon-2.png" alt=""/><span><span class="colored">Logout</span></span></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-user"></i> <span><?php echo $_SESSION['user']['username'] ?></span></a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="list-inline">
                <li class="hidden-xs"><a href="index.php">Home</a></li>
                <li class="hidden-xs"><a href="community.php">Community</a></li>
                <li class="hidden-xs"><a href="myfarm.php">My Farms</a></li>
                <li class="hidden-xs"><a href="buylands.php">Invest</a></li>
                <li class="hidden-xs"><a href="contact.php">Enquiry</a></li>
                <li class="dropdown currency">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">€ EURO<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">€ EURO</a></li>
                        <li><a href="#">€ EURO</a></li>
                        <li><a href="#">€ EURO</a></li>
                    </ul>
                </li>
                <li class="dropdown flags">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/flag.gif" alt=""/> Eng<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                        <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                        <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
