<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<div class="legal">
    <div class="container">
        <?php foreach($atts['top_text'] as $top) {?>
        <div class="legal__text">
           <?= $top['text']?>
        </div>
        <?php }; ?>
        <?php foreach($atts['table'] as $table) {?>
        <table border="1" class="legal__table <?=  $table['css']?>">
        <?php foreach($table['tr'] as $tr){ ?>
                <tr>
                    <?php foreach($tr['th'] as $th){ ?>
                <th class="flex-row__thead"><?= $th['title'] ?></th>
                <?php };?>

            </tr>
        <?php };?>
        <?php foreach($table['trd'] as $tr){ ?>

            <tr>
            <?php foreach($tr['td'] as $td){ ?>

                <td class="box__serv-item"><img src="<?php bloginfo('template_directory'); ?>/assets/img/other_page/checklist-checked-box.svg">
                    <?= $td['text'] ?>
                </td>
                <?php };?>

            </tr>
        <?php };?>



            <tr class="background__order" role="cell">
                <td colspan="2">
                    <div class="box__serv-order">
                        <div class="box__serv-order_terms">Цена за услугу от <?=$table['price'] ?></div>
                        <button class="order__service">Заказaть услугу</button>
                        <div class="price__callback-wrap">
                            <div class="price__callback">
                        
                                <span class="price__callback--close"></span>
                        
                                <h3 class="price__callback--title">Бесплатная консультация</h3>
                                <p class="price__callback--description">Оставьте заявку и мы свяжемся с вами в течение 30
                                    минут в рабочее время с 10:00 до 19:00 c пн-пт.
                        
                                </p>
                        
                                <form id="price-form" class="price__callback-form" action="">
                                    <label for="price-form-name">
                                        <span class="title__input">Ваше имя: <span class="gold">*</span></span>
                                        <input id="price-form-name" class="price__callback-form--field" name="name">
                                    </label>
                                    <label for="price-form-phone">
                                        <span class="title__input">Ваш телефон: <span class="gold">*</span></span>
                                        <input id="price-form-phone" class="price__callback-form--field" name="email" type="text"
                                            minlength="2" maxlength="50" required>
                                    </label>
                                    <label for="price-form-text">
                                        <span class="title__input">Ваше сообщение:</span>
                        
                                        <textarea id="price-form-text" class="price__callback-form--msg" name="message" minlength="2"
                                            maxlength="250" required></textarea>
                                    </label>
                                    <input id="price-form-submit" class="price__callback-form--submit" type="submit"
                                        value="получить консультацию">
                        
                                </form>
                        
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <?php }; ?>

    </div>
</div>
<div class="dop__content dop__legal">
    <div class="container">
    <?php foreach($atts['list_items'] as $list) {?>

        <div class="dop__content-list">
            <div class="dop__content-description">
                <?= $list['title']?>
            </div>
            <?php foreach($list['list'] as $lst) {?>

            <div class="dop__content-item"><?= $lst['text'] ?></div>
            <?php };?>

        </div>
    <?php };?>
    </div>
</div>
<div class="banner">
<?php foreach($atts['banner'] as $ban) {?>

    <div class="banner__bg">
        <div class="banner__quote-title">
            <?= $ban['title']?>
        </div>
        <div class="banner__quote-description">
        <?= $ban['text']?>

        </div>
    </div>
    <?php };?>

</div>

