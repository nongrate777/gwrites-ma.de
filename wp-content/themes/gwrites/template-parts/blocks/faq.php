<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_faq'))) { ?>
    <section id="FAQ-wrap" class="_light-white">
        <div class="container _pt_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="FAQ" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'faq_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'faq_title'); ?></h1>
                </div>
            </div>
            <div class="faq">
                <div class="faq__col">
                    <?php
                    $i = 1;
                    foreach (carbon_get_post_meta(HOMEPAGE, 'faq') as $item) {
                        if ($i % 2) {
                            ?>
                            <div class="faq__item">
                                <div class="faq__item-head">
                                    <?= $item['title']; ?>
                                </div>
                                <div class="faq__item-body _hidden">
                                    <?= wpautop($item['description']); ?>
                                </div>
                            </div>
                            <?php
                        }
                        $i++;
                    }
                    ?>
                </div>
                <div class="faq__col">
                    <?php
                    $i = 1;
                    foreach (carbon_get_post_meta(HOMEPAGE, 'faq') as $item) {
                        if (!($i % 2)) {
                            ?>
                            <div class="faq__item">
                                <div class="faq__item-head">
                                    <?= $item['title']; ?>
                                </div>
                                <div class="faq__item-body _hidden">
                                    <?= wpautop($item['description']); ?>
                                </div>
                            </div>
                            <?php
                        }
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>