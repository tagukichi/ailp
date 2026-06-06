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

    <!-- ============ ABOUT ISMS ============ -->
    <section class="isms-about">
      <div class="container">
        <header class="sec-head sec-head-center">
          <span class="sec-eyebrow">ABOUT ISMS</span>
          <h2 class="sec-title"><?php _e('ISMS（情報セキュリティマネジメントシステム）とは', 'xvoice'); ?></h2>
          <p class="sec-lead">
            <?php _e('組織が保有する情報資産を、機密性・完全性・可用性の3つの観点からバランスよく維持・改善するためのマネジメントの仕組みです。', 'xvoice'); ?>
          </p>
        </header>

        <ul class="isms-pillars">
          <li class="isms-pillar">
            <span class="isms-pillar-num">01</span>
            <h3><?php _e('機密性', 'xvoice'); ?><small>Confidentiality</small></h3>
            <p><?php _e('許可された人だけが情報にアクセスできる状態を維持します。アクセス権限の管理・暗号化・物理的セキュリティを徹底します。', 'xvoice'); ?></p>
          </li>
          <li class="isms-pillar">
            <span class="isms-pillar-num">02</span>
            <h3><?php _e('完全性', 'xvoice'); ?><small>Integrity</small></h3>
            <p><?php _e('情報が改ざん・破壊されず、正確かつ完全な状態で保たれるよう、変更管理・バックアップ・監査ログによる統制を行います。', 'xvoice'); ?></p>
          </li>
          <li class="isms-pillar">
            <span class="isms-pillar-num">03</span>
            <h3><?php _e('可用性', 'xvoice'); ?><small>Availability</small></h3>
            <p><?php _e('必要なときに、必要な人が、必要な情報を利用できる状態を維持します。冗長構成・事業継続計画（BCP）で支えます。', 'xvoice'); ?></p>
          </li>
        </ul>
      </div>
    </section>

    <!-- ============ POLICY ============ -->
    <section class="isms-policy">
      <div class="container">
        <header class="sec-head sec-head-center">
          <span class="sec-eyebrow">POLICY</span>
          <h2 class="sec-title"><?php _e('情報セキュリティ基本方針', 'xvoice'); ?></h2>
          <p class="sec-lead">
            <?php _e('お客様からお預かりした情報資産を守り、安心してご利用いただけるサービスを提供するため、以下の方針に基づき情報セキュリティに取り組みます。', 'xvoice'); ?>
          </p>
        </header>

        <ol class="isms-policy-list">
          <li>
            <h3><?php _e('1. 経営層によるコミットメント', 'xvoice'); ?></h3>
            <p><?php _e('経営層が率先して情報セキュリティの重要性を認識し、ISMS の確立・実施・維持・継続的改善に必要な経営資源を提供します。', 'xvoice'); ?></p>
          </li>
          <li>
            <h3><?php _e('2. 法令・規範の遵守', 'xvoice'); ?></h3>
            <p><?php _e('情報セキュリティに関する法令、規制、契約上の要求事項、その他社会的規範を遵守します。', 'xvoice'); ?></p>
          </li>
          <li>
            <h3><?php _e('3. 情報資産の適切な管理', 'xvoice'); ?></h3>
            <p><?php _e('取り扱う情報資産を識別・分類し、リスクアセスメントの結果に基づいて適切なセキュリティ対策を実施します。', 'xvoice'); ?></p>
          </li>
          <li>
            <h3><?php _e('4. 教育・訓練の実施', 'xvoice'); ?></h3>
            <p><?php _e('役員・従業員に対し、情報セキュリティに関する教育・訓練を継続的に実施し、組織全体のセキュリティ意識を高めます。', 'xvoice'); ?></p>
          </li>
          <li>
            <h3><?php _e('5. インシデント対応と継続的改善', 'xvoice'); ?></h3>
            <p><?php _e('情報セキュリティインシデントの発生に備えた体制を整備するとともに、定期的な内部監査とマネジメントレビューを通じて ISMS を継続的に改善します。', 'xvoice'); ?></p>
          </li>
        </ol>
      </div>
    </section>

    <!-- ============ WHY MATTERS ============ -->
    <section class="isms-value">
      <div class="container">
        <header class="sec-head sec-head-center">
          <span class="sec-eyebrow">WHY IT MATTERS</span>
          <h2 class="sec-title"><?php _e('なぜ xVoice にとって ISMS が重要か', 'xvoice'); ?></h2>
          <p class="sec-lead">
            <?php _e('xVoice は通話・音声・顧客情報という、企業にとって極めて機微なデータを取り扱います。', 'xvoice'); ?><br class="pc-only"><?php _e('だからこそ、第三者認証によって裏付けられた管理体制が不可欠です。', 'xvoice'); ?>
          </p>
        </header>

        <div class="isms-value-grid">
          <article class="isms-value-card">
            <div class="isms-value-icon" aria-hidden="true">
              <svg viewBox="0 0 48 48" fill="none">
                <path d="M24 4l16 6v12c0 10-7 18-16 22-9-4-16-12-16-22V10l16-6z" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/>
                <path d="M16 24l6 6 12-12" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3><?php _e('機微な音声データを守る', 'xvoice'); ?></h3>
            <p><?php _e('通話内容には顧客の個人情報や取引情報が含まれます。ローカル AI 構成に加え、ISMS に基づく運用管理で多層的に保護します。', 'xvoice'); ?></p>
          </article>

          <article class="isms-value-card">
            <div class="isms-value-icon" aria-hidden="true">
              <svg viewBox="0 0 48 48" fill="none">
                <rect x="6" y="20" width="36" height="22" rx="3" fill="none" stroke="currentColor" stroke-width="2.4"/>
                <path d="M14 20v-6a10 10 0 0120 0v6" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                <circle cx="24" cy="30" r="3" fill="currentColor"/>
              </svg>
            </div>
            <h3><?php _e('第三者認証による信頼性', 'xvoice'); ?></h3>
            <p><?php _e('独立した認証機関による定期的な審査を受けることで、組織のセキュリティ管理が客観的に評価され、お客様へ透明性をお届けします。', 'xvoice'); ?></p>
          </article>

          <article class="isms-value-card">
            <div class="isms-value-icon" aria-hidden="true">
              <svg viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="18" fill="none" stroke="currentColor" stroke-width="2.4"/>
                <path d="M24 14v10l7 4" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3><?php _e('継続的な改善サイクル', 'xvoice'); ?></h3>
            <p><?php _e('PDCA に基づく運用で、最新の脅威や法令改正に追従。ISMS の枠組みでセキュリティを「導入して終わり」にしません。', 'xvoice'); ?></p>
          </article>

          <article class="isms-value-card">
            <div class="isms-value-icon" aria-hidden="true">
              <svg viewBox="0 0 48 48" fill="none">
                <path d="M8 38V14a4 4 0 014-4h12l4 6h12a4 4 0 014 4v18a4 4 0 01-4 4H12a4 4 0 01-4-4z" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/>
                <path d="M18 26h12M18 32h8" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
              </svg>
            </div>
            <h3><?php _e('調達基準・ガバナンスに適合', 'xvoice'); ?></h3>
            <p><?php _e('多くの企業・自治体が情報システム導入時の選定基準として ISMS 認証を求めています。導入検討時の社内承認をスムーズに進められます。', 'xvoice'); ?></p>
          </article>
        </div>
      </div>
    </section>

    <!-- ============ Mid CTA ============ -->
    <section class="mid-cv">
      <div class="container">
        <div class="mid-cv-inner">
          <h2 class="mid-cv-title"><?php _e('安心して、AI を業務へ。', 'xvoice'); ?></h2>
          <p class="mid-cv-lead"><?php _e('セキュリティに関するご質問・詳細資料のご請求もお気軽にどうぞ。', 'xvoice'); ?></p>
          <a href="<?php echo xvoice_home_anchor('#contact'); ?>" class="btn btn-primary btn-lg mid-cv-btn btn-trial">
            <span class="btn-trial-inner"><?php _e('お問い合わせ・資料請求', 'xvoice'); ?></span>
            <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

<?php get_footer();
