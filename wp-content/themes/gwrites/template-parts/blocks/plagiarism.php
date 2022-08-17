<section>
    <div class="container _pt_md _pb_md">
        <div class="plagiarism">
            <div class="plagiarism__img">
                <img src="<?= URI; ?>/src/images/plagiarism/img01.png" alt="Plagiarism">
            </div>
            <div class="plagiarism__content">
                <div class="plagiarism__content-subtitle">
                    Geben Sie Ihre Kontaktdaten an und erhalten Sie eine
                </div>
                <div class="plagiarism__content-title">
                    <h2>kostenlose professionelle Plagiatsprüfung</h2>
                </div>
                <form class="plagiarism__content-form js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'freeplagiarismcheck'); return true;">
                    <div class="plagiarism__content-form-input">
                        <div class="form-input">
                            <label class="form-input__label" for="small-form-email">E-Mail</label>
                            <input class="form-input__input"
                                   id="small-form-email"
                                   placeholder="E-Mail"
                                   name="email"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="plagiarism__content-form-btn">
                        <button class="btn btn_blue gtm-check">Abschicken</button>
                    </div>
                    <input type="hidden" name="form-id" value="mail-form-small">
                    <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
                </form>
                <div class="plagiarism__content-text">
                    Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                </div>
            </div>
        </div>
    </div>
</section>