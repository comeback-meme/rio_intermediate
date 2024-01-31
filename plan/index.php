<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include(__DIR__ . "/../inc/head.php"); ?>
  <meta name="description" content="トレーニングプランには３つのコースがあります。" />
  <meta name="keywords" content="キーワード" />
  <title>選べる３つのプラン | U FIT</title>
  <link rel="stylesheet" href="/css/swiper-bundle.min.css" media="all">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <!-- ヘッダー -->
  <?php include(__DIR__ . "/../inc/header.php"); ?>
  <main>
    <div class="plan-page-mv__image">
      <h1 class="plan-page__title primary-title">plan</h1>
    </div>

    <!-- PLANセクション -->
    <section class="plan">
      <h2 class="plan-page__list_title">選べる３つのプラン</h2>
      <div class="plan-page__inner">
        <ul class="plan-page__list">
          <!--ボタン_ビギナーコース -->
          <li class="plan-page__item">
            <a href="#beginner">
              <div class="plan-page__number">1</div>
              <h3 class="plan-page__text">ビギナーコース</h3>
            </a>
          </li>
          <!-- ボタン_トレーニングコース -->
          <li class="plan-page__item">
            <a href="#training">
              <div class="plan-page__number">2</div>
              <h3 class="plan-page__text">トレーニングコース</h3>
            </a>
          </li>
          <!-- ボタン_ストイックコース -->
          <li class="plan-page__item">
            <a href="#stoic">
              <div class="plan-page__number">3</div>
              <h3 class="plan-page__text">ストイックコース</h3>
            </a>
          </li>
        </ul>
      </div>


      <div class="plan-page__card-inner">
        <ul class="plan-page__card-list">
          <!-- アイテム１ -->
          <li class="plan-page__card-item scroll-margin" id="beginner">
            <div class="plan-page__card-top">
              <div class="plan-page__card-number">1</div>
              <h3 class="plan-page__card-title">ビギナーコース</h3>
            </div>

            <div class="plan-page__card-wrap">
              <p class="plan-page__card-price">8回<span>8200</span>円</p>
              <div class="plan-page__card-info">
                <p class="plan-page__card-service">食事指導</p>
                <p class="plan-page__card-service">トレーニング</p>
              </div>
            </div>
            <div class="plan-page__card-text-inner">
              <h4 class="plan-page__card-textHead">こんな人におすすめ</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">運動の習慣がない方。</p>
                  <p class="plan-page__card-text">疲れやストレスを感じやすい方。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">トレーニング内容</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">専門トレーナーによるカウンセリング後、メニューを組んでいきます。</p>
                  <p class="plan-page__card-text">初心者におすすめの、継続しやすいトレーニングメニューとなっております。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">食事指導</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">無理なく痩せながら栄養素も補える食生活をサポート</p>
                  <p class="plan-page__card-text">おすすめレシピの紹介を行います。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">カウンセリング</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">専属トレーナーが、あなたの生活習慣、食習慣を詳しくヒアリングします。</p>
                  <p class="plan-page__card-text">プログラムは、どんな内容なら続けられそうかを踏まえ制作します。</p>
                </li>
              </ul>
            </div>
          </li> <!-- ここまでアイテム１ -->
          <!-- アイテム2 -->
          <li class="plan-page__card-item scroll-margin" id="training">
            <div class="plan-page__card-top">
              <div class="plan-page__card-number" id="training">2</div>
              <h3 class="plan-page__card-title">トレーニングコース</h3>
            </div>

            <div class="plan-page__card-wrap">
              <p class="plan-page__card-price">8回<span>7500</span>円</p>
              <div class="plan-page__card-info">
                <p class="plan-page__card-service">トレーニング</p>
              </div>
            </div>
            <div class="plan-page__card-text-inner">
              <h4 class="plan-page__card-textHead">こんな人におすすめ</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">とにかく体力をつけたい方。</p>
                  <p class="plan-page__card-text">自分に合う運動方法がわからない。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">トレーニング内容</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">適度に休憩をはさみながらのセッションです。</p>
                  <p class="plan-page__card-text">自宅で１人でもできるストレッチやトレーニングメニューを指導していきます。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">カウンセリング</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">運動が習慣化となるようにメンタル面のフォローをします。</p>
                  <p class="plan-page__card-text">目標を設定して、それにあわせたトレーニングを設定します。</p>
                </li>
              </ul>
            </div>
          </li> <!-- アイテム2 -->
          <!-- アイテム3 -->
          <li class="plan-page__card-item scroll-margin" id="stoic">
            <div class="plan-page__card-top">
              <div class="plan-page__card-number">3</div>
              <h3 class="plan-page__card-title">ストイックコース</h3>
            </div>

            <div class="plan-page__card-wrap">
              <p class="plan-page__card-price">8回<span>9000</span>円</p>
              <div class="plan-page__card-info">
                <p class="plan-page__card-service">食事指導</p>
                <p class="plan-page__card-service">トレーニング</p>
              </div>
            </div>
            <div class="plan-page__card-text-inner">
              <h4 class="plan-page__card-textHead">こんな人におすすめ</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">努力の継続ができる方。</p>
                  <p class="plan-page__card-text">集中的に取り組むことが好きな方。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">トレーニング内容</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">厳しいトレーニングスケジュールで、体力と筋力の向上を追求します。</p>
                  <p class="plan-page__card-text">重量を使用したトレーニングで、筋肉の成長と体力の向上を図ります。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">食事指導</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">高タンパクで低炭水化物などの食事スタイルに基づき、筋肉の成長と体脂肪の減少をサポートします。</p>
                  <p class="plan-page__card-text">食事の進捗をモニタリングし、効果的な食事戦略を維持します。</p>
                </li>
              </ul>
              <h4 class="plan-page__card-textHead">カウンセリング</h4>
              <ul>
                <li class="plan-page__card-text-body">
                  <p class="plan-page__card-text">専属トレーナーが定期的に進捗状況を確認し、目標に向けての計画を立てます。</p>
                  <p class="plan-page__card-text">トレーニングの効果を定量的および定性的に評価し、改善の余地があれば修正を加えます。</p>
                </li>
              </ul>
            </div>
          </li> <!-- アイテム3 -->
        </ul>
      </div>

      <a class="primary-btn btn-entry plan-page" href="/contact/">無料体験の申し込みはこちら</a>
    </section>

  </main>

  <?php include(__DIR__ . "/../inc/footer.php"); ?>

  <!-- JS -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="/js/style.js"></script>
  <script src="/js/script.js"></script>



</body>

</html>