<!DOCTYPE html>
<html lang="de-DE">
<head>
    <title><?= carbon_get_post_meta(HOMEPAGE, 'title'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= carbon_get_post_meta(HOMEPAGE, 'description'); ?>">
    <link rel="icon" href="<?= URI; ?>/src/images/favicon.svg" type=" image/svg+xml">
    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<?php \DE\Helpers::addedCodeBeforeBody(); ?>
<header class="header _bg_grey_gradient">
    <div class="header__fixes">
        <div class="header__menu-mobile _hidden">
            <div class="header__menu-mobile-head">
                <div class="header__menu-mobile-logo"></div>
                <div class="header__menu-mobile-close"></div>
            </div>
            <div class="header__menu-mobile-body">
                <?php
                /** Masterarbeit */
                if (get_current_blog_id() === 1) {
                    get_template_part('template-parts/components/menu/mobile-menu-1');
                }

                /** Doktorarbeit */
                if (get_current_blog_id() === 3) {
                    get_template_part('template-parts/components/menu/mobile-menu-3');
                }

                /** Statistische Auswertung */
                if (get_current_blog_id() === 4) {
                    get_template_part('template-parts/components/menu/mobile-menu-4');
                }

                /** Facharbeit */
                if (get_current_blog_id() === 5) {
                    get_template_part('template-parts/components/menu/mobile-menu-5');
                }

                /** Abschlussarbeit */
                if (get_current_blog_id() === 6) {
                    get_template_part('template-parts/components/menu/mobile-menu-6');
                }

                /** Forschungsartikel */
                if (get_current_blog_id() === 7) {
                    get_template_part('template-parts/components/menu/mobile-menu-7');
                }

                /** Online */
                if (get_current_blog_id() === 13) {
                    get_template_part('template-parts/components/menu/mobile-menu-13');
                }  
                
                /** Diplolm */
                if (get_current_blog_id() === 18) {
                    get_template_part('template-parts/components/menu/mobile-menu-18');
                }  

                /**  gwrites-ha-schreiben */
                if (get_current_blog_id() === 15) {
                    get_template_part('template-parts/components/menu/mobile-menu-15');
                }  

                /**  gwrites-ba.de */
                if (get_current_blog_id() === 16) {
                    get_template_part('template-parts/components/menu/mobile-menu-16');
                } 

                /**  gwrites-exposee.de */
                if (get_current_blog_id() === 17) {
                    get_template_part('template-parts/components/menu/mobile-menu-17');
                }  

                /**  gwrites-ha.de */
                if (get_current_blog_id() === 19) {
                    get_template_part('template-parts/components/menu/mobile-menu-19');
                }  

                ?>
            </div>
            <div class="header__menu-mobile-footer">
                <div class="header__menu-mobile-element phone">
                    <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(HOMEPAGE, 'phone')); ?>"
                       onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'clickonthephonenumber'); return true;"
                    >
                        <?= carbon_get_post_meta(HOMEPAGE, 'phone'); ?>
                    </a>
                </div>

                <div class="header__menu-mobile-element hours">
                    <?= carbon_get_post_meta(HOMEPAGE, 'opening_hours'); ?>
                </div>
                <div class="header__menu-mobile-element address">
                    <noindex><?= carbon_get_post_meta(HOMEPAGE, 'address'); ?></noindex>
                </div>
                <div class="header__menu-mobile-element mail">
                    <a href="mailto:<?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>">
                        <?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>
                    </a>
                </div>

                <div class="header__menu-mobile-element regist-mob">
                    <a href="https://www.handelsregister.de/rp_web/welcome.xhtml" target="_blank" rel="noopener noreferrer">Die Handelsregisternummer HRB 195339 B vom 10.04.2018<br>
                    Steuernummer:  30/324/50138 UST-ID: DE317425223</a>
                </div>

            </div>
        </div>
        <div class="top">
            <div class="container">
                <div class="top__wrapper">
                    <div class="top__two-left">
                        <div class="top__element">Offiziell auf dem Markt seit 2018</div>
                        <div class="top__element-reestr"><a href="https://www.handelsregister.de/rp_web/welcome.xhtml" target="_blank" rel="noopener noreferrer">Die Handelsregisternummer HRB 195339 B vom 10.04.2018<br>
                            Steuernummer:  30/324/50138 UST-ID: DE317425223</a> 
                        </div>
                    </div>
                    <!-- <div class="top__element">Offiziell auf dem Markt seit 2018</div> -->
                    <div class="top__element js-bookmark">
                        <span class="_hidden_sm">Zu Favoriten hinzufügen</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__wrap">
            <div class="header__content container">
                <div class="header__element _d-flex">
                    <div class="header__menu-mobile-btn _hidden _visible_lg"></div>
                    <a class="header__logo" href="#top"></a>
                </div>
                <div class="header__element">
                    <div class="header__phone">
                        <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(HOMEPAGE, 'phone')); ?>"
                           onclick="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'clickonthephonenumber'); return true;"
                        >
                            <?= carbon_get_post_meta(HOMEPAGE, 'phone'); ?>
                        </a>
                    </div>
                    <div class="header__click">
                        <span class="_text_up js-open-popup" data-id="call-form-popup">Um Rückruf bitten</span>
                    </div>
                </div>
                <div class="header__element _hidden_lg">
                    <div class="header__time">
                        <?= carbon_get_post_meta(HOMEPAGE, 'opening_hours'); ?>
                    </div>
                    <div class="header__mark">
                        <noindex><?= carbon_get_post_meta(HOMEPAGE, 'address'); ?></noindex>
                    </div>
                </div>
                <div class="header__element _hidden_md">
                    <div class="header__click">
                        <span class="js-open-modal" data-id="popup-impressum">Impressum</span>
                        <div id="popup-impressum" class="popup-wrap small _hidden">
                            <div class="popup-thanks _white">
                                <div class="popup-close"></div>
                                <div class="impressum">
                                    <div class="impressum__title">
                                        GWC Ghost-writerservice UG
                                    </div>
                                    <div class="impressum__subtitle">Adresse:</div>
                                    <div class="impressum__text">
                                        <span>Bessemerstraße 82. OG Süd, 12103 Berlin, Deutschland</span>
                                        <p>Eingetragen im Handelsregister des Amtsgerichts Berlin (Charlottenburg)</p>
                                        <p>unter der Nummer HRB 195339 B, 10.04.2018</p>
                                    </div>
                                    <div class="impressum__subtitle">Steuernummer:</div>
                                    <div class="impressum__text">
                                        <span>30/324/50138 UST-ID: DE317425223<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__mail">
                        <a href="mailto:<?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>">
                            <?= carbon_get_post_meta(HOMEPAGE, 'mail'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__menu _hidden_lg">
            <div class="container">
                <?php
                /** Masterarbeit */
                if (get_current_blog_id() === 1) {
                    get_template_part('template-parts/components/menu/menu-1');
                }

                /** Doktorarbeit */
                if (get_current_blog_id() === 3) {
                    get_template_part('template-parts/components/menu/menu-3');
                }

                /** Statistische Auswertung */
                if (get_current_blog_id() === 4) {
                    get_template_part('template-parts/components/menu/menu-4');
                }

                /** Facharbeit */
                if (get_current_blog_id() === 5) {
                    get_template_part('template-parts/components/menu/menu-5');
                }

                /** Abschlussarbeit */
                if (get_current_blog_id() === 6) {
                    get_template_part('template-parts/components/menu/menu-6');
                }

                /** Forschungsartikel */
                if (get_current_blog_id() === 7) {
                    get_template_part('template-parts/components/menu/menu-7');
                }
         
                /** Online */
                if (get_current_blog_id() === 13) {
                    get_template_part('template-parts/components/menu/menu-13');
                }      
                
                /** Diplom */
                if (get_current_blog_id() === 18) {
                    get_template_part('template-parts/components/menu/menu-18');
                }      

                /**  gwrites-ha-schreiben */
                if (get_current_blog_id() === 15) {
                    get_template_part('template-parts/components/menu/menu-15');
                }  

                /**  gwrites-ba.de */
                if (get_current_blog_id() === 16) {
                    get_template_part('template-parts/components/menu/menu-16');
                } 

                /**  gwrites-exposee.de */
                if (get_current_blog_id() === 17) {
                    get_template_part('template-parts/components/menu/menu-17');
                }  

                /**  gwrites-ha.de */
                if (get_current_blog_id() === 19) {
                    get_template_part('template-parts/components/menu/menu-19');
                }  

                ?>

            </div>
        </div>
    </div>
    <div class="header__first-screen">
        <div class="header__first-screen-image">
            <div></div>
            <div>
                <img src="<?= carbon_get_post_meta(HOMEPAGE, 'image_home'); ?>"
                     alt="<?= carbon_get_post_meta(HOMEPAGE, 'site_name') ?>"
                />
            </div>
        </div>
        <div class="container">
            <div class="header__first-screen-text">
                <div class="site-name_v2"><?= carbon_get_post_meta(HOMEPAGE, 'site_name'); ?></div>
                <div class="slogan_v2"><?= carbon_get_post_meta(HOMEPAGE, 'slogan'); ?></div>
                <div class="btn-htader_v3">
                    <button class="btn btn_blue btn_blue-header js-open-popup" data-id="main-form-popup">Arbeit bestellen</button> 
                </div>
                <div class="slogan_desc">Unmögliches in ein bis zwei Tagen möglich gemacht!</div>
                
                <div class="header__bottom header__bottom-v3">
                    <div class="header__bottom-text_v3">
                        <div class="bottrxt-bg_v3">
                             <?= carbon_get_post_meta(HOMEPAGE, 'advantages_home_1'); ?>
                        </div>
                    </div>
                    <div class="header__bottom-text_v3">
                        <div class="bottrxt-bg_v3">
                             <?= carbon_get_post_meta(HOMEPAGE, 'advantages_home_2'); ?>
                        </div>
                    </div>
                    <div class="header__bottom-text_v3">
                        <div class="bottrxt-bg_v3">
                             <?= carbon_get_post_meta(HOMEPAGE, 'advantages_home_3'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>