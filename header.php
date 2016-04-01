<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rex : Home</title>

    <!-- Theme color -->
    <link id="switcher" href="<?php bloginfo('template_url'); ?>/css/theme-color/default.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div class="loader">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<?php if (is_front_page()) { ?>
    <!-- Start header section -->
    <header id="header">
        <div class="header-inner">
            <!-- Header image -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/header-bg.jpg" alt="img">
            <div class="header-overlay">
                <div class="header-content">
                    <!-- Start header content slider -->
                    <h2 class="header-slide"><?php _e('WE GENERATE', 'hw23'); ?>
                        <span><?php _e('MOST CREATIVE', 'hw23'); ?></span>
                        <span><?php _e('MOST Design', 'hw23'); ?></span>
                        <span><?php _e('MOST Valuable', 'hw23'); ?></span>
                        <?php _e('IDEA', 'hw23'); ?></h2>
                    <!-- End header content slider -->
                    <!-- Header btn area -->
                    <div class="header-btn-area">
                        <a class="knowmore-btn" href="#"><?php _e('KNOW MORE', 'hw23'); ?></a>
                        <a class="download-btn" href="#"><?php _e('DOWNLOAD Theme', 'hw23'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->
<?php } ?>

<!-- Start menu section -->
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo"></a>
            </div>

            <?php if (is_front_page()) { ?>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll home-nav">
                        <li class="active"><a href="#header"><?php _e('Home', 'hw23'); ?></a></li>
                        <li><a href="#about"><?php _e('ABOUT', 'hw23'); ?></a></li>
                        <li><a href="#team"<?php _e('>TEAM', 'hw23'); ?></a></li>
                        <li><a href="#service"><?php _e('SERVICE', 'hw23'); ?></a></li>
                        <li><a href="#portfolio"><?php _e('PORTFOLIO', 'hw23'); ?></a></li>
                        <li><a href="#pricing-table"><?php _e('PRICE', 'hw23'); ?></a></li>
                        <li><a href="#from-blog"><?php _e('BLOG', 'hw23'); ?></a></li>
                        <li><a href="#contact"><?php _e('CONTACT', 'hw23'); ?></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            <?php } else { ?>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'hw23'); ?></a></li>
                        <li class="active"><a href="http://hw23/blog/"><?php _e('BLOG', 'hw23'); ?></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            <?php } ?>

            <div class="search-area">
                <?php get_search_form(); ?>
            </div>
        </div>
    </nav>
</section>
<!-- End menu section -->
