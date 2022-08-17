<div id="main-form-popup" class="popup-wrap _hidden">
    <div class="popup-big _white _pt_lg _pb_sm">
        <div class="popup-close"></div>
        <div class="popup-head">
            <div class="popup-big__subtitle _center">
                Das Ausfüllen des Formulars dauert maximal 1 Minute
            </div>
            <div class="popup-big__title _center">
                Fordern Sie einen unverbindlichen Kostenvoranschlag an
            </div>
        </div>
        <div class="popup-body">
            <form class="_white js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'fullform'); return true;">
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-select _pb_xxs">
                            <label class="form-select__label" for="main-form-2-specialization">
                                Wählen Sie eine Fachrichtung
                            </label>
                            <div class="form-select__btn">Wählen Sie eine Fachrichtung</div>
                            <?php get_template_part('template-parts/components/form/select-specialties'); ?>
                            <input class="form-select__input-hidden"
                                   id="main-form-2-specialization"
                                   name="specialization"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input">
                            <label class="form-input__label_sm">Service</label>
                            <div class="form-radio _mb_xxs">
                                <input type="radio" id="main-form-2-radio-1" name="service" value="Schreiben" checked>
                                <label for="main-form-2-radio-1">Schreiben</label>

                                <input type="radio" id="main-form-2-radio-2" name="service" value="Korrektur">
                                <label for="main-form-2-radio-2">Korrektur</label>

                                <input type="radio" id="main-form-2-radio-3" name="service" value="Lektorat">
                                <label for="main-form-2-radio-3">Lektorat</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-textarea _pb_xxs">
                            <label class="form-textarea__label_sm" for="main-form-2-textarea">Thema der Arbeit</label>
                            <textarea class="form-textarea__input"
                                      placeholder="Thema der Arbeit"
                                      id="main-form-2-textarea"
                                      name="theme"
                                      rows="2"
                            ></textarea>
                        </div>
                    </div>
                    <div class="form-col _size_1 _size_md_3">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-2-count">Seitenanzahl</label>
                            <div class="form-counter">
                                <div data-id="decrement" class="counter-btn">-</div>
                                <input class="form-input__input count-input"
                                       id="main-form-2-count"
                                       name="number"
                                       type="number"
                                       value="40"
                                       max="1000"
                                       min="0"
                                       step="5"
                                />
                                <div data-id="increment" class="counter-btn">+</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-col _size_1 _size_md_3 _pb_xxs">
                        <label class="form-input__label_sm">&nbsp;</label>
                        <div class="form-counter-text">Seiten</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="_size_auto">
                            <div class="form-checkbox">
                                <div class="form-checkbox__title">Spezifikation:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-empirisch"
                                           name="specification[]"
                                           value="Empirisch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-empirisch">Empirisch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-literatur"
                                           name="specification[]"
                                           value="Literatur"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-literatur">Literatur</label>
                                </div>
                            </div>
                            <div class="form-checkbox">
                                <div class="form-checkbox__title">Umfang Typ:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-seiten"
                                           name="rounding[]"
                                           type="checkbox"
                                           value="Seiten"
                                    />
                                    <label for="main-form-2-seiten">Seiten</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-zeichen"
                                           name="rounding[]"
                                           value="Zeichen"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-zeichen">Zeichen</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-wörter"
                                           name="rounding[]"
                                           type="checkbox"
                                           value="Wörter"
                                    />
                                    <label for="main-form-2-wörter">Wörter</label>
                                </div>
                            </div>
                            <div class="form-checkbox _pb_xxs">
                                <div class="form-checkbox__title">Arbeitssprache:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-deutsch"
                                           name="language[]"
                                           value="Deutsch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-deutsch">Deutsch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-englisch"
                                           name="language[]"
                                           value="Englisch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-englisch">Englisch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-französisch"
                                           value="Französisch"
                                           name="language[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-französisch">Französisch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-spanisch"
                                           name="language[]"
                                           value="Spanisch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-spanisch">Spanisch</label>
                                </div>
                            </div>
                        </div>
                        <div class="_size_auto">
                            <div class="form-checkbox">
                                <div class="form-checkbox__title">Zusätzliche Leistungen:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-präsentation"
                                           value="Präsentation"
                                           name="services[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-präsentation">Präsentation</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           value="Rede zur Verteidigung"
                                           id="main-form-2-verteidigung"
                                           name="services[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-verteidigung">Rede zur Verteidigung</label>
                                </div>
                                <!-- <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-exposé"
                                           name="services[]"
                                           type="checkbox"
                                           value="Exposé"
                                    />
                                    <label for="main-form-2-exposé">Exposé</label>
                                </div> -->
                            </div>
                            <div class="form-checkbox _pb_xxs">
                                <div class="form-checkbox__title _hidden_sm">&nbsp;</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-zusammenfassung"
                                           value="Zusammenfassung"
                                           name="services[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-2-zusammenfassung">Zusammenfassung</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-2-dispo"
                                           name="services[]"
                                           type="checkbox"
                                           value="Dispo"
                                    />
                                    <label for="main-form-2-dispo">Dispo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-2-deadline">Abgabetermin</label>
                            <div class="form-date">
                                <input class="form-date__input"
                                       placeholder="Abgabetermin"
                                       id="main-form-2-deadline"
                                       autocomplete="off"
                                       name="deadline"
                                       type="text"
                                />
                            </div>
                        </div>
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-2-name">Vorname / Nickname</label>
                            <input class="form-input__input"
                                   placeholder="Vorname / Nickname"
                                   id="main-form-2-name"
                                   type="text"
                                   name="name"
                            />
                        </div>
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-2-whatsapp">Telefon/WhatsApp</label>
                            <input class="form-input__input"
                                   placeholder="Telefon/WhatsApp"
                                   id="main-form-2-whatsapp"
                                   name="whatsapp"
                                   type="text"
                            />
                        </div>
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-2-email">E-Mail</label>
                            <input class="form-input__input"
                                   placeholder="E-Mail"
                                   id="main-form-2-email"
                                   name="email"
                                   type="text"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-row _pb_xxs">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-text form-text_sm">
                            Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <button class="btn btn_orange _w-100 gtm-full-form">DAS FORMULAR abschicken</button>
                    </div>
                </div>
                <input type="hidden" name="form-id" value="full-form">
                <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
            </form>
        </div>
    </div>
</div>