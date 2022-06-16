<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="breadcrumbs">

    <div class="container">

        <ul class="breadcrumbs__pages">

<!--            --><?php //fw_print($atts)?>

            <?php foreach ($atts['breadcrumbs'] as $att) { ?>
                <li><a href="<?= $att['link']?>"><?= $att['page']?></a></li>
            <?php }; ?>

        </ul>

        <h1 class="title"><?= $atts['title']?></h1>

    </div>

</section>
