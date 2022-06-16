<div class="header__banner">
            <div class="container grid">
                <div class="header-logo grid--2">
                    <a href="http://pravoved.ltd" class="header-logo__link">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/header/big-pravoved.png" alt="Logo">
                    </a>
                </div>
                <?php if (is_array($atts['banner']) && !empty($atts['banner'])) { ?>
                    <?php foreach ($atts['banner'] as $banner) { ?>

                <div class="header__content grid--10">
                    <h1 class="header-title "><?= $banner['title']?>
                        <span><?=$banner['subtitle'] ?></span>

                    </h1>
                    
                <?php };?>

            <?php }; ?>
                    <div class="btn">
                        <a href="#" class="btn__consulting">
                            <svg height="15pt" viewBox="0 -24 480 480" width="15pt">
                                <path
                                    d="m456 72h-104v-32c-.027344-22.082031-17.917969-39.9726562-40-40h-144c-22.082031.0273438-39.972656 17.917969-40 40v32h-104c-13.253906 0-24 10.746094-24 24v178.078125c.0507812 10.148437 6.445312 19.175781 16 22.585937v111.335938c0 13.253906 10.746094 24 24 24h400c13.253906 0 24-10.746094 24-24v-111.328125c9.554688-3.414063 15.953125-12.445313 16-22.59375v-178.078125c0-13.253906-10.746094-24-24-24zm-312-32c0-13.253906 10.746094-24 24-24h144c13.253906 0 24 10.746094 24 24v32h-16v-32c0-4.417969-3.582031-8-8-8h-144c-4.417969 0-8 3.582031-8 8v32h-16zm160 32h-128v-24h128zm144 336c0 4.417969-3.582031 8-8 8h-400c-4.417969 0-8-3.582031-8-8v-108.585938l176 24.273438v20.3125c0 13.253906 10.746094 24 24 24h16c13.253906 0 24-10.746094 24-24v-20.3125l176-24.273438zm-192-64c0 4.417969-3.582031 8-8 8h-16c-4.417969 0-8-3.582031-8-8v-48c0-4.417969 3.582031-8 8-8h16c4.417969 0 8 3.582031 8 8zm208-69.921875c.003906 3.988281-2.929688 7.371094-6.878906 7.929687l-2.21875.304688-182.902344 25.222656v-11.535156c0-13.253906-10.746094-24-24-24h-16c-13.253906 0-24 10.746094-24 24v11.535156l-185.113281-25.527344c-3.949219-.554687-6.890625-3.9375-6.886719-7.929687v-178.078125c0-4.417969 3.582031-8 8-8h432c4.417969 0 8 3.582031 8 8zm0 0" />
                            </svg>
                            Бесплатная консультация</a>
                    </div>
                    <div class="header__callback-wrap">
                        <div class="header__callback">

                            <span class="header__callback--close"></span>

                            <h3 class="header__callback--title">Бесплатная консультация</h3>
                            <p class="header__callback--description">Оставьте заявку и мы свяжемся с вами в течение 30
                                минут в рабочее время с 10:00 до 19:00 c пн-пт.

                            </p>

                            <?= do_shortcode('[contact-form-7  id="67" title="Popup Header бесплатная консультация" html_class="header__callback-form" ]')?>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="header__info">
            <div class="grid--3">
            <?php foreach($atts['contact_block'] as $contact) { ?>

                <div class="header__info-item">

                    <h4 class="header__info-title">
                        <?= $contact['contact_title'] ?>
                    </h4>
                    <?php foreach($contact['icons-link'] as $cont){ ?>

                    <div class="header__info-content">
                        <a href="#" class="header__info-img icon-rotate <?= $cont['icons']  ?>">
                        </a>
                        <div class="header__info-description"><?= $cont['contact_description']?></div>
                    </div>
                    <?php }; ?>

                </div>
                <?php }; ?>

            </div>
            <div class="grid--3">
            <?php foreach($atts['address_block'] as $address) { ?>

                <div class="header__info-item">

                    <h4 class="header__info-title">
                    <?= $address['address_title'] ?>

                    </h4>
                    <?php foreach($address['address-link'] as $addr){ ?>

                    <div class="header__info-content">
                        <a href="#" class="header__info-img icon-rotate <?= $addr['icons']  ?>">
                        </a>
                        <div class="header__info-description">
                        <?= $addr['address_description'] ?> </div>

                    </div>
                    <?php }; ?>


                </div>
                <?php }; ?>

            </div>
            <div class="grid--3">
            <?php foreach($atts['clock_block'] as $clock) { ?>

                <div class="header__info-item">
             <h4 class="header__info-title">
                        <?= $clock['clock_title'] ?>
                    </h4>
                    <?php foreach($clock['clock-link'] as $icons){ ?>
                    <div class="header__info-content">

                        <a href="#" class="header__info-img icon-rotate <?= $icons['icons']  ?>">
                        </a>
                        <div class="header__info-description"><?= $icons['clock_description'] ?></div>

                    </div>
                    <?php }; ?>

                </div>
                <?php }; ?>

                
            </div>

        </div>
        <div class="header__info-mobile">
            <section class="ac-container">
                <div>
                    <input id="ac-1" name="accordion-1" type="radio" checked>
                    <label for="ac-1">Контакты:</label>
                    <article>
                        <div class="header__info-content">
                            <a href="#" class="header__info-img icon-rotate fa fa-phone">
                            </a>
                            <div class="header__info-description">+38(099) 111-11-11</div>
                        </div>
                        <div class="header__info-content">
                            <a href="#" class="header__info-img icon-rotate fa fa-envelope-o">
                            </a>
                            <div class="header__info-description">info@provoved.ltd</div>
                        </div>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio">
                    <label for="ac-2">Адрес организации:</label>
                    <article>
                        <div class="header__info-content">
                            <a href="#" class="header__info-img icon-rotate fa fa-map-marker">
                            </a>
                            <div class="header__info-description">
                                г.Киев, улица Ярослава Мудрого, офис 205 </div>

                        </div>
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio">
                    <label for="ac-3">График работы:</label>
                    <article>
                        <div class="header__info-content">
                            <a href="#" class="header__info-img icon-rotate fa fa-clock-o">
                            </a>
                            <div class="header__info-description">Пн - Пт с 10:00 до 19:00<br>
                                Суб - Вс Выходной
                            </div>

                        </div>
                    </article>
                </div>
                <div>

                </div>
            </section>
        </div>

    </div>
    <!-- close .header -->
