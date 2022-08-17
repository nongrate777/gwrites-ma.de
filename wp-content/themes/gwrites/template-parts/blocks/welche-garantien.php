<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_garantien'))) { ?>
    <section id="Garantien-wrap" class="_light-white">
        <div class="container _pt_lg _pb_lgg">
            <div class="title-wrapper _center">
                <div class="title-wrapper__subtitle title-wrapper__subtitle_dark-gray">
                    <div id="Garantien" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'garantien_subtitle'); ?>
                </div>
                <div class="title-wrapper__title title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'garantien_title'); ?></h1>
                </div>
            </div>



            <!-- <div class="reasons__items js-garantien"> -->
            <div class="js-garantien">
              <div class="swiper-wrapper"> 
                <div class="reasons__item  swiper-slide">
                    <div class="reasons__item-image">
                        <img src="/wp-content/themes/gwrites/assets/online/garantien-1.jpg" alt="garantien-1">
                    </div>
                    <div class="reasons__item-description">
                        <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'garantien_heading_1'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'garantien_desc_1'); ?></p>
                    </div>
                </div>
                <div class="reasons__item  swiper-slide">
                    <div class="reasons__item-image">
                    <img src="/wp-content/themes/gwrites/assets/online/garantien-2.jpg" alt="Ghostwriting">
                    </div>
                    <div class="reasons__item-description">
                        <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'garantien_heading_2'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'garantien_desc_2'); ?></p>
                    </div>
                </div>
                <div class="reasons__item  swiper-slide">
                    <div class="reasons__item-image">
                    <img src="/wp-content/themes/gwrites/assets/online/garantien-3.jpg" alt="Ghostwriting">
                    </div>
                    <div class="reasons__item-description">
                        <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'garantien_heading_3'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'garantien_desc_3'); ?></p>
                    </div>
                </div>
                <div class="reasons__item  swiper-slide">
                    <div class="reasons__item-image">
                    <img src="/wp-content/themes/gwrites/assets/online/garantien-4.jpg" alt="Ghostwriting">
                    </div>
                    <div class="reasons__item-description">
                        <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'garantien_heading_4'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'garantien_desc_4'); ?></p>
                    </div>
                </div>
              </div>
                    <div class="garantien__arrows">
                        <div class="subjects__arrow js-garantien-prev"></div>
                        <div class="subjects__arrow js-garantien-next"></div>
                    </div>
            </div>



        </div>
    </section>
<?php } ?>