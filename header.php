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
                                <li class="social_icon social_icon_vcard"><a target="_blank" href="<?php echo $tdu; ?>/vcards/squadrata.vcf">Vcard</a></li>
                                <li class="social_icon social_icon_instagram"><a href="#">Instagram</a></li>
                                <li class="social_icon social_icon_pinterest"><a href="#">Pinterest</a></li>
                                <?php if(is_user_logged_in()): ?>
                                    <li><a href="<?php echo get_home_url();?>/mes-dossiers/">Dossiers</a></li>
                                    <li><a href="<?php  wp_logout_url(); ?>">Déconnexion/</a></li>
                                <?php else: ;?>
                                  <li><a href="<?php echo get_home_url();?>/wp-login">login client</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>

                        <a href="#" id="menu_button">Menu</a>
                    </div>
                </div>
            </header>

            <main id="main">
