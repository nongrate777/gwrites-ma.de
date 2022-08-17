<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_additional_services'))) { ?>
    <section id="Optionale-Dienste-wrap" class="_light-white">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Optionale-Dienste" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'additional_services_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'additional_services_title'); ?></h1>
                </div>
            </div>
            <div class="additional-service">
                <div class="additional-service__items js-additional">
                    <div class="swiper-wrapper">
                        <?php foreach (carbon_get_post_meta(HOMEPAGE, 'additional_services') as $item) { ?>
                            <div class="additional-service__items-item swiper-slide js-open-popup"
                                 data-id="service-form-popup"
                            >
                                <div class="additional-service__items-item-img">
                                    <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>"/>
                                </div>
                                <div class="additional-service__items-item-text">
                                    <?= $item['title']; ?>
                                </div>
                                <div class="additional-service__items-item-link">
                                    <span>Eine Аrbeit bestellen<span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="additional-service__arrows">
                        <div class="additional-service__arrow js-additional-prev"></div>
                        <div class="additional-service__arrow js-additional-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>