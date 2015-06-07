<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="assets/img/logo-bella-shop.png" alt="Bella Shop"/></a>
            </div>
            <!-- /Logo -->

            <!-- Header search -->
            <div class="header-search">
                My Balance : ₹0
            </div>
            <!-- /Header search -->
            <!-- Header shopping cart -->
            <div class="header-cart">
                <div class="cart-wrapper">
                    <a href="#"  class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart">
                    <i class="fa fa-shopping-cart"></i>
                        <span class="hidden-xs">
                            <span id="cart1"></span>
                    <i class="fa fa-angle-down"></i></a>

                   <?php
                    $totalprice  = 0;
                    $findquery   = $db->query("select * from cartfarms where userid = '$userid'");
                   $totalcount  = $findquery->rowCount();
                    while($finfindquery = $findquery->fetch(PDO::FETCH_ASSOC)) {
                        $farmidinside = $finfindquery['farmid'];
                        $findquery2 = $db->query("select * from individualfarms where id = '$farmidinside'");
                        $finfindquery2 = $findquery2->fetch(PDO::FETCH_ASSOC);
                        $totalprice = $totalprice + intval($finfindquery2['cost']);
                    }
                   ?>
                    <a href="javascript:void(0)" id="popup2forfarms"  class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart2">
                        <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">
                            <span id="cart2"><?php echo $totalcount ?> Farm(s) - ₹<?php echo $totalprice ?> </span> <i class="fa fa-angle-down">

                            </i></a>
                    <!-- Mobile menu toggle button -->
                    <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                    <!-- /Mobile menu toggle button -->
                </div>
            </div>
            <!-- Header shopping cart -->

        </div>
    </div>
    <div class="navigation-wrapper">
        <div class="container">
            <!-- Navigation -->
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                <ul class="nav sf-menu">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="products-list.php">Shop Online</a>
                        <ul>
                            <li><a href="products-list.php">All Categories</a></li>
                            <li><a href="products-list.php?ct=fruit">Fruits</a></li>
                            <li><a href="products-list.php?ct=vegetable">Vegetables</a></li>
                            <li><a href="products-list.php?ct=grocery">Grocery</a></li>
                        </ul>
                    </li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="myfarm.php">My Farms</a></li>
                    <li class="sale"><a href="buylands.php">Invest a farm</a></li>
                    <li><a href="products-list.php?ct=fruit">Fruits</a></li>
                    <li><a href="products-list.php?ct=vegetable">Vegetables</a></li>
                    <li><a href="products-list.php?ct=grocery">Grocery</a></li>
                    <li><a href="orderstatus.php">Order Status</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
</header>
