<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="callback">

<div class="container">
    <div class="grid">
        <div class="grid--6">
        <?php if(is_active_sidebar('info-contact')){?>
            <?php dynamic_sidebar('info-contact') ?>
        <?php };?>
        </div>
        <div class="grid--6">
            <div class="callback__title">
                Обратная связь
            </div>
            <?= do_shortcode('[contact-form-7 id="70" title="Контактная форма для целевых страниц" html_class="callback-form" ]')?>
        </div>
    </div>

</div>

</section>
<!-- end callback.html-->
