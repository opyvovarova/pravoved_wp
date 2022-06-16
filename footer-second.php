<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pravoved
 */

?>

	</div><!-- #content -->
<!-- start footer_second.html-->
<button onclick="topFunction()" id="btnScrollToTop" title="Go to top">
    <svg version="1.1" id="Layer_1" 
        x="0px" y="0px" viewBox="0 0 492.002 492.002" style="enable-background:new 0 0 492.002 492.002;"
        xml:space="preserve">

        <path d="M484.136,328.473L264.988,109.329c-5.064-5.064-11.816-7.844-19.172-7.844c-7.208,0-13.964,2.78-19.02,7.844
           L7.852,328.265C2.788,333.333,0,340.089,0,347.297c0,7.208,2.784,13.968,7.852,19.032l16.124,16.124
           c5.064,5.064,11.824,7.86,19.032,7.86s13.964-2.796,19.032-7.86l183.852-183.852l184.056,184.064
           c5.064,5.06,11.82,7.852,19.032,7.852c7.208,0,13.96-2.792,19.028-7.852l16.128-16.132
           C494.624,356.041,494.624,338.965,484.136,328.473z" />

    </svg>
</button>
<footer class="footer_second">

    <div class=" footer__main">
        <div class="container">
            <div class="grid">
                <div class="footer__main-left grid--1">
                    <a href="#" class="footer__logo">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/footer/pravovedlogo_2.png" alt="Img">
                    </a>

                </div>
                <div class="grid--11">
                    <div class="footer__items-serv">
                    <?php if( is_active_sidebar('footer-column-1') ){ ?>

                        <div id="footer_col-1" class="footer__item-serv ">
                        <?php dynamic_sidebar('footer-column-1') ?>

                        </div>
                    <?php }; ?>
                    <?php if( is_active_sidebar('footer-column-2') ){ ?>

                        <div id="footer_col-2" class="footer__item-serv">
                        <?php dynamic_sidebar('footer-column-2') ?>

                        </div>
                    <?php }; ?>
                    <?php if( is_active_sidebar('footer-column-2') ){ ?>

                        <div id="footer_col-3" class="footer__item-serv">
                        <?php dynamic_sidebar('footer-column-3') ?>

                        </div> 
                        <?php }; ?>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="grid">
                <div class="grid--6">
                    <div class="copyright">
                        &copy;<?php bloginfo('name');
                        echo ' - ';
                        echo date("Y");
                        ?>
                    </div>
                </div>
                <div class="grid--6">
                    <div class="developer">
                        Разработка:<a href="https://webola.org/" class="developer__link"> webola.org</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
</div>
<!-- end footer_second.html-->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
<!-- end html_close.html-->