<?php
/**
 * xVoice theme functions and definitions.
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('XVOICE_VERSION')) {
    define('XVOICE_VERSION', '1.0.0');
}

/**
 * Theme setup.
 */
function xvoice_setup() {
    load_theme_textdomain('xvoice', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary'      => __('プライマリ メニュー', 'xvoice'),
        'mobile'       => __('モバイル メニュー', 'xvoice'),
        'footer_service' => __('フッター・サービス', 'xvoice'),
        'footer_start'   => __('フッター・はじめる', 'xvoice'),
    ]);
}
add_action('after_setup_theme', 'xvoice_setup');

/**
 * Enqueue scripts and styles.
 */
function xvoice_enqueue_assets() {
    wp_enqueue_style(
        'xvoice-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800&family=Space+Grotesk:wght@500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'xvoice-style',
        get_stylesheet_uri(),
        ['xvoice-fonts'],
        XVOICE_VERSION
    );

    wp_enqueue_script(
        'xvoice-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        XVOICE_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'xvoice_enqueue_assets');

/**
 * Output Google Fonts preconnect tags.
 */
function xvoice_preconnect_fonts() {
    echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
    echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
}
add_action('wp_head', 'xvoice_preconnect_fonts', 1);

/**
 * Helper: get theme asset URI.
 *
 * @param string $path Relative path under /assets/.
 * @return string Full URI.
 */
function xvoice_asset_uri($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * Helper: render anchor URL pointing to the front-page section.
 *
 * @param string $anchor Anchor with leading #.
 * @return string Escaped URL.
 */
function xvoice_home_anchor($anchor) {
    return esc_url(home_url('/') . $anchor);
}

/**
 * Helper: render the CTA form area.
 *
 * Insert the CF7 shortcode via the Customizer (Appearance → Customize →
 * テーマオプション → お問い合わせフォーム ショートコード) or by editing
 * the constant below. Falls back to the static HTML skeleton.
 */
function xvoice_render_cta_form() {
    $shortcode = trim(get_theme_mod('xvoice_cta_form_shortcode', ''));

    if ($shortcode !== '' && function_exists('do_shortcode')) {
        echo '<div class="cta-form-cf7">';
        echo do_shortcode($shortcode);
        echo '</div>';
        return;
    }

    // Fallback: static HTML skeleton (matches design until CF7 is wired up).
    get_template_part('template-parts/cta-form-fallback');
}

/**
 * Customizer settings.
 */
function xvoice_customize_register($wp_customize) {
    $wp_customize->add_section('xvoice_theme_options', [
        'title'    => __('xVoice テーマオプション', 'xvoice'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('xvoice_cta_form_shortcode', [
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ]);

    $wp_customize->add_control('xvoice_cta_form_shortcode', [
        'label'       => __('お問い合わせフォーム ショートコード (Contact Form 7 など)', 'xvoice'),
        'description' => __('例: [contact-form-7 id="123" title="お問い合わせ"]。空の場合は静的なフォーム雛形が表示されます。', 'xvoice'),
        'section'     => 'xvoice_theme_options',
        'type'        => 'textarea',
    ]);
}
add_action('customize_register', 'xvoice_customize_register');

/**
 * Filter the nav menu items output for the primary menu so they get the
 * correct anchor format pointing to the front page.
 *
 * The expected menu setup is one menu with custom links such as
 *   /#issues, /#reasons, /#benefits etc.
 *
 * If no menu is assigned, the templates fall back to a hard-coded list.
 */
