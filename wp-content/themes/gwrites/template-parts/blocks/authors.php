<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_author'))) { ?>
    <section id="Autoren-wrap" class="_light-white _pb_md _pt_md">
        <div class="_dark-blue _pt_md _pb_md">
            <div class="container">
                <div class="authors">
                    <div class="authors__empty">
                        <img src="<?= URI; ?>/src/images/authors/img01.png" alt="Autoren"/>
                    </div>
                    <div class="authors__content">
                        <div class="title-wrapper">
                            <div class="title-wrapper__title title-wrapper__title_white">
                                <div id="Autoren" class="anchor"></div>
                                <h1><?= carbon_get_post_meta(HOMEPAGE, 'author_title'); ?></h1>
                            </div>
                            <div class="title-wrapper__text_white">
                                <strong>
                                    <?= carbon_get_post_meta(HOMEPAGE, 'author_subtitle'); ?>
                                </strong>
                            </div>
                        </div>
                        <div class="authors__content-text">
                            <?= carbon_get_post_meta(HOMEPAGE, 'author_text'); ?>
                        </div>
                        <div class="authors__content-number">
                            <div class="authors__content-number-item">
                                <div class="authors__content-number-title">
                                    <?= carbon_get_post_meta(HOMEPAGE, 'author_num_1'); ?>
                                </div>
                                <div class="authors__content-number-text">Bachelors</div>
                            </div>
                            <div class="authors__content-number-item">
                                <div class="authors__content-number-title">
                                    <?= carbon_get_post_meta(HOMEPAGE, 'author_num_2'); ?>
                                </div>
                                <div class="authors__content-number-text">Magister</div>
                            </div>
                            <div class="authors__content-number-item">
                                <div class="authors__content-number-title">
                                    <?= carbon_get_post_meta(HOMEPAGE, 'author_num_3'); ?>
                                </div>
                                <div class="authors__content-number-text">Doktoren</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>