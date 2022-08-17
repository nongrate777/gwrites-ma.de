<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'blocks_two'))) { ?>
    <section class="_light-white">
        <div class="container _pt_lg _pb_lg">
            <div class="advantages-title _center">
                <h3><?= carbon_get_post_meta(HOMEPAGE, 'blocks_two_title'); ?></h3>
            </div>
            <div class="advantages">
                <?php foreach (carbon_get_post_meta(HOMEPAGE, 'blocks_two') as $item) { ?>
                    <div class="advantages__item">
                        <?= $item['text']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>