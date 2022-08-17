<ul class="header__menu-wrap">
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_details'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Details">Details</a>
        </li>
    <?php } ?>
    <li class="header__menu-item">
        <a class="header__menu-link" href="#Was-bekommen-Sie">Was bekommen Sie</a>
    </li>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_additional_services'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Optionale-Dienste">Optionale Dienste</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_why_we'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Warum-wir">Warum wir</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_work'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Wie-wir-arbeiten">Wie wir arbeiten</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_calculator'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Kostenberechnung">Kostenberechnung</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_guarantees'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Garantien">Garantien</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_specialties'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Wissenschaftsgebiet">Wissenschaftsgebiet</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_author'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Autoren">Autoren</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_reviews'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#Bewertungen">Bewertungen</a>
        </li>
    <?php } ?>
    <?php if (!empty(carbon_get_post_meta(HOMEPAGE, 'show_faq'))) { ?>
        <li class="header__menu-item">
            <a class="header__menu-link" href="#FAQ">FAQ</a>
        </li>
    <?php } ?>
    <li class="header__menu-item">
        <a class="header__menu-link" href="#Über-Uns">Über Uns</a>
    </li>
</ul>