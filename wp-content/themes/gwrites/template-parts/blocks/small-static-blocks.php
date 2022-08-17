<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'blocks'))) { ?>
    <?php
    $advantages = 'advantages';
    if (count(carbon_get_post_meta(HOMEPAGE, 'blocks')) === 4) {
        $advantages .= ' advantages_v2';
    }
    ?>
    <section class="_light-white _pt_lg _pb_sm">
        <div class="container">
            <div class="<?= $advantages; ?>">
                <?php foreach (carbon_get_post_meta(HOMEPAGE, 'blocks') as $item) { ?>
                    <div class="advantages__item">
                        <?= $item['text']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>