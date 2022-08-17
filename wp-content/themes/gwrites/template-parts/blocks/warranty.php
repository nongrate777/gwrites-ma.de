<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_guarantees'))) { ?>
    <section id="Garantien-wrap" class="_light-white">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper _center">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Garantien" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'guarantees_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'guarantees_title'); ?></h1>
                </div>
            </div>
            <div class="warranty">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <div class="warranty__item">
                        <?= carbon_get_post_meta(HOMEPAGE, "guarantees_text_{$i}"); ?>
                    </div>
                <?php } ?>
                <div class="warranty__item-last">
                    <div class="warranty__item-last-title">Brauchen Sie mehr Garantien?</div>
                    <div class="warranty__item-last-text">Rufen Sie uns an!</div>
                    <div class="warranty__item-last-contact">
                        <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(HOMEPAGE, 'phone')); ?>"
                           onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'clickonthephonenumber'); return true;"
                        >
                            <?= carbon_get_post_meta(HOMEPAGE, 'phone'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>