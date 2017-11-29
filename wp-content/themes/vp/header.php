<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <script src="https://use.fontawesome.com/d1a05170da.js"></script>
    <title>
        <?php bloginfo('name') ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        <?php wp_title(); ?>
    </title>
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/app/css/styles.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/app/css/grid12.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="upheader-wrap">
        <div class="container">
            <div class="upheader-container">
                <div class="logo-container">
                    <a href="<?php echo home_url(); ?>">
                        <img src="/vp/wp-content/uploads/2017/10/vplogowhite-1.png" /> </a>
                </div>
                <div class="upheader-box">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="box-right">
                        <p>Location</p>
                        <h4>
                            <?php bloginfo('description'); ?>
                        </h4>
                    </div>
                </div>
                <div class="upheader-box">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="box-right border-right">
                        <p>Office Hours</p>
                        <h4>MON - FRI 9:00 - 5:00</h4>
                    </div>
                </div>
                <div class="upheader-box">
                    <div class="box-right">
                        <div class="call-us-container">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>Call Us</p>
                        </div>
                        <h2>813.247.3835</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap">
        <div class="container">
            <div class="header-container">
                <!--
              </div>-->
                <div class="nav-container">
                    <nav class="nav" id="bs-example-navbar-collapse-1">
                        <?php
            wp_nav_menu( array(
             'menu'              => 'primary',
             'theme_location'    => 'primary',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => 'nav',
             'container_id'      => 'bs-example-navbar-collapse-1',
             'menu_class'        => 'nav navbar-nav',
             'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );
            ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-header">
        <div class="banner-container" style="background-image: url('<?php echo header_image();?>'); ">
            <div class="title-container">
                <?php //masthead title widget
    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box3')): ?>
                <?php endif; ?>

                <div class="subtitle-container">
                    <h3>
                        <span>STRUCTURAL ENGINEERING AND STEEL DETAILING</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>