<div class="footer _light-blue _pt_xs _pb_xs">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-left">
                <div class="footer__top-item">
                    <a class="footer__top-img" href="#top">
                        <div class="footer__top-img-text">
                            Offiziell auf dem Markt seit 1998
                        </div>
                    </a>
                    <div class="footer__top-list-v2">  
                        <ul>
                            <li>GWC Ghost-writerservice UG (haftungsbeschränkt)</li>
                            <li>Adresse: Bessemerstraße 82. OG Süd, 12103 Berlin, Deutschland
                                Eingetragen im Handelsregister des Amtsgerichts Berlin (Charlottenburg)
                            </li>
                            <li><noindex>unter der Nummer HRB 195339 B, 10.04.2018</noindex></li>
                            <li>Steuernummer: 30/324/50138 UST-ID: DE317425223</li>
                        </ul>
                    </div>
                    <div class="footer-social _hidden _d-flex_lg">
                        <a class="footer-social-item gtm-whatsapp"
                           target="_blank"
                           href="https://wa.me/<?= \DE\Helpers::managers(true); ?>"
                           onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                        ></a>
                        <a class="footer-social-item gtm-skype"
                           target="_blank"
                           href="skype:<?= \DE\Helpers::managers(); ?>"
                           onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                        ></a>
                        <div class="footer__bottom-print">
                            <a href="https://gwrites.de/impressum.php" target="_blank">IMPRESSUM</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__top-right">
                <div class="footer__top-item">
                    <div class="footer__top-title">Mit uns verbinden</div>
                    <div class="footer__top-list_v2-2">
                        <ul>
                            <!-- <li>
                                <?/*= carbon_get_post_meta(HOMEPAGE, 'opening_hours'); */ ?>
                            </li> -->
                            <li>
                                <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(HOMEPAGE, 'phone')); ?>"
                                   onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'clickonthephonenumber'); return true;"
                                >
                                    <?= carbon_get_post_meta(HOMEPAGE, 'phone'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>">
                                    <?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>
                                </a>
                            </li>
                        </ul>
                        <div class="footer-social _d-flex _hidden_lg">
                            <a class="footer-social-item gtm-whatsapp"
                               target="_blank"
                               href="https://wa.me/<?= \DE\Helpers::managers(true); ?>"
                               onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                            ></a>
                            <a class="footer-social-item gtm-skype"
                               target="_blank"
                               href="skype:<?= \DE\Helpers::managers(); ?>"
                               onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="footer__top-item">
                    <div class="footer__top-title">Unsere Bürozeiten:</div>
                    <div class="footer__top-list_v3-3">
                        <ul>

                            <li>
                                <?= carbon_get_post_meta(HOMEPAGE, 'opening_hours'); ?>
                            </li>

                            <!-- <li>
                                <noindex><?/*=  carbon_get_post_meta(HOMEPAGE, 'address'); */ ?></noindex>
                            </li> -->
                            <li class="js-bookmark">Zu Favoriten hinzufügen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom-print _hidden_lg">
                <a href="https://gwrites.de/impressum.php" target="_blank">IMPRESSUM</a>
            </div>
            <div class="footer__bottom-copy _end">
                Alle Arbeiten, die Sie von erhalten, sind nur für Übungszwecke bestimmt.
                Die Arbeiten können nicht dazu genutzt werden, einen akademischen Abschluss zu erhalten.
            </div>
        </div>
    </div>
</div>

<div class="widget">
    <div class="widget__content _white _hidden">
        <div class="widget__content-top">
            <ul>
                <li>
                    <a href="#" class="js-open-popup" data-id="mail-popup">
                        E-Mail
                    </a>
                </li>
                <li>
                    <a target="_blank"
                       class="gtm-whatsapp"
                       href="https://wa.me/<?= \DE\Helpers::managers(true); ?>"
                       onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                    >
                        WhatsApp
                    </a>
                </li>
                <li>
                    <a target="_blank"
                       class="gtm-skype"
                       href="skype:<?= \DE\Helpers::managers(); ?>"
                       onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'skypeorwhatsapp'); return true;"
                    >
                        Skype
                    </a>
                </li>
            </ul>
        </div>
        <div class="widget__content-bottom">
            <div class="widget__content-bottom-btn">
                <button class="btn btn_blue_off _w-100 js-open-popup" data-id="call-form-popup">
                    Um Rückruf bitten
                </button>
            </div>
            <div class="widget__content-bottom-text _center">oder rufen Sie an</div>
            <div class="widget__content-bottom-number _center">
                <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(HOMEPAGE, 'phone')); ?>"
                   onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'clickonthephonenumber'); return true;"
                >
                    <?= carbon_get_post_meta(HOMEPAGE, 'phone'); ?>
                </a>
            </div>
        </div>
    </div>
    <a class="widget__arrow _hidden" href="#top"></a>
    <div class="widget__img">
        <div class="widget__img-item _widget_dark-blue js-widget-btn"></div>
    </div>
</div>

<?php wp_footer(); ?>

<script src="https://www.google.com/recaptcha/api.js?render=6LeF-Q4eAAAAAEq6PHzUmXZqthkaGDWOrZVY7f8a"></script>
<script>
    grecaptcha.ready(() => {
        grecaptcha.execute('6LeF-Q4eAAAAAEq6PHzUmXZqthkaGDWOrZVY7f8a', { action: 'contact' }).then(function (token) {
            let recaptchaResponse = document.querySelector('.recaptchaResponse');
            recaptchaResponse.value = token;
        });
    });
</script>
<?php \DE\Helpers::addedCodeAfterBody(); ?>
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.by/b21087922/crm/site_button/loader_2_w7iwyx.js');
</script>
</body>
</html>