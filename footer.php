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

	<footer>

<div class="footer__main">
	<div class="container">
		<div class="grid">
			<div class="footer__main-left grid--6">
				<a href="#" class="footer__logo">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/footer/pravovedlogo_2.png" alt="Img">
				</a>
				<div class="footer__information">
				<?php if( is_active_sidebar('info-footer') ){ ?>
                        <?php dynamic_sidebar('info-footer') ?>
                    <?php }; ?>
					<!-- <div class="info__content">
						<a href="#" class="footer__info-img icon-rotate fa fa-phone">
						</a>
						<div class="footer__info-description">+38(099) 111-11-11</div>
					</div>
					<div class="info__content">
						<a href="#" class="footer__info-img icon-rotate fa fa-envelope-o">
						</a>
						<div class="footer__info-description">info@provoved.ltd</div>
					</div>
					<div class="info__content">
						<a href="#" class="footer__info-img icon-rotate fa fa-map-marker">
						</a>
						<div class="footer__info-description">
							г.Киев, улица Ярослава Мудрого, офис 205 </div>
					</div> -->

				</div>
			</div>
			<div class="grid--6">
				<div class="footer__map">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/footer/map.png" alt="Img">
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
					© Правовед
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
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
