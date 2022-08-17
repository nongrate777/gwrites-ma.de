<div id="popup-bg" class="popup-bg _hidden">
    <?php
    if (get_current_blog_id() === 7) {
        get_template_part('template-parts/components/form/popup-form-7');
    } elseif (in_array(get_current_blog_id(), [4, 5, 6])) {
        get_template_part('template-parts/components/form/popup-form-4-5-6');
    } 
    elseif (in_array(get_current_blog_id(), [13])) {
        get_template_part('template-parts/components/form/popup-form-13');
    } 
    else {
        get_template_part('template-parts/components/form/popup-form');
    } 
    ?>

    <div id="close-form-popup" class="popup-wrap _hidden">
        <div class="popup-big _white _pt_lg _pb_sm">
            <div class="popup-close"></div>
            <div class="popup-head">
                <div class="popup-big__title _center">
                    Begrenztes Angebot
                </div>
                <div class="popup-big__subtitle _center">
                    Geben Sie Ihre Kontakte Kontaktdaten an und wählen Sie sich ein der  Geschenke aus
                </div>
            </div>
            <form class="js-form">
                <div class="popup-body">
                    <div class="popup-big__forms">
                        <div class="form-row">
                            <div class="form-col _size_2 _size_md_6">
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-close-whatsapp">
                                    Telefon/WhatsApp
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-close-whatsapp"
                                           placeholder="Telefon/WhatsApp"
                                           name="whatsapp"
                                           type="text"
                                    />
                                </div>
                            </div>
                            <div class="form-col _size_2 _size_md_6">
                                <div class="popup-big__forms-item">
                                    oder
                                </div>
                            </div>
                            <div class="form-col _size_2 _size_md_6">
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-close-email">
                                        E-Mail
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-close-email"
                                           placeholder="E-Mail"
                                           name="email"
                                           type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup-big__content">
                        <div class="popup-big__content-item _pb_xxs">
                            <div class="popup-big__content-img">
                                <img src="http://gwrites-ma.local/wp-content/themes/gwrites/src/images/popups/img01.png"
                                     alt="Erhalten Sie 25 Euro für Ihren Auftrag"
                                />
                            </div>
                            <div class="popup-big__content-form">
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="popup-close_1"
                                           name="params[]"
                                           value="Erhalten Sie 25 Euro für Ihren Auftrag"
                                    />
                                    <label for="popup-close_1">Erhalten Sie 25 Euro für Ihren Auftrag</label>
                                </div>
                            </div>
                        </div>
                        <div class="popup-big__content-item _pb_xxs">
                            <div class="popup-big__content-img">
                                <img src="http://gwrites-ma.local/wp-content/themes/gwrites/src/images/popups/img02.png"
                                     alt="Kostenlose 30 minütige Beratung mit dem Autor"
                                />
                            </div>
                            <div class="popup-big__content-form">
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="popup-close_2"
                                           name="params[]"
                                           value="Kostenlose 30 minütige Beratung mit dem Autor"
                                    />
                                    <label for="popup-close_2">Kostenlose 30 minütige Beratung mit dem Autor</label>
                                </div>
                            </div>
                        </div>
                        <div class="popup-big__content-item _pb_xxs">
                            <div class="popup-big__content-img">
                                <img src="http://gwrites-ma.local/wp-content/themes/gwrites/src/images/popups/img03.png"
                                     alt="Kostenlose professionelle Plagiatsprüfung von Texten"
                                />
                            </div>
                            <div class="popup-big__content-form">
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="popup-close_3"
                                           name="params[]"
                                           value="Kostenlose professionelle Plagiatsprüfung von Texten"
                                    />
                                    <label for="popup-close_3">Kostenlose professionelle Plagiatsprüfung von Texten</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-footer">
                    <div class="popup-big__btn">
                        <input type="hidden" name="form-id" value="close-form">
                        <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                        <button class="btn btn_blue btn_w-100_sm">Abschicken</button>
                    </div>
                    <div class="popup-big__text _center">* Gültig für 5 Tage</div>
                </div>
            </form>
        </div>
    </div>

    <div id="service-form-popup" class="popup-wrap _hidden">
        <div class="popup-big _white">
            <div class="popup-close"></div>
            <div class="popup-head">
                <div class="popup-big__title _center">
                    Mit uns können Sie Ihre Arbeit<br />von A bis Z vorbereiten
                </div>
                <div class="popup-big__subtitle _center">
                    Wählen Sie die Extras, die Sie für Ihre Arbeit benötigen, und unsere Wissenschaftspädagogen werden Ihnen dabei helfen.
                </div>
            </div>
            <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'additionalservices'); return true;">
                <div class="popup-body">
                    <div class="popup-big__form">
                        <div class="form-row">
                            <div class="form-col _size_3 _size_sm_6">
                                <div class="form-checkbox">
                                    <div class="form-checkbox__title">Wählen Sie eine Dienstleistung:</div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-1"
                                               value="Sprachauswahl"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-1">Sprachauswahl</label>
                                    </div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-2"
                                               value="Themenauswahl (3 Varianten)"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-2">Themenauswahl (3 Varianten)</label>
                                    </div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-3"
                                               value="Erstellung des Plans der Arbeit"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-3">Erstellung des Plans der Arbeit</label>
                                    </div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-4"
                                               value="Literaturauswahl"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-4">Literaturauswahl</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-col _size_3 _size_sm_6 _pb_xs">
                                <div class="form-checkbox">
                                    <div class="form-checkbox__title _hidden_sm">&nbsp;</div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-5"
                                               value="Plagiatsprüfung"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-5">Plagiatsprüfung</label>
                                    </div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-6"
                                               value="Lektorat"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-6">Lektorat</label>
                                    </div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-7"
                                               value="Korrektorat"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-7">Korrektorat</label>
                                    </div>
                                    <div>
                                        <input class="form-checkbox__input"
                                               id="popup-additional-service-8"
                                               value="Coaching"
                                               name="service[]"
                                               type="checkbox"
                                        />
                                        <label for="popup-additional-service-8">Coaching</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-col _size_3 _size_md_6">
                                <div class="form-select _pb_xxs">
                                    <label class="form-select__label" for="popup-additional-specialization">
                                        Wählen Sie eine Fachrichtung
                                    </label>
                                    <div class="form-select__btn">Mathematik</div>
                                    <?php get_template_part('template-parts/components/form/select-specialties'); ?>
                                    <input class="form-select__input-hidden"
                                           id="popup-additional-specialization"
                                           name="specialization"
                                           type="text"
                                    />
                                </div>
                                <div class="form-textarea _pb_xxs">
                                    <label class="form-textarea__label_sm" for="popup-additional-textarea">
                                        Thema der Arbeit
                                    </label>
                                    <textarea class="form-textarea__input"
                                              placeholder="Thema der Arbeit"
                                              id="popup-additional-textarea"
                                              style="height: 116px;"
                                              name="theme"
                                    ></textarea>
                                </div>
                            </div>
                            <div class="form-col _size_3 _size_md_6">
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-additional-name">
                                        Vorname / Nickname
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-additional-name"
                                           placeholder="Vorname / Nickname"
                                           name="name"
                                           type="text"
                                    />
                                </div>
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-additional-whatsapp">
                                    Telefon/WhatsApp
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-additional-whatsapp"
                                           placeholder="Telefon/WhatsApp"
                                           name="whatsapp"
                                           type="text"
                                    />
                                </div>
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-additional-email">
                                        E-Mail
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-additional-email"
                                           placeholder="E-Mail"
                                           name="email"
                                           type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-footer">
                    <div class="popup-big__btn">
                        <button class="btn btn_blue btn_w-100_sm gtm-additional-services">
                            DAS FORMULAR abschicken
                        </button>
                    </div>
                    <div class="popup-big__text _center">
                        Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                    </div>
                </div>
                <input type="hidden" name="form-id" value="medium-form">
                <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
            </form>
        </div>
    </div>

    <div id="call-form-popup" class="popup-wrap small _hidden">
        <div class="popup-call-me _white">
            <div class="popup-close"></div>
            <div class="popup-call-me _pt_sm _pb_xs">
                <div class="popup-head">
                    <div class="popup-call-me__title _center">Jetzt einen kostenlosen Rückruf bestellen</div>
                </div>
                <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'callback'); return true;">
                    <div class="popup-body">
                        <div class="form-row">
                            <div class="form-col _size_6 _pb_xs">
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-call-me-phone">
                                    Telefon/WhatsApp
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-call-me-phone"
                                           placeholder="Telefon/WhatsApp"
                                           name="phone"
                                           type="tel"
                                    />
                                </div>
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-call-me-name">
                                        Wie heißen Sie?
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-call-me-name"
                                           placeholder="Wie heißen Sie?"
                                           name="name"
                                           type="text"
                                    />
                                </div>
                                <div class="form-select _pb_xxs">
                                    <label class="form-select__label" for="popup-call-me-time">
                                        Um wie viel Uhr soll ich Sie anrufen?
                                    </label>
                                    <div class="form-select__btn">Jetzt, 09:00 bis 21:00...</div>
                                    <?php get_template_part('template-parts/components/form/select-time'); ?>
                                    <input class="form-select__input-hidden"
                                           id="popup-call-me-time"
                                           name="time"
                                           type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup-footer">
                        <div class="popup-call-me__btn">
                            <button class="btn btn_blue btn_w-100_sm gtm-call-form">
                                Abschicken
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="form-id" value="call-form">
                    <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                </form>
            </div>
        </div>
    </div>

    <div id="thanks-call-popup" class="popup-wrap small _hidden">
        <div class="popup-thanks _white">
            <div class="popup-close"></div>
            <div class="popup-thanks _pt_sm _pb_sm">
                <div class="popup-head">
                    <div class="popup-thanks__title _center">
                        Danke für ihre Anfrage!<br />
                        Wir melden uns bei ihnen so bald wie möglich
                    </div>
                </div>
                <div class="popup-footer">
                    <div class="popup-thanks__text _center">
                        <span>1 %-Rabatt</span> für jede Stunde Verspätung, wenn wir nicht innerhalb einer Stunde zurückrufen
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="thanks-popup" class="popup-wrap small _hidden">
        <div class="popup-thanks _white">
            <div class="popup-close"></div>
            <div class="popup-thanks _pt_sm _pb_sm">
                <div class="popup-head">
                    <div class="popup-thanks__title _center">
                        Danke für ihre Anfrage!<br />
                        Wir melden uns bei ihnen so bald wie möglich
                    </div>
                </div>
                <div class="popup-footer">
                    <div class="popup-thanks__text _center">
                        <span>1 %-Rabatt</span> für jede Stunde Verzögerung, wenn Sie innerhalb
                        einer Stunde keine E-Mail von uns erhalten haben.<br />
                        Überprüfen Sie auch Ihren <span>Spam-Ordner</span>
                    </div>
                    <div class="popup-thanks__img _center"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="mail-popup" class="popup-wrap small _hidden">
        <div class="popup-mail _white">
            <div class="popup-close"></div>
                <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'shortform'); return true;">
                    <div class="popup-mail__title">
                        <br>
                        <br>
                        HABEN SIE FRAGEN? Füllen Sie das Formular aus und wir
                        werden uns innerhalb von 15&nbsp;Minuten bei Ihnen melden!
                    </div>

                    <div class="form-row">
                        <div class="form-col _size_6">
                            <div class="form-input _pb_xxs">
                                <label class="form-input__label" for="mail-form-2-name">Vorname / Nickname</label>
                                <input class="form-input__input" id="mail-form-2-name" placeholder="Vorname / Nickname" name="name" type="text">
                            </div>
                        </div>

                        <div class="form-col _size_6">
                            <div class="form-input _pb_xxs">
                                <label class="form-input__label" for="mail-form-2-email">E-Mail</label>
                                <input class="form-input__input" placeholder="E-Mail" id="mail-form-2-email" name="email" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="popup-mail__btn">
                        <button class="btn btn_orange gtm-small-form">Abschicken</button>
                    </div>
                    <div class="popup-mail__text">
                        Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                    </div>
                    <input type="hidden" name="form-id" value="mail-form-medium">
                    <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                </form>
        </div>
    </div>
</div>