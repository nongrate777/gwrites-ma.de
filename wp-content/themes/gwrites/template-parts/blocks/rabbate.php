<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_garantien'))) { ?>
    <section id="Rabbate-wrap" class="_light-white">
        <div class="container _pt_lg">
            <div class="title-wrapper _left">
                <div class="title-wrapper__subtitle title-wrapper__subtitle_dark-gray">
                    <div id="Rabbate" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'rabbate_subtitle'); ?>
                </div>
                <div class="title-wrapper__title title-wrapper__title_blue">
                    <h1 class="title-ico"><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_title'); ?></h1>
                </div>
            </div>


            <!-- <div class="rabbate__items js-rabbate"> -->
            <div class="js-rabbate">
             <div class="swiper-wrapper"> 
                <div class="rabbate__item swiper-slide">
                    <div class="rabbate__item-image">
                    <img src="/wp-content/themes/gwrites/assets/online/rabbate-1.jpg" alt="garantien-1">
                    </div>
                    <div class="rabbate__item-description">
                    <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_heading_1'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_desc_1'); ?></p>
                    </div>
                </div>
                <div class="rabbate__item swiper-slide">
                    <div class="rabbate__item-image">
                    <img src="/wp-content/themes/gwrites/assets/online/rabbate-2.jpg" alt="garantien-1">
                    </div>
                    <div class="rabbate__item-description">
                    <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_heading_2'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_desc_2'); ?></p>
                    </div>
                </div>
                <div class="rabbate__item swiper-slide">
                    <div class="rabbate__item-image">
                    <img src="/wp-content/themes/gwrites/assets/online/rabbate-3.jpg" alt="garantien-1">
                    </div>
                    <div class="rabbate__item-description">
                    <p><strong><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_heading_3'); ?></strong></p>
                        <p><?= carbon_get_post_meta(HOMEPAGE, 'rabbate_desc_3'); ?></p>
                    </div>
                </div>
             </div> 
                    <div class="rabbate__arrows">
                        <div class="subjects__arrow js-rabbate-prev"></div>
                        <div class="subjects__arrow js-rabbate-next"></div>
                    </div>
            </div>

                <div class="btn-items__bottom">              
                        <button class="btn btn_red js-open-popup" data-id="main-form-popup">Arbeit bestellen</button>               
                </div>

        </div>
    </section>
<?php } ?>