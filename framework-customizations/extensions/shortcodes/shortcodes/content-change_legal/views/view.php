<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="dop__content">
    <div class="container">
        <div class="dop__content-list">
        <?php foreach($atts['top_text'] as $top) {?>

            <div class="dop__content-description">
                <p><?= $top['text'] ?></p>
            </div>
        <?php }; ?> 
        <?php foreach($atts['items'] as $item) {?>

            <div class="dop__content-item"><?= $item['item'] ?> </div>
            
        <?php }; ?>
        </div>
    </div>
</div>
<div class="box__price change_legal">
    <div class="container">
        <div class="box__price-block">
            <div class="block__title">
                Услуги
            </div>
            <?php foreach($atts['price_box'] as $list){ ?>
            <div class="flex-table row item-1" role="rowgroup">

                <div class="flex-row item-2" role="cell">

                <ul class="box__price-items">
                <?php foreach($list['list_price'] as $it) {?>

                    <li class="box__price-item">
                        <?= $it['list']?>

                    </li>
                    <?php };?>    

                </ul>
                </div>
                <div class="flex-row background__order item-3" role="cell" >
                    <div class="box__price-order">
                        <div class="box__price-order_terms">от <?= $list['price'] ?></div>
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
            <?php };?>
            
           
        </div>

    </div>
   
</div>