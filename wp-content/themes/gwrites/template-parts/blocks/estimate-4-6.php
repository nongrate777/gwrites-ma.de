<section class="_light-white">
    <div class="container _pt_lg _pb_lg">
        <div class="title-wrapper _center">
            <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                Das Ausfüllen des Formulars dauert maximal 1 Minute
            </div>
            <div class="title-wrapper__title_blue">
                <h1>Fordern Sie einen unverbindlichen Kostenvoranschlag an</h1>
            </div>
        </div>
        <div class="estimate-wrap">
            <form class="estimate _white js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'fullform'); return true;">
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-select _pb_xxs">
                            <label class="form-select__label" for="main-form-type">
                                Art von Arbeit
                            </label>
                            <div class="form-select__btn" >Art des Auftrags auswählen </div>
                            <?php get_template_part('template-parts/components/form/select-type'); ?>
                            <input class="form-select__input-hidden"
                                   id="main-form-type"
                                   name="type"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input">
                            <label class="form-input__label_sm">Service</label>
                            <div class="form-radio _mb_xxs">
                                <input type="radio" id="main-form-radio-1" name="service" value="Schreiben" checked>
                                <label for="main-form-radio-1">Schreiben</label>

                                <input type="radio" id="main-form-radio-2" name="service" value="Korrektur">
                                <label for="main-form-radio-2">Korrektur</label>

                                <input type="radio" id="main-form-radio-3" name="service" value="Lektorat">
                                <label for="main-form-radio-3">Lektorat</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-select _pb_xxs">
                            <label class="form-select__label" for="main-form-specialization">
                                Wählen Sie eine Fachrichtung
                            </label>
                            <div class="form-select__btn" >Wählen Sie eine Fachrichtung</div>
                            <?php get_template_part('template-parts/components/form/select-specialties'); ?>
                            <input class="form-select__input-hidden"
                                   id="main-form-specialization"
                                   name="specialization"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="form-col _size_1 _size_md_3">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-count">Seitenanzahl</label>
                            <div class="form-counter">
                                <div data-id="decrement" class="counter-btn">-</div>
                                <input class="form-input__input count-input"
                                       id="main-form-count"
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
                        <div class="form-textarea _pb_xxs">
                            <label class="form-textarea__label_sm" for="main-form-textarea">Thema der Arbeit</label>
                            <textarea class="form-textarea__input"
                                      placeholder="Thema der Arbeit"
                                      id="main-form-textarea"
                                      name="theme"
                                      rows="2"
                            ></textarea>
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-deadline">Abgabetermin</label>
                            <div class="form-date">
                                <input class="form-date__input"
                                       placeholder="Abgabetermin"
                                       id="main-form-deadline"
                                       autocomplete="off"
                                       name="deadline"
                                       type="text"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="_size_auto">
                            <div class="form-checkbox">
                                <div class="form-checkbox__title">Spezifikation:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-empirisch"
                                           name="specification[]"
                                           value="Empirisch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-empirisch">Empirisch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-literatur"
                                           name="specification[]"
                                           value="Literatur"
                                           type="checkbox"
                                    />
                                    <label for="main-form-literatur">Literatur</label>
                                </div>
                            </div>
                            <div class="form-checkbox">
                                <div class="form-checkbox__title">Umfang Typ:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-seiten"
                                           name="rounding[]"
                                           type="checkbox"
                                           value="Seiten"
                                    />
                                    <label for="main-form-seiten">Seiten</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-zeichen"
                                           name="rounding[]"
                                           value="Zeichen"
                                           type="checkbox"
                                    />
                                    <label for="main-form-zeichen">Zeichen</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-wörter"
                                           name="rounding[]"
                                           type="checkbox"
                                           value="Wörter"
                                    />
                                    <label for="main-form-wörter">Wörter</label>
                                </div>
                            </div>
                            <div class="form-checkbox _pb_xxs">
                                <div class="form-checkbox__title">Arbeitssprache:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-deutsch"
                                           name="language[]"
                                           value="Deutsch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-deutsch">Deutsch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-englisch"
                                           name="language[]"
                                           value="Englisch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-englisch">Englisch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-französisch"
                                           value="Französisch"
                                           name="language[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-französisch">Französisch</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-spanisch"
                                           name="language[]"
                                           value="Spanisch"
                                           type="checkbox"
                                    />
                                    <label for="main-form-spanisch">Spanisch</label>
                                </div>
                            </div>
                        </div>
                        <div class="_size_auto">
                            <div class="form-checkbox">
                                <div class="form-checkbox__title">Zusätzliche Leistungen:</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-präsentation"
                                           value="Präsentation"
                                           name="services[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-präsentation">Präsentation</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           value="Rede zur Verteidigung"
                                           id="main-form-verteidigung"
                                           name="services[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-verteidigung">Rede zur Verteidigung</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-exposé"
                                           name="services[]"
                                           type="checkbox"
                                           value="Exposé"
                                    />
                                    <label for="main-form-exposé">Exposé</label>
                                </div>
                            </div>
                            <div class="form-checkbox _pb_xxs">
                                <div class="form-checkbox__title _hidden_sm">&nbsp;</div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-zusammenfassung"
                                           value="Zusammenfassung"
                                           name="services[]"
                                           type="checkbox"
                                    />
                                    <label for="main-form-zusammenfassung">Zusammenfassung</label>
                                </div>
                                <div>
                                    <input class="form-checkbox__input"
                                           id="main-form-dispo"
                                           name="services[]"
                                           type="checkbox"
                                           value="Dispo"
                                    />
                                    <label for="main-form-dispo">Dispo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-name">Vorname / Nickname</label>
                            <input class="form-input__input"
                                   placeholder="Vorname / Nickname"
                                   id="main-form-name"
                                   type="text"
                                   name="name"
                            />
                        </div>
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-whatsapp">WhatsApp</label>
                            <input class="form-input__input"
                                   placeholder="WhatsApp"
                                   id="main-form-whatsapp"
                                   name="whatsapp"
                                   type="text"
                            />
                        </div>
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-email">E-Mail</label>
                            <input class="form-input__input"
                                   placeholder="E-Mail"
                                   id="main-form-email"
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
                        <button class="btn btn_orange _w-100 gtm-full-form">
                            DAS FORMULAR abschicken
                        </button>
                    </div>
                </div>
                <input type="hidden" name="form-id" value="full-form">
                <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
            </form>
        </div>
    </div>
</section>