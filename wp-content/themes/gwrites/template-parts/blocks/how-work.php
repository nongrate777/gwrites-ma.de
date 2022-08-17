<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_work'))) { ?>
    <section id="Wie-wir-arbeiten-wrap" class="_white">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper _center">
                <div class="title-wrapper__subtitle title-wrapper__subtitle_dark-gray">
                    <div id="Wie-wir-arbeiten" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'work_subtitle'); ?>
                </div>
                <div class="title-wrapper__title title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'work_title'); ?></h1>
                </div>
            </div>
            <div class="how-work js-work">
                <div class="swiper-wrapper">
                    <?php foreach (carbon_get_post_meta(HOMEPAGE, 'work') as $key => $item) { $number = $key + 1; ?>
                        <div class="how-work__item swiper-slide">
                            <div class="how-work__item-title">
                                <h3><?= $item['title']; ?></h3>
                                <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>"/>
                            </div>
                            <div class="how-work__item-text">
                                <?= wpautop($item['description']); ?>
                            </div>
                            <div class="how-work__item-number"><?= ($number > 9) ? $number : '0' . $number; ?></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="how-work__arrows">
                    <div class="how-work__arrow js-work-prev"></div>
                    <div class="how-work__arrow js-work-next"></div>
                </div>
            </div>
            <div class="how-work__pagination js-work-pagination"></div>
        </div>
    </section>
<?php } ?>