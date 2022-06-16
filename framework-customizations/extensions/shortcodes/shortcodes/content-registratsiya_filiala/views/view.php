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

                    <h3 class="price__callback--title">Бесплатная консультация</h3>
                    <p class="price__callback--description">Оставьте заявку и мы свяжемся с вами в течение 30
                        минут в рабочее время с 10:00 до 19:00 c пн-пт.

                    </p>

                    <?= do_shortcode('[contact-form-7 id="170" title="Popup заказать услугу" html_class="price__callback-form" ]')?>

                </div>
            </div>
        </div>
    </div>
</div>