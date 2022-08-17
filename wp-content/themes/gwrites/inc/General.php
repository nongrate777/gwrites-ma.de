<?php

namespace DE;

class General
{
    public function __construct()
    {
        // Удаляем из Wordpress ненужные элементы
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_head', 'wp_resource_hints', 2);
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wp_oembed_add_host_js');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
        remove_action('template_redirect', 'rest_output_link_header', 11);
        remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
        remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
        remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
        remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
        remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
        remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);
        remove_action('init', 'rest_api_init');
        remove_action('rest_api_init', 'rest_api_default_filters', 10);
        remove_action('parse_request', 'rest_api_loaded');

        add_action('wp_enqueue_scripts', [$this, 'connectedStylesAndScripts']);
        add_action('do_robotstxt', [$this, 'addedRobotsTxt']);
        add_filter('upload_mimes', [$this, 'svgUploadAllow']);

        add_action('wp_head', [$this, 'addedCodeInHead']);
    }

    /**
     * Подключает скрипты и стили
     */
    public function connectedStylesAndScripts()
    {
        wp_dequeue_style('wp-block-library');

        wp_enqueue_style('main-custom', URI . '/main.css', [], '1.0');
        wp_enqueue_script('main', URI . '/assets/main.bundle.js', [], '1.0', true);
        wp_enqueue_style('main', URI . '/assets/main.bundle.css', [], '1.0');
        

    }

    /**
     * Добавляет файл роботс
     */
    public function addedRobotsTxt()
    {
        $data[] = 'User-agent: *';
        $data[] = 'Sitemap: ' . get_site_url(null, '', 'https') . '/sitemap_index.xml';

        echo implode("\r\n", $data);
        die;
    }

    public function svgUploadAllow($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    /**
     * Вставляет коды между тегов HEAD
     */
    public function addedCodeInHead()
    {
        if (is_user_logged_in()) {
            return;
        }

        /**
         * Masterarbeit
         * https://gwrites-ma.de/
         */
        if (get_current_blog_id() === 1) {
            ?>
            <!-- Google Tag Manager -->
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-N7GBT53');</script>
            <!-- End Google Tag Manager -->
            <?php
        }

        /**
         * Doktorarbeit
         * https://gwrites-da.de/
         */
        if (get_current_blog_id() === 3) {
            ?>
            <!-- Google Tag Manager -->
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-54NGGW6');</script>
            <!-- End Google Tag Manager -->
            <?php
        }

        /**
         * Statistische Auswertung
         * https://gwrites-statistik.de/
         */
        if (get_current_blog_id() === 4) {
            ?>
            <!-- Google Tag Manager -->
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-THWDP8M');</script>
            <!-- End Google Tag Manager -->
            <?php
        }

        /**
         * Facharbeit
         * https://gwrites-fa.de/
         */
        if (get_current_blog_id() === 5) {
            ?>
            <!-- Google Tag Manager -->
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-PPJTBXP');</script>
            <!-- End Google Tag Manager -->
            <?php
        }

        /**
         * Abschlussarbeit
         * https://gwrites-abschluss.de/
         */
        if (get_current_blog_id() === 6) {
            ?>
            <!-- Google Tag Manager -->
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-WCPWR9V');</script>
            <!-- End Google Tag Manager -->
            <?php
        }

        /**
         * Forschungsartikel
         * https://gwrites-artikel.de/
         */
        if (get_current_blog_id() === 7) {
            ?>
            <!-- Google Tag Manager -->
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-N8M6HZZ');</script>
            <!-- End Google Tag Manager -->
            <?php
        }

        if (get_current_blog_id() === 18) {
            ?>
                <!-- Google Tag Manager -->
                <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PM3FHL9');</script>
                <!-- End Google Tag Manager -->
            <?php
        }
    }
}

new General();