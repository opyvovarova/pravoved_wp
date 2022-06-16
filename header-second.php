<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pravoved
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/icons/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body >
    <!-- open .header -->
<!-- end html_open.html-->


<!-- start header_second.html-->
<!-- open .header-->
<div class="wrapper">
    <div class="header header_second">
        <div class="header__main">
            <div class="container grid">
                <a href="#" class="header-sec__logo grid--1">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/header/small.png" alt="Logo">
                </a>
                <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
                <nav class="navigation  grid--5">
                            <a id="mobile-menu" href="#" class="header__trigger">
                                <span class=""></span>
                            </a>

                     <ul class="menu">
                     <?php wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container' => false,
                        'items_wrap'    => '%3$s',
                        'list_item_class'  => 'menu__item',
                        'link_class'   => 'menu__link ') ); ?>

                    </ul> 
                </nav>

                <?php endif; ?>


                <div class="social-link grid--3">
                    <?php if( is_active_sidebar('head-social') ){ ?>
                        <?php dynamic_sidebar('head-social') ?>
                    <?php }; ?>
                    <!-- <a href="#" class="social-link__item fa fa-facebook icon-rotate"></a>
                    <a href="#" class="social-link__item fa fa-instagram icon-rotate"></a> -->
                </div>

                <div class="language__items grid--3">
                    <!--<div class="language__item ukr">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/language/ukr.png" alt="" id="language_flag">
                        <div class="language__text" id="language__text">
                            Укр
                        </div>
                    </div>-->     
                </div>

            </div>

        </div>

    </div>


    <!-- close .header -->
<!-- end header_second.html-->