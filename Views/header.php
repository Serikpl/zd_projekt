<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hosoren Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700"> -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,vietnamese"> -->

    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="/assets/css/from_template/bootstrap.css" rel="stylesheet">

    <link href="/assets/css/from_template/plugins.css" rel="stylesheet">

    <link href="/assets/css/from_template/styles.css" rel="stylesheet">

    <link href="/assets/css/base_wh.css" rel="stylesheet">

    <!-- scripts -->
    <script src="/assets/js/from_template/vendor.js"></script>

    <script>
        window.SHOW_LOADING = false;
    </script>
</head>

<body>

    <!-- // LOADING -->
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
                <span class="icon icon-logo"></span>
            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <!-- // END LOADING -->


    <div id="wrapper">

<!-- HEADER -->
        <header id="header" class="awe-menubar-header">
            <nav class="awemenu-nav" data-responsive-width="1200">
                <div class="container">
                    <div class="awemenu-container">

                        <div class="navbar-header">
                            <ul class="navbar-icons">
                                
                                <?php 
                                    
                                    $user = false;
                                    $user = User::checkLogged();

                                    if(!$user){
                                    ?>
                                <li class="menubar-account">
                                    <a href="/login" title="" class="awemenu-icon">
                                        <i class="icon icon-user-circle"></i>
                                        <span class="awe-hidden-text">Login</span>
                                    </a>
                                </li>
                                    <?php } else { ?>                                  
                                <li class="menubar-account">
                                    <a href="/logout" title="" class="awemenu-icon">
                                        <i class="icon icon-user-circle"></i>
                                        <span class="awe-hidden-text">Log out</span>
                                    </a>
                                </li>
                                    <?php } ?>
                                </li>

<!--                                 <li class="menubar-wishlist">
                                    <a href="#" title="" class="awemenu-icon">
                                        <i class="icon icon-star"></i>
                                        <span class="awe-hidden-text">Wishlist</span>
                                    </a>

                                </li> -->

                                <li class="menubar-cart">
                                    <a href="/cart/" title="" class="awemenu-icon menu-shopping-cart">
                                        <i class="icon icon-shopping-bag"></i>
                                        <span class="awe-hidden-text">Cart</span>

                                        <span class="cart-number" id="cart-number">
                                            <?php echo Cart::countCartItems(); ?>
                                        </span>
                                    </a>

                                </li>


                            </ul>

                            <ul class="navbar-search">
                                <li>
                                    <a href="#" title="" class="awemenu-icon awe-menubar-search" id="open-search-form">
                                        <span class="sr-only">Search</span>
                                        <span class="icon icon-search"></span>
                                    </a>

                                    <div class="menubar-search-form" id="menubar-search-form">
                                        <form action="index.html" method="GET">
                                            <input type="text" name="s" class="form-control" placeholder="Search your entry here...">
                                            <div class="menubar-search-buttons">
                                                <button type="submit" class="btn btn-sm btn-white">Search</button>
                                                <button type="button" class="btn btn-sm btn-white" id="close-search-form">
                                                    <span class="icon icon-remove"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.menubar-search-form -->
                                </li>
                            </ul>
                        </div>

                        <div class="awe-logo">
                            <a href="../" title="">
                                <img src="/assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- /.awe-logo -->

                        <ul class="awemenu awemenu-right">
                            <li class="awemenu-item">
                                <a href="../" title="">
                                    <span>Shope</span>
                                </a>

                            </li>

<!--                             <li class="awemenu-item">
                                <a href="#" title="">
                                    <span>About us</span>
                                </a>

                            </li> -->

                            <li class="awemenu-item">
                                <a href="/ex_rate" title="">Exchange Rates</a>

                            </li>

                            <li class="awemenu-item">
                                <a href="/contact">Contact</a>

                            </li>

                        </ul>
                        <!-- /.awemenu -->
                    </div>
                </div>
                <!-- /.container -->

            </nav>
            <!-- /.awe-menubar -->
        </header>
        <!-- /.awe-menubar-header -->
<!-- for debug -->
<!--                                                                     <pre>
                                                                        <?php print_r($_SESSION['products']); ?>
                                                                    </pre> -->
<!-- END HEADER -->