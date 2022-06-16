<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="registration__fil">
    <div class="container">
    <?php foreach($atts['top_text'] as $top){ ?>
        <div class="registration__concept">
            <p><?= $top['text'] ?> </p>
        </div>
    <?php };?>
		<div class="registration__btn">
            <button class="order__service">Заказaть услугу</button>
            <div class="price__callback-wrap">
                <div class="price__callback">

                    <span class="price__callback--close"></span>

                    <h3 class="price__callback--title"><?= $atts['popup_title'] ?></h3>
                    <p class="price__callback--description"><?= $atts['popup_desc'] ?>

                    </p>

                    <?= do_shortcode('[contact-form-7 id="170" title="Popup заказать услугу" html_class="price__callback-form" ]')?>

                </div>
            </div>
        </div>
    </div>
</div>