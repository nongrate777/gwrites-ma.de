<section id="Leistungen-wrap" class="">
    <div class="container _pt_lg _pb_lg">
        <div class="title-wrapper">
            <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                <div id="Leistungen" class="anchor"></div>
                <?= carbon_get_post_meta(HOMEPAGE, 'landing_subtitle'); ?>
            </div>
            <div class="title-wrapper__title_blue">
                <h1><?= carbon_get_post_meta(HOMEPAGE, 'landing_title'); ?></h1>
            </div>
        </div>
        <div class="work-progress__wrap">
            <div class="work-progress js-progress">
                <div class="swiper-wrapper">
                    <?php
                    $i = 1;
                    foreach (\DE\Helpers::sites() as $key => $site) {
                        if ($key !== get_current_blog_id()) {
                            ?>
                            <a class="work-progress__item swiper-slide <?= (!$site['link']) ? 'js-open-popup' : '' ?> image<?= $i; ?>"
                               href="<?= !empty($site['link']) ? $site['link'] : '#' ?>"
                                <?= ($site['link']) ? 'target="_blank"' : ''; ?>
                                <?= (!$site['link']) ? 'data-id="main-form-popup"' : '' ?>
                            >
                                <div class="work-progress__item-text">
                                    <?= $site['name']; ?>
                                    <div class="work-progress__item-link">
                                        Eine Arbeit bestellen
                                    </div>
                                </div>
                            </a>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="work-progress__arrows">
            <div class="work-progress__arrow js-progress-prev"></div>
            <div class="work-progress__arrow js-progress-next"></div>
        </div>
    </div>
</section>