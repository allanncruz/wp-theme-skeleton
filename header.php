<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="bg-light">



    <div class="upnavbar py-0 py-lg-1">
        <div class="container">
            <div class="d-flex justify-content-end align-items-center flex-wrap">
                <ul class="upnav-items upnavbar-itenslist-unstyled m-0 py-1">
                    <li class="tel d-none d-lg-inline px-2">
                        <i class="fas fa-phone fa-flip-horizontal"></i>
                        <small> <small>+55</small> (84)</small> <b>00000-0000</b>
                    </li>
                    <li class="d-inline px-2">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter-square"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler outline border-0"
                    type="button"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand position-relative" href="<?php bloginfo("url") ?>">
                <img src="<?php bloginfo("template_url") ?>/dist/img/image/logo.png">
            </a>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </nav>