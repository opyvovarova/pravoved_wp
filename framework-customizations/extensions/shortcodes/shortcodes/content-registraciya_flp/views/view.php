<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="registration-flp">
    <div class="container">
        <?php foreach($atts['top_text'] as $top){ ?>
        <div class="registration-flp__text">
            <p><?= $top['text'] ?>
            </p>
        </div>

        <?php }; ?>
        <div class="registration-flp__list">
            <div class="block__title">
                <?= $atts['title_list'] ?>
            </div>
            <?php foreach($atts['items'] as $item) { ?>
            <ul class="registration-flp__list-items">
                <li class="registration-flp__list-item"><?= $item['item'] ?></li>
            </ul>
            <?php }; ?>
        </div>

    </div>
</section>
<div class="box__price">
    <div class="container">
        <div class="box__price-block">
            <div class="block__title">
                Цена
            </div>
            <?php foreach($atts['price_box'] as $price) {?>
            <div class="flex-table row item-1" role="rowgroup">
                <div class="flex-row" role="cell">
                    <div class="box__price-title"><?= $price['title'] ?> </div>
                    <div class="box__price-description"><?= $price['descr'] ?> 
                    </div>
                    <div class="box__price-day"><?= $price['how'] ?> </div>
                </div>
                <div class="flex-row item-2" role="cell">
                    <?php foreach($price['list_price'] as $list ) { ?>
                    <ul class="box__price-items">
                        <li class="box__price-item">
                            <?= $list['list'] ?>
                        </li>
                    </ul>
                    <?php }; ?>
                </div>
                <div class="flex-row background__order item-3" role="cell">
                    <div class="box__price-order">
                        <div class="box__price-order_description">для Киева и Киевской области</div>
                        <div class="box__price-order_terms"><?= $price['price'] ?> </div>
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
                        <div class="box__price-order_mark">* Цены для других городов и населенных пунктов Украины
                            уточняйте у консультанта.</div>

                    </div>
                </div>
            </div>
            <?php }; ?>

        </div>
        <div class="box__price-mark">
            <?= $atts['slogan']?>
        </div>
    </div>

</div>
