<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start breadcrumbs.html-->

<div class="dop__content">
    <div class="container">
        <div class="dop__content-list">
            <div class="dop__content-description">
                <?= $atts['text'] ?>
            </div>
        <?php foreach($atts['list'] as $list) { ?>    
            <div class="dop__content-item"><?= $list['text']?></div>
        <?php }; ?>
            <div class="dop__content-mark"><?= $atts['slogan']?> </div>
        </div>
    </div>
</div>