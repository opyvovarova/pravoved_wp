<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start breadcrumbs.html-->

<section class="ocompany__content">
    <div class="container">
        <div class="ocompany__wrap">
            <div class="ocompany__logo">
                <img src="<?= $atts['foto']['url'] ?>" alt="photo">
            </div>
            <div class="ocompany__text">

                <?php foreach($atts['top_text'] as $cont) { ?>

                            <p><?= $cont['text'] ?></p>
                <?php };?>
             </div>

        </div>
        <div class="ocompany__slogan">
            <?= $atts['slogan'] ?>
        </div>
    </div>
</section>