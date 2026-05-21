# xVoice WordPress Theme

電話対応をAIエージェントにまかせる音声AIプラットフォーム **xVoice** のオリジナル WordPress テーマです。

## 動作要件

- WordPress 6.0 以上
- PHP 7.4 以上
- 推奨プラグイン: [Contact Form 7](https://ja.wordpress.org/plugins/contact-form-7/)（お問い合わせフォーム用）

## インストール手順

1. このディレクトリ（`wp-theme/xvoice/`）をそのまま zip 化、または FTP/SSH で `wp-content/themes/xvoice/` に配置
2. WordPress 管理画面 → 外観 → テーマ → **xVoice** を有効化
3. 必要に応じて以下を設定

### 1. 固定ページの作成

#### トップページ
- 設定 → 表示設定 → 「ホームページの表示」を「固定ページ」に
- **ホームページ**: 任意の固定ページ（中身は空でOK、`front-page.php` が自動で表示される）

#### 機能詳細ページ
- 固定ページを新規作成 → **スラッグを `features`** に設定
- すると `page-features.php` が自動的に適用される（タイトル・内容は空でOK）
- もしくは固定ページ編集画面で「ページ属性 → テンプレート」から「機能詳細」を選択

### 2. メニュー設定（任意）

外観 → メニュー で以下のメニュー位置に割り当て可能:
- **プライマリ メニュー**: ヘッダー PC ナビ
- **モバイル メニュー**: ハンバーガーメニュー（未設定の場合プライマリと同じ）
- **フッター・サービス**: フッター左カラム
- **フッター・はじめる**: フッター中央カラム

未設定の場合はテーマ内のフォールバック（既定のリンク）が表示されます。

### 3. お問い合わせフォーム（Contact Form 7）

1. Contact Form 7 プラグインをインストール・有効化
2. お問い合わせ → コンタクトフォーム新規追加し、ショートコードを取得
   例: `[contact-form-7 id="123" title="お問い合わせ"]`
3. 外観 → カスタマイズ → **xVoice テーマオプション** → **お問い合わせフォーム ショートコード** にショートコードを貼り付け

設定しない場合は、デザイン確認用の静的フォーム雛形（送信不可）が表示されます。

## ファイル構成

```
wp-theme/xvoice/
├── style.css                          # テーマヘッダ + 全 CSS
├── functions.php                      # テーマセットアップ・カスタマイザ
├── index.php                          # フォールバック
├── header.php                         # ヘッダー（ナビ・ハンバーガー）
├── footer.php                         # フッター・TOP戻るボタン
├── front-page.php                     # トップページ
├── page-features.php                  # 機能詳細ページ（スラッグ "features" で自動適用 or テンプレート選択）
├── template-parts/
│   └── cta-form-fallback.php          # CF7 未設定時のフォーム雛形
├── assets/
│   ├── js/main.js                     # フロントエンド JS（ハンバーガー / typewriter / sticky CTA など）
│   └── images/
│       ├── xvoice_logo.png            # サイトロゴ
│       └── features/                  # 機能詳細ページ用画像 20 枚
└── README.md
```

## カスタマイズ

### ロゴ差し替え
`assets/images/xvoice_logo.png` を上書きしてください。

### 主要セクションの編集
- ヒーロー、お悩み、選ばれる理由、機能、CV など、各セクションは `front-page.php` 内に記述されています
- セクション単位で抽出したい場合は `template-parts/` に分割可能（現状は単一ファイル管理）

### カラー / フォント
`style.css` 内の CSS カスタムプロパティで一括変更できます:
```css
:root {
  --color-primary: #0a2540;
  --color-accent: #2c6bff;
  --color-cyan: #00c2d1;
  --grad-accent: linear-gradient(120deg, #2c6bff 0%, #00c2d1 100%);
  ...
}
```

## ライセンス

GPL v2 or later

## クレジット

- **デザイン・実装**: xVoice チーム
- **フォント**: [Noto Sans JP](https://fonts.google.com/specimen/Noto+Sans+JP) / [Space Grotesk](https://fonts.google.com/specimen/Space+Grotesk)

---

🔗 静的版プレビュー（GitHub Pages）: リポジトリのルート `index.html` / `features.html`
