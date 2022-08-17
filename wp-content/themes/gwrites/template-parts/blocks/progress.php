<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_progress'))) { ?>
    <section id="Progress-wrap" class="_light-white _pt_lgg"> 
        <div class="container _pb_lg">
            <div class="title-wrapper _left">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Progress" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'progress_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'progress_title'); ?></h1>
                </div>
            </div>
            <div class="progress">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="progress__item">
                        <?= carbon_get_post_meta(HOMEPAGE, "progress_text_{$i}"); ?>
                    </div>
                <?php } ?>

            </div>
            
        </div>
    </section>
<?php } ?>