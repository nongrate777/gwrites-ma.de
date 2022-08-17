<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_reviews'))) { ?>
    <section id="Bewertungen-wrap" class="_light-white">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Bewertungen" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'reviews_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'reviews_title'); ?></h1>
                </div>
            </div>
            <div class="reviews js-reviews">
                <div class="swiper-wrapper">
                    <?php foreach (carbon_get_post_meta(HOMEPAGE, 'reviews') as $item) { ?>
                        <div class="reviews__item _center swiper-slide">
                            <div class="reviews__item-text">
                                <?= $item['description']; ?>
                            </div>
                            <div class="reviews__item-subtitle">
                                <?= $item['title']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="reviews__arrows">
                    <div class="reviews__arrow js-reviews-prev"></div>
                    <div class="reviews__arrow js-reviews-next"></div>
                </div>
            </div>
            <div class="reviews__pagination js-reviews-pagination"></div>
        </div>
    </section>
<?php } ?>