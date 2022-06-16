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
<div class="wrapper">
    <div class="header">
        <div class="header__main">
            <div class="container grid">

    <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
            <nav class="navigation  grid--6">
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

                        <!-- <li class="menu__item">
                            <a href="index.html" class="menu__link acctive-link">Главная</a>
                        </li>
                        <li class="menu__item">
                            <a href="/ocompany" class="menu__link">О компании</a>
                        </li>
                        <li class="menu__item">
                            <a href="index.html" class="menu__link">услуги</a>
                        </li>
                        <li class="menu__item">
                            <a href="/contacts" class="menu__link" target="_blank">контакты</a>
                        </li> -->
                    </ul> 
                </nav>

                <?php endif; ?>

                <div class="social-link grid--3">
                    <?php if( is_active_sidebar('head-social') ){ ?>
                        <?php dynamic_sidebar('head-social') ?>
                    <?php }; ?>
                </div>

                <div class="language__items grid--3">
                <!--<div id="trp-floater-ls" onclick="" data-no-translation="" class="trp-language-switcher-container trp-floater-ls-codes trp-top-right">
            <div id="trp-floater-ls-current-language" class="trp-with-flags">
                <a href="javascript:void(0)" class="trp-floater-ls-disabled-language trp-ls-disabled-language" onclick="void(0)">
					<img class="trp-flag-image" src="http://localhost/pravoved_wp/wp-content/plugins/translatepress-multilingual/assets/images/flags/uk.png" width="18" height="12" alt="uk" title="Ukrainian">Укр				</a>
            </div>
            <div id="trp-floater-ls-language-list" class="trp-with-flags">
                                    <a href="http://localhost/pravoved_wp/" title="Russian">
						<img class="trp-flag-image" src="http://localhost/pravoved_wp/wp-content/plugins/translatepress-multilingual/assets/images/flags/ru_RU.png" width="18" height="12" alt="ru_RU" title="Russian">Рус</a>
                				<a href="javascript:void(0)" class="trp-floater-ls-disabled-language trp-ls-disabled-language">
					<img class="trp-flag-image" src="http://localhost/pravoved_wp/wp-content/plugins/translatepress-multilingual/assets/images/flags/uk.png" width="18" height="12" alt="uk" title="Ukrainian">Укр</a>
            </div>
        </div>
                    <div class="language__item ukr">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/language/ukr.png" alt="" id="language_flag">
                        <div class="language__text" id="language__text">
                            Укр
                        </div>
                    </div>     -->       
                </div>

            </div>

        </div>
	<div id="content" class="site-content">
