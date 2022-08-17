<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_specialties'))) { ?>
    <section id="Wissenschaftsgebiet-wrap">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Wissenschaftsgebiet" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'specialties_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'specialties_title'); ?></h1>
                </div>
            </div>
            <div class="subjects-dissertation">
                <div class="subjects-dissertation__items js-subjects">
                    <div class="swiper-wrapper">
                        <div class="subjects-dissertation__items-item swiper-slide">
                            <div id="sd-1" class="subjects-dissertation__items-item-title">
                                Wirtschaft und Jura
                            </div>
                            <div class="subjects-dissertation__items-item-text">
                                <ul>
                                    <li>Betriebswirtschaftslehre (BWL)</li>
                                    <li>Allgemeine Volkswirtschaft</li>
                                    <li>Management</li>
                                    <li>Sportökonomie</li>
                                    <li>Wirtschaftspsychologie</li>
                                    <li>Wirtschaftsingenieurwesen</li>
                                    <li>Marketing</li>
                                    <li>Rechtsgeschichte</li>
                                    <li>Handelsrecht</li>
                                    <li>Strafrecht</li>
                                    <li>Arbeitsrecht</li>
                                    <li>Steuerrecht</li>
                                    <li>Familienrecht</li>
                                    <li>Wirtschaftsrecht</li>
                                </ul>
                            </div>
                        </div>
                        <div class="subjects-dissertation__items-item swiper-slide">
                            <div id="sd-2" class="subjects-dissertation__items-item-title">
                                Sprachwissenschaften
                            </div>
                            <div class="subjects-dissertation__items-item-text">
                                <ul>
                                    <li>Herkunft von Sprachen</li>
                                    <li>Entwicklung von Sprachen</li>
                                    <li>Bestandteile von Sprachen</li>
                                    <li>Einheiten von Sprachen</li>
                                    <li>Kommunikation, Wahrnehmung</li>
                                    <li>Semantik</li>
                                    <li>Sprachvergleich, Sprachsysteme</li>
                                    <li>Dialektologie</li>
                                    <li>Lexikologie</li>
                                    <li>Linguistik des Textes</li>
                                    <li>Literaturwissenschaft</li>
                                    <li>Bibliothekswissenschaft</li>
                                    <li>Soziolinguistik</li>
                                    <li>Philologie</li>
                                    <li>Politische Institutionen</li>
                                    <li>Sprachwissenschaft</li>
                                </ul>
                            </div>
                        </div>
                        <div class="subjects-dissertation__items-item swiper-slide">
                            <div id="sd-3" class="subjects-dissertation__items-item-title">
                                Medizinwissenschaften
                            </div>
                            <div class="subjects-dissertation__items-item-text">
                                <ul>
                                    <li>Pharmazie</li>
                                    <li>Anatomie</li>
                                    <li>Anästhesiologie</li>
                                    <li>Chirurgie</li>
                                    <li>Gesundheitswissenschaft</li>
                                    <li>Humanmedizin</li>
                                    <li>Kinder- und Jugendmedizin</li>
                                    <li>Hygiene- und Umweltmedizin</li>
                                    <li>Neurologie</li>
                                    <li>Pathologie</li>
                                    <li>Gesundheitsmanagement</li>
                                    <li>Physiologie</li>
                                    <li>Pflegewissenschaften</li>
                                    <li>Orthopädie</li>
                                </ul>
                            </div>
                        </div>
                        <div class="subjects-dissertation__items-item swiper-slide">
                            <div id="sd-4" class="subjects-dissertation__items-item-title">
                                Erziehungswissenschaften
                            </div>
                            <div class="subjects-dissertation__items-item-text">
                                <ul>
                                    <li>Vorschulpädagogik</li>
                                    <li>Geschichte der Pädagogik</li>
                                    <li>Logopädie</li>
                                    <li>Methodik des Unterrichts</li>
                                    <li>Pädagogische Innovation</li>
                                    <li>Sozialpädagogik</li>
                                    <li>Sonderpädagogik</li>
                                    <li>Vergleichende Pädagogik</li>
                                    <li>Taubstummenpädagogik</li>
                                    <li>Erziehungstheorie</li>
                                    <li>Schulbildung</li>
                                    <li>Blindenpädagogik</li>
                                    <li>Sehbehindertenpädagogik</li>
                                    <li>Didaktik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="subjects__arrows">
                        <div class="subjects__arrow js-subjects-prev"></div>
                        <div class="subjects__arrow js-subjects-next"></div>
                    </div>
                </div>
                <div class="subjects-dissertation__bottom">
                    <div class="subjects-dissertation__bottom-content _center">
                        <div class="subjects-dissertation__bottom-title">
                            Sie können Ihr Thema nicht in der Liste finden?
                        </div>
                        <div class="subjects-dissertation__bottom-text">
                            Kein Problem! Wir können Arbeiten zu jedem Thema verfassen
                        </div>
                    </div>
                    <div class="subjects-dissertation__bottom-btn">
                        <button class="btn btn_red js-open-popup" data-id="main-form-popup">Arbeit bestellen</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>