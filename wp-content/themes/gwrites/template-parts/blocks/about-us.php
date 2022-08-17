<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_about'))) { ?>
    <section id="About-wrap" class="_light-white ">
        <div class="container _pb_lg _pt_mob">
            <div class="title-wrapper _left">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="About" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'about_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'about_title'); ?></h1>
                </div>
            </div>
            <div class="about-us">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="about__item">
                        <?= carbon_get_post_meta(HOMEPAGE, "about_text_{$i}"); ?>
                    </div>
                <?php } ?>

            </div> 
            
        </div>
    </section>
<?php } ?>