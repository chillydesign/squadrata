<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <?php $tdu =  get_template_directory_uri(); ?>
        <?php $blog_name =  get_bloginfo('name'); ?>
        <?php $home_url =  home_url(); ?>
        <!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
        <meta name="apple-mobile-web-app-title" content="<?php echo $blog_name; ?>">
        <meta name="application-name" content="<?php echo $blog_name; ?>">
        <meta name="theme-color" content="#ffffff">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Cantarell:700" rel="stylesheet">
        <?php wp_head(); ?>


    </head>
    <body <?php body_class(); ?>>



                <div class="headerfixed">
                <div class="container" >
                    <header id="page_header" >
                        <a href="#" id="menu_button" >Menu</a>
                        <a class=" branding" href="<?php echo $home_url ; ?>" ><?php echo $blog_name; ?>
                          <img src="<?php echo get_template_directory_uri();?>/img/gk-horizontal.jpg">
                        </a>
                        <nav>
                            <ul>
                                <?php chilly_nav('header_nav'); ?>
                                <!-- <li><a class="slidelink" href="<?php echo $home_url ; ?>/#section_colonnes_2">Qui Sommes Nous</a></li>
                                <li><a class="slidelink" href="<?php echo $home_url ; ?>/#section_services_1">Services</a></li>
                                <li><a class="slidelink" href="<?php echo $home_url ; ?>/#section_colonnes_4">Contact</a></li> -->
                            </ul>
                        </nav>
                    </header>
                    <div class="print_spacer"></div>
                </div>
                </div>
                <main id="main" >
