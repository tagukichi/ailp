<?php
/**
 * CTA form fallback (used when no CF7 shortcode is configured).
 *
 * To replace with Contact Form 7: set the shortcode in
 * Appearance → Customize → xVoice テーマオプション → お問い合わせ
 * フォーム ショートコード.
 *
 * @package xVoice
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Form skeleton (replace via [contact-form-7] shortcode in Customizer) -->
<form class="cta-form" novalidate>
    <div class="cta-form-grid">
        <div class="cta-field">
            <label for="cta-company"><?php _e('会社名', 'xvoice'); ?> <span class="cta-req"><?php _e('必須', 'xvoice'); ?></span></label>
            <input type="text" id="cta-company" name="company" placeholder="株式会社xVoice" autocomplete="organization">
        </div>
        <div class="cta-field">
            <label for="cta-name"><?php _e('お名前', 'xvoice'); ?> <span class="cta-req"><?php _e('必須', 'xvoice'); ?></span></label>
            <input type="text" id="cta-name" name="name" placeholder="山田 太郎" autocomplete="name">
        </div>
        <div class="cta-field">
            <label for="cta-email"><?php _e('メールアドレス', 'xvoice'); ?> <span class="cta-req"><?php _e('必須', 'xvoice'); ?></span></label>
            <input type="email" id="cta-email" name="email" placeholder="example@xvoice.jp" autocomplete="email">
        </div>
        <div class="cta-field">
            <label for="cta-tel"><?php _e('電話番号', 'xvoice'); ?></label>
            <input type="tel" id="cta-tel" name="tel" placeholder="03-xxxx-xxxx" autocomplete="tel">
        </div>
        <div class="cta-field cta-field-full">
            <label for="cta-purpose"><?php _e('ご相談内容', 'xvoice'); ?></label>
            <select id="cta-purpose" name="purpose">
                <option value=""><?php _e('選択してください', 'xvoice'); ?></option>
                <option value="trial"><?php _e('無料トライアルの申し込み', 'xvoice'); ?></option>
                <option value="demo"><?php _e('デモ体験を予約', 'xvoice'); ?></option>
                <option value="estimate"><?php _e('お見積もり', 'xvoice'); ?></option>
                <option value="other"><?php _e('その他のお問い合わせ', 'xvoice'); ?></option>
            </select>
        </div>
        <div class="cta-field cta-field-full">
            <label for="cta-message"><?php _e('ご質問・ご要望（任意）', 'xvoice'); ?></label>
            <textarea id="cta-message" name="message" rows="4" placeholder="<?php esc_attr_e('店舗数、想定通話数など、運用イメージを教えてください。', 'xvoice'); ?>"></textarea>
        </div>
        <div class="cta-field cta-field-full cta-field-consent">
            <label class="cta-consent">
                <input type="checkbox" name="consent">
                <span><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" target="_blank" rel="noopener"><?php _e('プライバシーポリシー', 'xvoice'); ?></a><?php _e('に同意する', 'xvoice'); ?></span>
            </label>
        </div>
    </div>
    <div class="cta-form-submit">
        <button type="submit" class="btn btn-white btn-lg">
            <span><?php _e('送信する', 'xvoice'); ?></span>
            <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</form>
