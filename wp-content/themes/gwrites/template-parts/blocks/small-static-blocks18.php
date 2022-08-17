<?php
$data = [
    // 1 => [14, 150, 60, 190],
    // 3 => [17, 100, 60, 190],
    // 4 => [14, 140, 60, 190],
    // 5 => [14, 170, 60, 190],
    // 6 => [14, 200, 60, 190],
    // 7 => [14, 50, 60, 190],
    18 => [25, 250, 60, 210],
];
?>
<section>
    <div class="container _pt_lg _pb_lg">
        <div class="stats js-stats">
            <div class="swiper-wrapper">
                <div class="stats__item swiper-slide">
                    <div class="stats__item-title">
                        <span class="js-number" data-number="<?= $data[get_current_blog_id()][0]; ?>">0</span>
                    </div>
                    <div class="stats__item-text js-count">Mitarbeiter</div>
                </div>
                <div class="stats__item swiper-slide">
                    <div class="stats__item-title">
                        <span class="js-number" data-number="<?= $data[get_current_blog_id()][2]; ?>">0</span>+
                    </div>
                    <div class="stats__item-text">Wissenschaftsbereiche</div>
                </div>
                <div class="stats__item swiper-slide">
                    <div class="stats__item-title js-count">
                        <span class="js-number" data-number="<?= $data[get_current_blog_id()][1]; ?>">0</span>+
                    </div>
                    <div class="stats__item-text js-count">Fertige Arbeiten</div>
                </div>
                <div class="stats__item swiper-slide">
                    <div class="stats__item-title">
                        <span class="js-number" data-number="<?= $data[get_current_blog_id()][3]; ?>">0</span>+
                    </div>
                    <div class="stats__item-text">Autoren</div>
                </div>
                <div class="stats__item swiper-slide active _hidden_xl">
                    <div class="js-switcher">
                        <div class="stats__item-title"><?= rand(5,20); ?></div>
                        <div class="stats__item-text">
                            Personen füllen momentan das Auftragsformular aus
                        </div>
                    </div>
                    <div class="js-switcher _hidden">
                        <div class="stats__item-title"><?= rand(1,5); ?></div>
                        <div class="stats__item-text">
                            Personen&nbsp;sehen&nbsp;sich die&nbsp;Seite&nbsp;gerade&nbsp;an
                        </div>
                        <div class="stats__item-link js-open-popup" data-id="main-form-popup">Eine Аrbeit bestellen</div>
                    </div>
                </div>
            </div>
            <div class="stats__arrows">
                <div class="stats__arrow js-stats-prev"></div>
                <div class="stats__arrow js-stats-next"></div>
            </div>
        </div>
    </div>
</section>
