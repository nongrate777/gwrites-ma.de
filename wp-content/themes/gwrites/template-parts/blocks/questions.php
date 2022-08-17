<section class="_very-light-blue">
    <div class="questions-background">
        <div class="container">
            <div class="questions _pt_lg _pb_lg">
                <div class="questions__top">
                    <div class="questions__top-title">
                        <div class="title-wrapper">
                            <div class="title-wrapper__title title-wrapper__title_blue">
                                <h1>Haben Sie noch Fragen?</h1>
                            </div>
                            <div class="title-wrapper__text">
                                Stellen Sie jetzt eine Anfrage und erhalten Sie eine kostenlose 30-minütige Beratung mit dem Autor zu allen Fragen!
                            </div>
                        </div>
                    </div>
                    <div class="alert-wrap _hidden_md">
                        <div class="alert-wrap__item">
                            <div class="alert-wrap__item-text">
                                Das Angebot nur gültig bei Auftragserteilung!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="questions-forms">
                    <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'shortform'); return true;">
                        <div class="questions-forms__items">
                            <div class="questions-forms__items-item">
                                <div class="form-textarea">
                                    <label class="form-textarea__label" for="form-mail-2-message">
                                        Schreiben Sie Ihre Nachricht
                                    </label>
                                    <textarea class="form-textarea__input form-textarea__input_max"
                                              placeholder="Schreiben Sie Ihre Nachricht"
                                              id="form-mail-2-message"
                                              style="height: 122px"
                                              name="message"
                                    ></textarea>
                                </div>
                            </div>
                            <div class="questions-forms__items-item">
                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label" for="form-mail-2-whatsapp">Telefon/WhatsApp</label>
                                    <input class="form-input__input"
                                           id="form-mail-2-whatsapp"
                                           placeholder="Telefon/WhatsApp"
                                           name="whatsapp"
                                           type="text"
                                    />
                                </div>
                                <div class="form-input">
                                    <label class="form-input__label" for="large-form-email">E-Mail</label>
                                    <input class="form-input__input"
                                           id="large-form-email"
                                           placeholder="E-Mail"
                                           name="email"
                                           type="text"
                                    />
                                </div>
                            </div>
                            <div class="questions-forms__btn">
                                <button class="btn btn_blue gtm-small-form">abschicken</button>
                            </div>
                        </div>
                        <div class="questions-forms__text">
                            Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                        </div>
                        <div class="alert-wrap _hidden _visible_md">
                            <div class="alert-wrap__item">
                                <div class="alert-wrap__item-text">
                                    Das Angebot nur gültig bei Auftragserteilung!
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="form-id" value="mail-form-large">
                        <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>