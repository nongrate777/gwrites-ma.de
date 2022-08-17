<ul class="header__menu-mobile-ul">
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_details'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Details">Details</a>
        </li>
    <?php } ?>
    <li class="header__menu-mobile-li">
        <a class="header__menu-mobile-a" href="#Was-bekommen-Sie">Was bekommen Sie</a>
    </li>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_why_we'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Warum-wir">Warum wir</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_work'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Wie-wir-arbeiten">Wie wir arbeiten</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_guarantees'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Garantien">Garantien</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_additional_services'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Optionale-Dienste">Optionale Dienste</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_specialties'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Wissenschaftsgebiet">Wissenschaftsgebiet</a>
        </li>
    <?php } ?>
    <li class="header__menu-mobile-li">
        <a class="header__menu-mobile-a" href="#Leistungen">Leistungen</a>
    </li>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_author'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Autoren">Autoren</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_reviews'))) { ?>
        <li class="header__menu-mobile-li">
            <a class="header__menu-mobile-a" href="#Bewertungen">Bewertungen</a>
        </li>
    <?php } ?>
    <li class="header__menu-mobile-li">
        <a class="header__menu-mobile-a" href="#Über-Uns">Über Uns</a>
    </li>
</ul>