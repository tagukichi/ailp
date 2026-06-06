<?php
/**
 * Page template: ISMS認証取得.
 *
 * Assign this template to a WP Page (e.g. with slug "isms").
 * If a page with slug "isms" exists, WordPress will auto-pick this
 * template via the page-{slug} hierarchy.
 *
 * Template Name: ISMS認証取得
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

    <!-- ============ PAGE HERO ============ -->
    <section class="page-hero">
      <div class="container">
        <span class="page-hero-eyebrow">INFORMATION SECURITY</span>
        <h1 class="page-hero-title"><?php _e('ISMS認証取得', 'xvoice'); ?></h1>
        <p class="page-hero-lead">
          <?php _e('xVoice を提供する株式会社カイゼンテクノロジは、情報セキュリティマネジメントシステム', 'xvoice'); ?><br class="pc-only"><?php _e('（ISMS／ISO/IEC 27001）の認証を取得しています。', 'xvoice'); ?>
        </p>
      </div>
    </section>

    <!-- ============ ISMS CERTIFICATE ============ -->
    <section class="isms-section">
      <div class="container">

        <div class="isms-cert-card">
          <div class="isms-cert-logos" aria-label="認証マーク">
            <figure class="isms-logo isms-logo-ismsac">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/isms/ISMS-AC_ISR016.jpg')); ?>" alt="ISMS-AC 認定シンボル ISR016" loading="lazy">
              <figcaption><?php _e('ISMS-AC 認定シンボル', 'xvoice'); ?></figcaption>
            </figure>
            <figure class="isms-logo isms-logo-msa">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/isms/MSA_JPG.jpg')); ?>" alt="株式会社マネジメントシステム評価センター（MSA）認証マーク" loading="lazy">
              <figcaption><?php _e('MSA 認証マーク', 'xvoice'); ?></figcaption>
            </figure>
          </div>

          <div class="isms-cert-body">
            <span class="isms-cert-eyebrow">CERTIFICATION</span>
            <h2 class="isms-cert-title"><?php _e('ISO/IEC 27001 認証取得', 'xvoice'); ?></h2>
            <p class="isms-cert-lead">
              <?php _e('お客様の情報資産を安全にお預かりするため、国際規格 ISO/IEC 27001（JIS Q 27001）に準拠した情報セキュリティマネジメントシステム（ISMS）を構築・運用しています。', 'xvoice'); ?>
            </p>

            <dl class="isms-cert-meta">
              <div>
                <dt><?php _e('認証番号', 'xvoice'); ?></dt>
                <dd><strong>MSA-IS-832</strong></dd>
              </div>
              <div>
                <dt><?php _e('認証規格', 'xvoice'); ?></dt>
                <dd>ISO/IEC 27001:2022 ／ JIS Q 27001:2023</dd>
              </div>
              <div>
                <dt><?php _e('認証機関', 'xvoice'); ?></dt>
                <dd><?php _e('株式会社マネジメントシステム評価センター（MSA）', 'xvoice'); ?></dd>
              </div>
              <div>
                <dt><?php _e('認定機関', 'xvoice'); ?></dt>
                <dd><?php _e('情報マネジメントシステム認定センター（ISMS-AC）', 'xvoice'); ?></dd>
              </div>
              <div>
                <dt><?php _e('適用範囲', 'xvoice'); ?></dt>
                <dd><?php _e('xVoice をはじめとする AI ソリューション・ローカル AI システムの企画・開発・運用・保守に関する情報セキュリティ管理', 'xvoice'); ?></dd>
              </div>
            </dl>
          </div>
        </div>

      </div>
    </section>

<?php get_footer();
