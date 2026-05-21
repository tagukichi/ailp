<?php
/**
 * Page template: 機能詳細 (features page).
 *
 * Assign this template to a WP Page (e.g. with slug "features").
 * If a page with slug "features" exists, WordPress will auto-pick
 * this template via the page-{slug} hierarchy.
 *
 * Template Name: 機能詳細
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
        <span class="page-hero-eyebrow">CORE FEATURES</span>
        <h1 class="page-hero-title">機能詳細</h1>
        <p class="page-hero-lead">xVoice の全機能を詳しくご紹介します。<br>通話の自動化から FAX OCR、AI エージェントによる自律応対まで網羅。</p>
        <nav class="page-hero-anchors" aria-label="機能カテゴリ">
          <a href="#xvoice-features">xVoice 機能</a>
          <a href="#agent-features">AI エージェント機能</a>
        </nav>
      </div>
    </section>

    <!-- ============ xVoice 機能 ============ -->
    <section id="xvoice-features" class="feature-detail-section">
      <div class="container">
        <header class="feature-detail-head">
          <span class="features-cat-num">01</span>
          <h2>xVoice 機能</h2>
          <p>通話・FAX・データの利活用までを一気通貫でサポートする 14 機能。</p>
        </header>

        <div class="feature-detail-list">
          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">01</span>
              <h3>通話時のお客様情報表示</h3>
              <p>お客様情報を着信と同時にポップアップ表示。過去の通話履歴や基本情報を確認しながら、的確な会話を進められます。</p>
              <ul class="feature-detail-voice">
                <li>会話に集中できるようになり、的確な対応ができる</li>
                <li>顧客データを検索する手間がなくなった</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-01-info-popup.jpg')); ?>" alt="通話時のお客様情報表示の画面">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">02</span>
              <h3>迷惑・営業電話のデータ共有</h3>
              <p>着信時に迷惑・営業電話を自動表示。他法人が登録した対象番号もユーザー同士で共有でき、より綿密な対応が可能です。さらに AI オペレーターが自動対応します（後述）。</p>
              <ul class="feature-detail-voice">
                <li>対応に困る電話を事前把握、ストレスが減った</li>
                <li>他社とのデータ連携で営業電話リスト構築が楽に</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-02-spam-share.jpg')); ?>" alt="迷惑・営業電話のデータ共有">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">03</span>
              <h3>通話録音・AI 要約</h3>
              <p>通話内容を自動で録音し、AI が要約を自動生成。ブラックボックス化しがちな 1対1 のやり取りを「見える化」できるほか、クレームやカスハラの証拠保全・防止策にも活用できます。</p>
              <ul class="feature-detail-voice">
                <li>通話メモの整理時間が大幅に短縮</li>
                <li>スタッフ間の要約バラツキを AI でレベル平準化</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-03-record-summary.jpg')); ?>" alt="通話録音・AI要約">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">04</span>
              <h3>文字起こし・録音再生</h3>
              <p>通話内容を自動文字起こし。音声データの再生確認も可能で、会話のトーンや流れをスタッフ全員で共有できます。</p>
              <ul class="feature-detail-voice">
                <li>他スタッフへの伝達時間が短くなった</li>
                <li>言い方・伝え方を録音データで振り返れる</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-04-transcript.jpg')); ?>" alt="文字起こし・録音再生">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">05</span>
              <h3>通話内容の社内共有</h3>
              <p>通話内容（メモ・AI 要約・タスク）を担当者や関連部署にそのまま送信。自動送信設定も可能で、複数の送信先を指定できます。</p>
              <ul class="feature-detail-voice">
                <li>通話内容を伝える時間が短くなった</li>
                <li>担当者へスムーズに自動共有できる</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-05-team-share.jpg')); ?>" alt="通話内容の社内共有">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">06</span>
              <h3>お客様への共有メッセージ</h3>
              <p>通話内容（メモ・AI 要約・タスク）を SMS・Email・LINE でお客様へ送信・共有。内容は編集可能です。</p>
              <ul class="feature-detail-voice">
                <li>議事録的にお伝えしてお客様の安心を獲得</li>
                <li>電話が苦手なお客様ともメッセージで連携</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-06-customer-message.jpg')); ?>" alt="お客様への共有メッセージ">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">07</span>
              <h3>着信時のリアルタイム共有</h3>
              <p>着信情報をリアルタイムで担当者などへ共有。スピーディな対応につなげられます。</p>
              <ul class="feature-detail-voice">
                <li>電話があったかの確認が不要に</li>
                <li>折り返しなど対応がスピーディに</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-07-realtime-share.jpg')); ?>" alt="着信時のリアルタイム共有">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">08</span>
              <h3>タスク生成・進捗管理</h3>
              <p>お客様からの「タスク」を自動生成。担当者への振り分けや進捗管理もスムーズに行えます。期限のリマインダーも自動。</p>
              <ul class="feature-detail-voice">
                <li>ご用命の伝達・記録漏れがなくなった</li>
                <li>部署・店舗全体のタスクが視える化</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-08-task.jpg')); ?>" alt="タスク生成・進捗管理">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">09</span>
              <h3>会話の評価・ハラスメントチェック</h3>
              <p>お客様との会話を AI が公平に自動評価。カスハラ・モラハラのリスクも判定し、特定ワードの検出も可能です。</p>
              <ul class="feature-detail-voice">
                <li>属人的な評価がなくなり、スタッフ育成がやりやすく</li>
                <li>カスハラ・モラハラ基準に沿った組織運用が可能</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-09-evaluation.jpg')); ?>" alt="会話の評価・ハラスメントチェック">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">10</span>
              <h3>既存システムへのデータ連携</h3>
              <p>独自開発の RPA を活用し、xVoice のデータを既存システムへ自動連携。単純な入力・コピペ作業を自動化できます。</p>
              <ul class="feature-detail-voice">
                <li>取引先システムへの自動入力で工数削減</li>
                <li>コピペ作業から解放されコア業務に集中</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-10-system-link.jpg')); ?>" alt="既存システム連携">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">11</span>
              <h3>FAX 表示・データ管理</h3>
              <p>FAX 内容を PC 表示し、顧客データベースと紐づけて履歴管理。担当者別の自動転送も可能です。</p>
              <ul class="feature-detail-voice">
                <li>FAX の手動管理が自動化されて助かった</li>
                <li>担当者別の自動転送で情報共有の手間削減</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-11-fax-display.jpg')); ?>" alt="FAX 表示・データ管理">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">12</span>
              <h3>FAX の OCR・自動データ化</h3>
              <p>FAX 内容を自動的に AI がデータ化。データチェック・編集もサポートし、特定の帳票への対応も調整可能です。</p>
              <ul class="feature-detail-voice">
                <li>OCR 化の手動作業から解放</li>
                <li>OCR 結果のデータ入力効率が大幅向上</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-12-fax-ocr.jpg')); ?>" alt="FAX OCR・自動データ化">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">13</span>
              <h3>データダッシュボード</h3>
              <p>電話・FAX のやりとりをデータ化。通話時間・問い合わせ内容の偏りを可視化し、運用改善につながるダッシュボードを提供。個別のカイゼンサポートも実施します。</p>
              <ul class="feature-detail-voice">
                <li>スタッフへの負荷偏りを把握し具体的対応</li>
                <li>個別カイゼンサポートで作業効率改善</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-13-dashboard.jpg')); ?>" alt="データダッシュボード">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">14</span>
              <h3>社内ナレッジ活用・Q&amp;A 自動化</h3>
              <p>データ化された通話内容を AI で要約・整理し、社内のノウハウ・知識・経験を資産化。社内問合せの自動化もサポートします。</p>
              <ul class="feature-detail-voice">
                <li>属人化していた社内ノウハウを最小限の手間で蓄積</li>
                <li>社内 AI ボットへの活用が可能に</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/xvoice-14-knowledge.jpg')); ?>" alt="社内ナレッジ活用・Q&A 自動化">
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============ AI エージェント機能 ============ -->
    <section id="agent-features" class="feature-detail-section feature-detail-section-alt">
      <div class="container">
        <header class="feature-detail-head">
          <span class="features-cat-num">02</span>
          <h2>AI エージェント機能</h2>
          <p>受話・発話の自律対応、対面応対、ロープレ教育まで。AI が幅広いシーンで活躍する 6 機能。</p>
        </header>

        <div class="feature-detail-list">
          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">01</span>
              <h3>受話・インバウンド対応</h3>
              <p>24 時間・365 日、指定のシーンにあわせて受話対応を自律的に実行。迷惑・営業・業務電話にも自律対応し、専門知識も事前学習可能です。</p>
              <ul class="feature-detail-voice">
                <li>夜間・休日の機会損失を解消</li>
                <li>迷惑電話・営業電話のフィルタリングも自動</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/agent-01-inbound.jpg')); ?>" alt="受話・インバウンド対応">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">02</span>
              <h3>発話・アウトバウンド対応</h3>
              <p>24 時間・365 日、指定の内容の発話対応を自律的に実行。督促電話・休眠顧客フォロー・期限通知・解約理由ヒアリングなど、お客様ごとの情報を反映した発話が可能です。</p>
              <ul class="feature-detail-voice">
                <li>督促・フォロー業務の負荷を大幅削減</li>
                <li>顧客ごとに最適化された自動発信</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/agent-02-outbound.jpg')); ?>" alt="発話・アウトバウンド対応">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">03</span>
              <h3>対面応対</h3>
              <p>指定の内容の対面応対を自律的に実行。イベント受付、法人来客受付、道案内、多言語案内などに対応します。</p>
              <ul class="feature-detail-voice">
                <li>受付スタッフの業務をスマートに</li>
                <li>多言語案内で訪日客対応もカバー</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/agent-03-face.jpg')); ?>" alt="対面応対">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">04</span>
              <h3>インカム応対</h3>
              <p>既存システムや設備の情報をもとに、AI がインカムからの質問に返答。製造工場、自動車販売店、建設現場などで活用できます。</p>
              <ul class="feature-detail-voice">
                <li>現場の確認業務をスマートに</li>
                <li>専門知識の取り回しを AI で平準化</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/agent-04-intercom.jpg')); ?>" alt="インカム応対">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">05</span>
              <h3>ロールプレイング・人材教育</h3>
              <p>先輩・教育スタッフが実施していたロープレを、実際のお客様データを踏まえて AI が代行。ロープレの評価も AI が公平に実施。自動車商談・保険商談・金融商談などで活用できます。</p>
              <ul class="feature-detail-voice">
                <li>新人教育を AI で 24h いつでも実施可能</li>
                <li>評価基準が均一になり育成品質が安定</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/agent-05-roleplay.jpg')); ?>" alt="ロールプレイング・人材教育">
            </div>
          </article>

          <article class="feature-detail">
            <div class="feature-detail-text">
              <span class="feature-detail-num">06</span>
              <h3>AItoAI 応対時のコスト削減</h3>
              <p>通話相手が AI だった場合、AI 同士でより効率的なやり取りをサポートし、コスト削減につなげます。</p>
              <ul class="feature-detail-voice">
                <li>AI 同士の高効率コミュニケーション</li>
                <li>営業電話・自動応答コストを削減</li>
              </ul>
            </div>
            <div class="feature-detail-img">
              <img src="<?php echo esc_url(xvoice_asset_uri('images/features/agent-06-ai-to-ai.jpg')); ?>" alt="AItoAI コスト削減">
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============ Mid CTA (back to top) ============ -->
    <section class="mid-cv">
      <div class="container">
        <div class="mid-cv-inner">
          <h2 class="mid-cv-title">電話対応をAIに任せませんか？</h2>
          <p class="mid-cv-lead">まずは無料トライアルから、気軽に体験できます。</p>
          <a href="<?php echo xvoice_home_anchor('#contact'); ?>" class="btn btn-primary btn-lg mid-cv-btn btn-trial">
            <span class="btn-trial-inner">無料トライアルを申し込む</span>
            <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

<?php get_footer();