<!-- end header.html-->

<!-- start service.html-->
<section class="service">
    <div class="container">
        <div class="title-head">
        <?php foreach ($atts['head_serv'] as $serv){?>

            <h2 class="title-main">
                <?= $serv['title']?>
            </h2>
            <p class="title-description">
                <?= $serv['descr']?>

            </p>
        <?php }; ?>
        </div>
        <div class="service__items">
            <?php foreach ($atts['service'] as $service){?>

            <div class="service__item grid--3">
                <div class="service__item-img"><img src="<?= $service['photo']['url']?>" alt="Photo "></div>
                <h5 class="service__item-title"><span><?= $service['title']?></span></h5>
                <p class="service__item-description"><?= $service['descr']?></p>
                <a href="<?= $service['link']?>" class="btn__more">Подробнее</a>
            </div>
            <?php }; ?>

        </div>
    </div>




</section>
<!-- end service.html-->

<!-- start company.html-->
<section class="company">
    <div class="container">
    <?php foreach ($atts['ocompany'] as $company) { ?>

        <div class="title-head">
            <h2 class="title-main">
            <?= $company['text_block']?>
            </h2>
        </div>
        <div class="grid">
            <div class="grid--6">
                <div class="company__content">
                <?= $company['desc_block']?>
                </div>
                <a href="<?= $company['link_block']?>" class="btn__learn">Узнать больше</a>
            </div>
            <div class="grid--6">
                <div class="company__img">
                    <img src="<?= $company['foto']['url'] ?>" alt="Img">
                </div>
            </div>
        </div>
    <?php }; ?>
    </div>
</section>
<!-- end company.html-->

<!-- start consulting.html-->
<section class="consulting">
    <div class="container">
        <div class="title-head">
        <?php foreach ($atts['consulting'] as $cons){?>

            <h2 class="title-main">
                <?= $cons['text_block'] ?>
            </h2>
            <p class="title-description">
            <?= $cons['text_block'] ?>
            </p>
        <?php }; ?>
        </div>                                
        <?= do_shortcode('[contact-form-7  id="68" title="Контактная форма на главной страницы" html_class="forms" ]')?>

    </div>
</section>
<!-- end consulting.html-->

<!-- start footer.html-->
<button onclick="topFunction()"  id="btnScrollToTop" title="Go to top">
    <svg version="1.1" id="Layer_1"  x="0px" y="0px"
    viewBox="0 0 492.002 492.002" style="enable-background:new 0 0 492.002 492.002;" xml:space="preserve">

       <path d="M484.136,328.473L264.988,109.329c-5.064-5.064-11.816-7.844-19.172-7.844c-7.208,0-13.964,2.78-19.02,7.844
           L7.852,328.265C2.788,333.333,0,340.089,0,347.297c0,7.208,2.784,13.968,7.852,19.032l16.124,16.124
           c5.064,5.064,11.824,7.86,19.032,7.86s13.964-2.796,19.032-7.86l183.852-183.852l184.056,184.064
           c5.064,5.06,11.82,7.852,19.032,7.852c7.208,0,13.96-2.792,19.028-7.852l16.128-16.132
           C494.624,356.041,494.624,338.965,484.136,328.473z"/>

</svg>
</button>