<?php
/**
 * Page template: プライバシーポリシー (Privacy Policy).
 *
 * Auto-applied to a WP page with slug "privacypolicy".
 * Body text is baked into the template; the WP editor content is not used.
 *
 * Template Name: プライバシーポリシー
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
        <span class="page-hero-eyebrow">PRIVACY POLICY</span>
        <h1 class="page-hero-title"><?php _e('個人情報保護方針', 'xvoice'); ?></h1>
        <p class="page-hero-lead"><?php _e('株式会社カイゼンテクノロジは、お客様の個人情報を適切に取り扱い、保護することを社会的責務と認識しています。', 'xvoice'); ?></p>
      </div>
    </section>

    <!-- ============ PAGE CONTENT ============ -->
    <section class="page-content-section">
      <div class="container container-narrow">
        <div class="page-content">

          <p><?php _e('株式会社カイゼンテクノロジ（以下、「当社」という。）は、ＡＩを利用したシステム開発・運営事業を行っております。当社は、同業務を実施する上で、個人情報の保護が重要な事項であると認識しております。', 'xvoice'); ?></p>
          <p><?php _e('そこで当社は、当社の事業の用に供するすべての個人情報を適切に取扱うため、当社全従業者が遵守すべき行動基準として本個人情報保護方針を定め、その遵守の徹底を図ることといたします。', 'xvoice'); ?></p>

          <ol class="page-content-list">
            <li><?php _e('当社は、個人情報の取扱いに関する法令、国が定める指針その他の規範を遵守します。そのため、日本産業規格「個人情報保護マネジメントシステム — 要求事項」（JIS Q 15001）に準拠した個人情報保護マネジメントシステムを策定し、適切に運用いたします。', 'xvoice'); ?></li>
            <li><?php _e('当社は、事業の内容及び規模を考慮した適切な個人情報の取得、利用及び提供を行います。それには特定された利用目的の達成に必要な範囲を超えた個人情報の取扱いを行わないこと及びそのための措置を講じることを含みます。', 'xvoice'); ?></li>
            <li><?php _e('当社は、個人情報の取扱いの全部又は一部を委託する場合は、その取扱いを委託された個人情報の安全管理が図られるよう、委託を受けた者に対する必要かつ適切な監督を行います。', 'xvoice'); ?></li>
            <li><?php _e('当社は、本人の同意がある場合又は法令に基づく場合を除き、個人情報を第三者に提供することはありません。', 'xvoice'); ?></li>
            <li><?php _e('当社は、個人情報の漏えい、滅失又はき損の防止及び是正のための措置を講じます。', 'xvoice'); ?></li>
            <li><?php _e('当社は、個人情報の取扱いに関する苦情及び相談への適切かつ迅速な対応に努めます。また、当社が保有する保有個人データの開示等の請求等（利用目的の通知、開示、訂正・追加又は削除、利用又は提供の停止・第三者提供記録の開示）を受け付けます。開示等の請求等の手続きにつきましては、以下の「個人情報苦情及び相談窓口」までご連絡ください。', 'xvoice'); ?></li>
            <li><?php _e('当社は、個人情報保護マネジメントシステムの継続的改善を行ないます。', 'xvoice'); ?></li>
          </ol>

          <div class="page-content-box">
            <h2><?php _e('個人情報保護方針、個人情報苦情及び相談窓口', 'xvoice'); ?></h2>
            <p>e-mail：<a href="mailto:privacy@kaizentec.jp">privacy@kaizentec.jp</a></p>
          </div>

          <div class="page-content-sign">
            <p><?php _e('２０２６年６月１日 制定', 'xvoice'); ?><br>
            <?php _e('２０２６年１月１日 改定', 'xvoice'); ?></p>
            <p><?php _e('株式会社カイゼンテクノロジ', 'xvoice'); ?><br>
            <?php _e('代表取締役　立石　敦', 'xvoice'); ?></p>
          </div>

        </div>
      </div>
    </section>

<?php get_footer();
