<?php
/**
 * Fallback template.
 * For this single-page LP theme, both index.php and front-page.php delegate to
 * the front-page layout (defined in front-page.php). This file is here so the
 * theme passes the WordPress requirement of an index.php.
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}

if (file_exists(get_template_directory() . '/front-page.php')) {
    require get_template_directory() . '/front-page.php';
    return;
}

get_header();
?>
<main class="container" style="padding:120px 0;">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</main>
<?php
get_footer();
