<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package addo-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.typekit.net/elk6axb.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <script src="https://use.fontawesome.com/46b854c798.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/jquery.slotmachine.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/main.css">

    <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'addo_play' ); ?></a>

    <!-- HEADER & NAV -->
    <nav class="nav-fixed">
        <div class="nav-menu">
            <img src="<?php bloginfo('template_directory');?>/assets/img/addo_logo.svg" atl="Addo Logo" />
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#AboutUs">About Us</a></li>
                <li><a href="#OurBrands">Our Brands</a></li>
                <li><a href="#News">News</a></li>
                <li><a href="#ContactUs">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="buttonset">
        <div id="nav_list">Menu
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="social-header--container">
        <ul>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

        </ul>
    </div>
    <!-- END OF HEADER & NAV -->