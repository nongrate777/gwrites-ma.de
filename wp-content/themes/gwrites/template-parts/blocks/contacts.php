<section id="Über-Uns-wrap" class="_light-white">
    <div class="container _pt_lg _pb_lg">
        <div class="title-wrapper _center">
            <div class="title-wrapper__title_blue">
                <div id="Über-Uns" class="anchor"></div>
                <h1>Haben Sie Fragen?</h1>
            </div>
        </div>
        <div class="contacts _center">
            <div class="contacts__text">
                Kontakt per Telefon
            </div>
            <div class="contacts__number">
                <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(HOMEPAGE, 'phone')); ?>"
                   onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'clickonthephonenumber'); return true;"
                >
                    <?= carbon_get_post_meta(HOMEPAGE, 'phone'); ?>
                </a>
            </div>
            <div class="contacts__text">
                oder auf eine andere für Sie geeignete Weise
            </div>
            <div class="contacts__social">
                <a target="_blank"
                   class="gtm-whatsapp"
                   href="https://wa.me/<?= \DE\Helpers::managers(true); ?>"
                   onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                >
                    <div class="contacts__social-item _green">
                        <div id="contacts_1" class="contacts__social-text">
                            WhatsApp Chat
                        </div>
                    </div>
                </a>
                <a target="_blank"
                   class="gtm-skype"
                   href="skype:<?= \DE\Helpers::managers(); ?>"
                   onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                >
                    <div class="contacts__social-item _cyan">
                        <div id="contacts_2" class="contacts__social-text">
                            Skype Chat
                        </div>
                    </div>
                </a>
            </div>
            <div class="contacts__mail">
                <a href="mailto:<?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>">
                    <?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>
                </a>
            </div>
        </div>
    </div>
</section>