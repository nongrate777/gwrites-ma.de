<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_details'))) { ?>
    <section id="Details-wrap" class="_light-white">
        <div class="container _pt_sm _pb_lg">
            <div class="details_v4">
                <div class="details_v4__left">
                    <div class="details_v4__left-img">
                        <img src="<?= get_template_directory_uri(); ?>/src/images/details/img01.png" alt="">
                    </div>
                </div>
                <div class="details_v4__right">
                    <div class="title-wrapper">
                        <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                            <div id="Details" class="anchor"></div>
                            <?= carbon_get_post_meta(HOMEPAGE, 'details_subtitle'); ?>
                        </div>
                        <div class="title-wrapper__title_blue">
                            <h1><?= carbon_get_post_meta(HOMEPAGE, 'details_title'); ?></h1>
                        </div>
                    </div>
                    <div class="details_v4__right-img">
                        <img src="<?= get_template_directory_uri(); ?>/src/images/details/img01.png" alt="">
                    </div>
                    <div class="details_v4__right-title">
                        Eine Facharbeit ist ein Mittel zur Vorbereitung auf das Scrheiben einer akademischen Arbeit.
                    </div>
                    <div class="details_v4__right-text">
                        Dazu gehören nicht nur die selbständige Wahl eines Themas, sondern auch solche Etappen wie
                        Literaturrecherche, Erarbeitung eines argumentativen Konzeptes und das korrekte Zitieren von
                        Fachliteratur. Diese Art der Arbeit dient auch als Leistungskontrolle und ersetzt in vielen
                        Fällen sogar die Semesterklausur.
                    </div>
                    <div class="details_v4__right-title">
                        Ziel der Facharbeit
                    </div>
                    <div class="details_v4__right-text">
                        Es ist zu beweisen, dass der Studierende zur selbständigen Erarbeitung eines zuvor mit dem
                        Betreuer besprochenen Themas bereit ist.
                    </div>
                    <div class="details_v4__right-text">
                        Damit der betreuende Dozent eine Grundlage hat, die Facharbeit zu beurteilen, muss der
                        Studierende mit der Facharbeit folgende Leistungen unter Beweis stellen:
                    </div>
                    <div class="details_v4__right-list">
                        <ul>
                            <li>Eigenständige Themenfindung und Fragestellung</li>
                            <li>Erstellung eines inhaltlichen Konzeptes und der Gliederung</li>
                            <li>Suche nach der relevanten Fachliteratur</li>
                            <li>Argumentative Beantwortung der Forschungsfrage</li>
                            <li>Korrektes Anwenden von Zitierregeln</li>
                            <li>Zusammenstellung der Bibliografie</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="details-forms _white">
                <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'shortform'); return true;">
                    <div class="details-forms__title">
                        HABEN SIE FRAGEN? Füllen Sie das Formular aus und wir<br>
                        werden uns innerhalb von 15&nbsp;Minuten bei Ihnen melden!
                    </div>
                    <div class="details_v4__form">
                        <div class="form-row details_v4__form-item">
                            <div class="form-col _size_2 _size_md_6">
                                <div class="<?= $detailsForm; ?>-item">
                                    <div class="form-input _pb_xxs">
                                        <label class="form-input__label" for="mail-form-1-name">Vorname / Nickname</label>
                                        <input class="form-input__input"
                                               id="mail-form-1-name"
                                               placeholder="Vorname / Nickname"
                                               name="name"
                                               type="text"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-col _size_2 _size_md_6">
                                <div class="<?= $detailsForm; ?>-item">
                                    <div class="form-input _pb_xxs">
                                        <label class="form-input__label" for="mail-form-1-email">E-Mail</label>
                                        <input class="form-input__input"
                                               placeholder="E-Mail"
                                               id="mail-form-1-email"
                                               name="email"
                                               type="text"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-col _size_2 _size_md_6">
                                <div class="details_v4__form-btn _pb_xxs">
                                    <button class="btn btn_orange _w-100 gtm-small-form">Abschicken</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-row details_v4__form-item">
                            <div class="form-col _size_6">
                                <div class="details_v4__form-item-text _pb_xxs">
                                    Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="form-id" value="mail-form-medium">
                    <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                </form>
            </div>
        </div>
    </section>
<?php } ?>