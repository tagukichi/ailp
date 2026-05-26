<?php
/**
 * Header template.
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============ HEADER ============ -->
<header data-section="header" class="site-header">
    <nav class="nav">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
            <img src="<?php echo esc_url(xvoice_asset_uri('images/xvoice_logo.png')); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img">
        </a>

        <?php if (has_nav_menu('primary')): ?>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'depth'          => 1,
                'fallback_cb'    => false,
            ]);
            ?>
        <?php else: ?>
            <ul class="nav-links">
                <li><a href="<?php echo xvoice_home_anchor('#issues'); ?>"><?php _e('課題', 'xvoice'); ?></a></li>
                <li><a href="<?php echo xvoice_home_anchor('#reasons'); ?>"><?php _e('選ばれる理由', 'xvoice'); ?></a></li>
                <li><a href="<?php echo xvoice_home_anchor('#features'); ?>"><?php _e('主な機能', 'xvoice'); ?></a></li>
                <li><a href="<?php echo xvoice_home_anchor('#flow'); ?>"><?php _e('トライアルの流れ', 'xvoice'); ?></a></li>
            </ul>
        <?php endif; ?>

        <div class="nav-cta">
            <a href="<?php echo xvoice_home_anchor('#contact'); ?>" class="btn btn-ghost"><?php _e('デモを予約', 'xvoice'); ?></a>
            <a href="<?php echo xvoice_home_anchor('#contact'); ?>" class="btn btn-primary"><?php _e('無料トライアル', 'xvoice'); ?></a>
        </div>

        <button class="hamburger" type="button" aria-label="<?php esc_attr_e('メニュー', 'xvoice'); ?>" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </nav>
</header>

<!-- Mobile menu (placed outside header to avoid backdrop-filter containing block bug) -->
<div class="mobile-menu">
    <?php if (has_nav_menu('mobile') || has_nav_menu('primary')): ?>
        <?php
        wp_nav_menu([
            'theme_location' => has_nav_menu('mobile') ? 'mobile' : 'primary',
            'container'      => false,
            'menu_class'     => '',
            'depth'          => 1,
            'fallback_cb'    => false,
        ]);
        ?>
    <?php else: ?>
        <ul>
            <li><a href="<?php echo xvoice_home_anchor('#issues'); ?>"><?php _e('課題', 'xvoice'); ?></a></li>
            <li><a href="<?php echo xvoice_home_anchor('#reasons'); ?>"><?php _e('選ばれる理由', 'xvoice'); ?></a></li>
            <li><a href="<?php echo xvoice_home_anchor('#features'); ?>"><?php _e('主な機能', 'xvoice'); ?></a></li>
            <li><a href="<?php echo xvoice_home_anchor('#flow'); ?>"><?php _e('トライアルの流れ', 'xvoice'); ?></a></li>
        </ul>
    <?php endif; ?>
    <div class="mobile-menu-cta">
        <a href="<?php echo xvoice_home_anchor('#contact'); ?>" class="btn btn-primary"><?php _e('お問い合わせ', 'xvoice'); ?></a>
    </div>
</div>
<div class="mobile-menu-blur" data-menu-blur aria-hidden="true"></div>

<main>
