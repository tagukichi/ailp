<?php
/**
 * Footer template.
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<!-- ============ Back to top button ============ -->
<button type="button" class="back-to-top" data-back-to-top aria-label="<?php esc_attr_e('ページの先頭へ戻る', 'xvoice'); ?>">
    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M12 19V5M5 12l7-7 7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>

<!-- ============ FOOTER ============ -->
<footer data-section="footer" class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo nav-logo-light">
                    <img src="<?php echo esc_url(xvoice_asset_uri('images/xvoice_logo.png')); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img logo-img-light">
                </a>
                <p class="footer-tag"><?php _e('電話対応を、AIエージェントにまかせる。', 'xvoice'); ?></p>
            </div>

            <div class="footer-cols">
                <div class="footer-col">
                    <h4><?php _e('サービス', 'xvoice'); ?></h4>
                    <?php if (has_nav_menu('footer_service')): ?>
                        <?php wp_nav_menu(['theme_location' => 'footer_service', 'container' => false, 'depth' => 1]); ?>
                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo xvoice_home_anchor('#reasons'); ?>"><?php _e('選ばれる理由', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo xvoice_home_anchor('#benefits'); ?>"><?php _e('できること', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo xvoice_home_anchor('#features'); ?>"><?php _e('主な機能', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/features/')); ?>"><?php _e('機能詳細', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo xvoice_home_anchor('#support'); ?>"><?php _e('サポート体制', 'xvoice'); ?></a></li>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="footer-col">
                    <h4><?php _e('はじめる', 'xvoice'); ?></h4>
                    <?php if (has_nav_menu('footer_start')): ?>
                        <?php wp_nav_menu(['theme_location' => 'footer_start', 'container' => false, 'depth' => 1]); ?>
                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo xvoice_home_anchor('#flow'); ?>"><?php _e('トライアルの流れ', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo xvoice_home_anchor('#contact'); ?>"><?php _e('無料トライアル', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo xvoice_home_anchor('#contact'); ?>"><?php _e('デモ体験', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo xvoice_home_anchor('#faq'); ?>"><?php _e('よくあるご質問', 'xvoice'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/isms/')); ?>"><?php _e('ISMS認証取得', 'xvoice'); ?></a></li>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="footer-col">
                    <h4><?php _e('運営会社', 'xvoice'); ?></h4>
                    <div class="footer-company">
                        <p><?php _e('株式会社カイゼンテクノロジ', 'xvoice'); ?></p>
                        <p class="footer-company-note"><?php _e('電話業務AIエージェント xVoice 提供', 'xvoice'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <small>&copy; <?php echo esc_html(date_i18n('Y')); ?> KAIZEN Technology, Inc. All rights reserved.</small>
            <ul class="footer-legal">
                <li><a href="#"><?php _e('プライバシーポリシー', 'xvoice'); ?></a></li>
                <li><a href="#"><?php _e('利用規約', 'xvoice'); ?></a></li>
                <li><a href="#"><?php _e('特定商取引法', 'xvoice'); ?></a></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
