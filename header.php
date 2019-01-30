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
        <?php wp_head(); ?>


    </head>
    <body <?php body_class(); ?>>


        <?php if (  showFadeInScreen()  ): ?>
        <div id="fade_in">
        <?php endif; ?>

            <header>
                <div class="container">
                    <div class="column_container">
                        <a href="<?php echo $home_url ; ?>" id="branding">Squadrata</a>
                        <nav>
                            <ul id="main_nav">
                                <?php chilly_nav('header_nav'); ?>
                            </ul>
                            <ul id="social_nav">
                                <li class="social_icon social_icon_vcard"><a href="#">Vcard</a></li>
                                <li class="social_icon social_icon_facebook"><a href="#">Facebook</a></li>
                                <li class="social_icon social_icon_instagram"><a href="#">Instagram</a></li>
                                <li class="social_icon social_icon_pinterest"><a href="#">Pinterest</a></li>
                                <!-- <li><a href="#">login client</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <main id="main">
