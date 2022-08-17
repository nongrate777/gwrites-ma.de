<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_details'))) { ?>
    <section id="Details-wrap" class="_light-white">
        <div class="container _pt_sm _pb_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Details" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'details_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'details_title'); ?></h1>
                </div>
            </div>
            <?php
            $details = 'details';
            $detailsForm = 'details-forms__items';
            if (count(carbon_get_post_meta(HOMEPAGE, 'details')) === 5) {
                $details = 'details_v3';
                $detailsForm = 'details-forms__items_v3';
            }
            if (count(carbon_get_post_meta(HOMEPAGE, 'details')) === 4) {
                $details = 'details_v2';
            }
            ?>
            <div class="<?= $details; ?>">
                <?php foreach (carbon_get_post_meta(HOMEPAGE, 'details') as $item) { ?>
                    <div class="details__item _white">
                        <div class="details__item-title">
                            <?= $item['title']; ?>
                        </div>
                        <div class="details__item-text _hidden_sm">
                            <?= $item['description']; ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="details-forms _lite-white">
                    <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'shortform'); return true;">
                        <div class="details-forms__title">
                            HABEN SIE FRAGEN? Füllen Sie das Formular aus und wir
                            werden uns innerhalb von 15&nbsp;Minuten bei Ihnen melden!
                        </div>
                        <div class="<?= $detailsForm; ?>">
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
                        <div class="details-forms__btn">
                            <button class="btn btn_orange gtm-small-form">Abschicken</button>
                        </div>
                        <div class="details-forms__text">
                            Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                        </div>
                        <input type="hidden" name="form-id" value="mail-form-medium">
                        <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php } ?>