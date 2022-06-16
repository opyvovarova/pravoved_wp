<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="callback contact">

    <div class="container">
        <div class="grid">
            <div class="grid--6">
            <?php if(is_active_sidebar('info-contact')){?>
            <?php dynamic_sidebar('info-contact') ?>
        <?php };?>
            </div>
            <div class="grid--6">
                <div class="contact__map">
                    <img src="./img/footer/map.png" alt="Map">
                </div>
            </div>
            <div class="grid--12">
                <div class="contact__title">
                    Обратная связь
                </div>
                <?= do_shortcode('[contact-form-7 id="168" title="Контактная форма 1" html_class="callback-form"]')?>
                <!-- <form id="callback__form" class="callback-form" action="">
                    <div class="grid">
                        <div class="grid--6">
                            <label for="form-name">
                                <span class="title__input">Ваше имя: <span class="gold">*</span></span>
                                <input id="form-name" class="callback-form--field" name="name">
                            </label>
                            <label for="form-phone">
                                <span class="title__input">Ваш телефон: <span class="gold">*</span></span>
                                <input id="form-phone" class="callback-form--field" name="email" type="text"
                                    minlength="2" maxlength="50" required>
                            </label>
                        </div>
                        <div class="grid--6"> <label for="form-text">
                                <span class="title__input">Ваше сообщение:</span>

                                <textarea id="form-text" class="callback-form--msg" name="message" minlength="2"
                                    maxlength="250" required></textarea>
                            </label>
                            
                        </div>
                    </div>

                    <input id="form-submit" class="callback-form--submit" type="submit"
                    value="получить консультацию">
                </form> -->

            </div>
        </div>

    </div>

</section>
<!-- end callback.html-->
