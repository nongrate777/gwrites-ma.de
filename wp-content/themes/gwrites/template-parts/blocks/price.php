<?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_calculator'))) { ?>
    <section id="Kostenberechnung-wrap" class="calculator price-background">
        <div class="container _pt_lg _pb_lg">
            <div class="title-wrapper">
                <div class="title-wrapper__subtitle_dark-gray title-wrapper__subtitle">
                    <div id="Kostenberechnung" class="anchor"></div>
                    <?= carbon_get_post_meta(HOMEPAGE, 'calculator_subtitle'); ?>
                </div>
                <div class="title-wrapper__title_blue">
                    <h1><?= carbon_get_post_meta(HOMEPAGE, 'calculator_title'); ?></h1>
                </div>
            </div>
            <form class="js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'onlinecalculator'); return true;">
                <div class="price">
                    <div class="price__item">
                        <div class="price__item-title">Preis ab:</div>
                        <div class="price__item-number _center">
                            <span id="price-total">60</span> €
                            <input type="hidden" name="total" value="44" />
                            <div class="price__item-number-text">ohne MwSt.</div>
                        </div>
                    </div>
                    <div class="price__item">
                        <div class="price__item-title">Wählen Sie die Parameter Ihrer Arbeit aus</div>
                        <div class="price__item-forms">
                            <div class="form-select">
                                <label class="form-select__label" for="calculator-form-specialization">
                                    Wählen Sie eine Fachrichtung
                                </label>
                                <div class="form-select__btn">Wählen Sie eine Fachrichtung</div>
                                <?php get_template_part('template-parts/components/form/select-specialties'); ?>
                                <input class="form-select__input-hidden"
                                       id="calculator-form-specialization"
                                       name="specialization"
                                       type="text"
                                />
                            </div>
                        </div>
                        <div class="price__item-forms">
                            <div class="form-select">
                                <label class="form-select__label" for="calculator-form-urgency">
                                    Dringlichkeit
                                </label>
                                <div class="form-select__wrap">
                                    <div class="form-select__btn-guess"></div>
                                    <div class="form-select__btn-text">
                                        Vom Zeitpunkt der Bestellung bis zur<br> Lieferung der Arbeit von 10 Seiten -<br> mindestens 10 Kalendertage
                                        <div class="form-select__btn-text-icon"></div>
                                    </div>
                                    <div class="form-select__btn">
                                        Dringlichkeit
                                    </div>
                                </div>
                                <ul class="form-select__list">
                                    <li class="form-select__list-item">Eilig</li>
                                    <li class="form-select__list-item">Nicht dringend</li>
                                </ul>
                                <input class="form-select__input-hidden"
                                       id="calculator-form-urgency"
                                       name="urgency"
                                       type="text"
                                />
                            </div>
                        </div>
                        <div class="price__item-forms">
                            <div class="form-select">
                                <label class="form-select__label" for="calculator-form-degree">
                                    Akademischer Grad des Anbieters
                                </label>
                                <div class="form-select__btn">
                                    Akademischer Grad des Anbieters
                                </div>
                                <ul class="form-select__list">
                                    <li class="form-select__list-item">Bachelors</li>
                                    <li class="form-select__list-item">Magister</li>
                                    <li class="form-select__list-item">Doktoren</li>
                                </ul>
                                <input class="form-select__input-hidden"
                                       id="calculator-form-degree"
                                       name="degree"
                                       type="text"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="price__item">
                        <div class="price__item-title">Wählen Sie Ihren Rabatt aus:</div>
                        <div class="price__item-table">
                            <div class="price__item-table-left">5%</div>
                            <div class="price__item-table-right">
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="price-params-1"
                                           name="params[]"
                                           value="Über 20 Seiten"
                                    />
                                    <label for="price-params-1">Über 20 Seiten</label>
                                </div>
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="price-params-2"
                                           name="params[]"
                                           value="2 oder mehr Monate vor der Abgabe"
                                    />
                                    <label for="price-params-2">2 oder mehr Monate vor der Abgabe</label>
                                </div>
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="price-params-3"
                                           name="params[]"
                                           value="Bestellung von mehreren Arbeiten"
                                    />
                                    <label for="price-params-3">Bestellung von mehreren Arbeiten</label>
                                </div>
                            </div>
                            <div class="price__item-table-left">10%</div>
                            <div class="price__item-table-right">
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="price-params-4"
                                           name="params[]"
                                           value="100%ige Vorauszahlung"
                                    />
                                    <label for="price-params-4">100%ige Vorauszahlung</label>
                                </div>
                            </div>
                            <div class="price__item-table-left">25 €</div>
                            <div class="price__item-table-right">
                                <div class="form-checkbox">
                                    <input class="form-checkbox__input"
                                           type="checkbox"
                                           id="price-params-5"
                                           name="checkbox"
                                           value="Heute ist mein Geburtstag!"
                                    />
                                    <label for="price-params-5">Heute ist mein Geburtstag!</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price__footer">
                    <div class="price__footer-item">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="price-name">
                                Vorname / Nickname
                            </label>
                            <input class="form-input__input"
                                   placeholder="Vorname / Nickname"
                                   id="price-name"
                                   name="name"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="price__footer-item">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="price-whatsapp">
                                WhatsApp
                            </label>
                            <input class="form-input__input"
                                   placeholder="WhatsApp"
                                   id="price-whatsapp"
                                   name="whatsapp"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="price__footer-item">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="price-email">
                                E-Mail
                            </label>
                            <input class="form-input__input"
                                   placeholder="E-Mail "
                                   id="price-email"
                                   name="email"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="price__footer-item">
                        <div class="price__item-btn _pb_xxs">
                            <button class="btn btn_red _w-100 gtm-calculator">Anfrage senden</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="form-id" value="calculator-form">
                <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
            </form>
        </div>
    </section>
<?php } ?>