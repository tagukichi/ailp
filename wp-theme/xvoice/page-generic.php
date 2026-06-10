<?php
/**
 * Page template: 汎用ページ (Generic page).
 *
 * Provides only the page hero (header) and a wrapper for the page editor
 * content. Use this for misc. static pages whose body is filled in via
 * the WP Block / Classic Editor.
 *
 * Template Name: 汎用ページ
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()):
    the_post(); ?>

    <!-- ============ PAGE HERO ============ -->
    <section class="page-hero">
      <div class="container">
        <h1 class="page-hero-title"><?php the_title(); ?></h1>
        <?php
        $subtitle = get_post_meta(get_the_ID(), 'page_hero_lead', true);
        if (!empty($subtitle)):
        ?>
        <p class="page-hero-lead"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <!-- ============ PAGE CONTENT ============ -->
    <section class="page-content-section">
      <div class="container container-narrow">
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

<?php
endwhile;

get_footer();
