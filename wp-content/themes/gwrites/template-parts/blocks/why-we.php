<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_why_we'))) { ?>
    <section id="Warum-wir-wrap" class="_light-white">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Warum-wir" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'why_we_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'why_we_title'); ?></h1>
                </div>
            </div>
            <div class="why-we">
                <div class="why-we__tabs">
                    <?php foreach (carbon_get_post_meta(HOMEPAGE, 'why_we') as $key => $item) { ?>
                        <div class="why-we__tabs-item <?= ($key === 0) ? 'active' : ''; ?>" data-slide="<?= $key; ?>">
                            <span><?= $item['title']; ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="why-we__wrap">
                    <div class="why-we__content js-why">
                        <div class="swiper-wrapper">
                            <?php foreach (carbon_get_post_meta(HOMEPAGE, 'why_we') as $key => $item) { ?>
                                <div class="why-we__content-item swiper-slide">
                                    <div class="why-we__content-img">
                                        <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>"/>
                                    </div>
                                    <div class="why-we__content-info">
                                        <?= wpautop($item['description']); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="why-we__arrows">
                        <div class="why-we__arrow js-why-prev"></div>
                        <div class="why-we__arrow js-why-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>