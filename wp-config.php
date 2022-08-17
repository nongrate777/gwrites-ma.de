<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
if (file_exists(__DIR__ . '/.loc')) {
    /** Имя базы данных для WordPress */
    define('DB_NAME', 'de_landing');

    /** Имя пользователя MySQL */
    define('DB_USER', 'root');

    /** Пароль к базе данных MySQL */
    define('DB_PASSWORD', '');
} else {
    /** Имя базы данных для WordPress */
    define( 'DB_NAME', 'gwrites_ma_de' );

    /** Имя пользователя MySQL */
    define( 'DB_USER', 'academily_user' );

    /** Пароль к базе данных MySQL */
    define( 'DB_PASSWORD', '12ffDDgDzcgdtsd' );
}

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '481k--t4rp+)b :Uipd^GRJ7]//+)[U38t]+Zz<#v#^F!fd_d]N7iddL?{&X*rV?');
define('SECURE_AUTH_KEY', 'K7Zpl2 BQ-ZSU9IQz$f|eltuYn 8$#_|^i#UNQTbAq}S6%JUa5N,klR/glPG0#yT');
define('LOGGED_IN_KEY', 'z`7~;:`aZ]Gke3wb`),?!-szVbE`kET4sRTUS(e6*.Ll`eL~;PHh1<ag5(vLKmU*');
define('NONCE_KEY', '_cZabXOJ,GLT-vy+[L)B72aBTF0f!>i4rp=[&K.0y(tK_gsm)]q[D0awb<kF2}Tw');
define('AUTH_SALT', 'v[G_2`:B%:b+DtVUE^He055Jla+N[Pqr):.wTlX>[I09p2%.EC7l k^`?A&mri<`');
define('SECURE_AUTH_SALT', 'T}uI3! )7y ,+)`VAMhL#FZm;tG<Lnpkpy?5 Usf1}|,5yo%/[zr@^YB6uo/b&w]');
define('LOGGED_IN_SALT', '92h+_tF-FA NiDC+A*djok*^m;KMlh!=}*?1=k1@[(%|go-I]}`A#f5.1W9l/Xga');
define('NONCE_SALT', '%yc#;[`vG{O5;b5@!TvY`n/Q(J#hlAQj{`)g>81/A)z[sJ;Y3gopfzu;O&I{Id-s');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */

define('COOKIE_DOMAIN', false);

define('WP_ALLOW_MULTISITE', true);
$_SERVER['HTTPS'] = 'on';

define('ALLOW_UNFILTERED_UPLOADS', true);

$domainCurrentSite = (file_exists(__DIR__ . '/.loc')) ? 'gwrites-ma.local' : 'gwrites-ma.de';

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', $domainCurrentSite);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
