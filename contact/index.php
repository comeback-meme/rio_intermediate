<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include(__DIR__ . "/../inc/head.php"); ?>
  <meta name="description" content="トップページの説明" />
  <meta name="keywords" content="キーワード" />
  <title>U FIT</title>
  <link rel="stylesheet" href="/css/swiper-bundle.min.css" media="all">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <!-- ヘッダー -->
  <?php include(__DIR__ . "/../inc/header.php"); ?>
  <main>
    <div class="contact-page-mv__image">
      <h1 class="contact-page__title c-title">contact</h1>
    </div>

    <!-- CONTACTセクション -->
    <section class="contact">
      <div class="contact__inner">
        <h2 class="contact__title">無料体験受付</h2>

        <form class="contact__form form" action="" method="post">
          <!-- 体験日程 -->
          <p class="form__wrap">
            <label class="form__label">体験日程<span>必須</span>
              <input type="text" name="date" autocomplete="date" placeholder="日時を選択してください">
            </label>
          </p>
          <!-- お名前 -->
          <p class="form__wrap">
            <label class="form__label">お名前<span>必須</span>
              <input type="text" name="your_name" autocomplete="name">
            </label>
          </p>
          <!-- 性別---ラジオボタン -->
          <div class="form__wrap radio">
            <p class="form__label">性別</p>
            <div class="radio__wrap">
              <label><input type="radio" name="gender" value="女性"><span>女性</span></label>
              <label><input type="radio" name="gender" value="男性"><span>男性</span></label>
            </div>
          </div>
          <!-- 住所 -->
          <p class="form__wrap">
            <label class="form__label">ご住所<span>必須</span>
              <input type="text" name="your_address" autocomplete="name">
            </label>
          </p>
          <!-- メールアドレス -->
          <p class="form__wrap">
            <label class="form__label">メールアドレス<span>必須</span>
              <input type="email" name="email" autocomplete="email" placeholder="info@example.com">
            </label>
          </p>
          <!--  電話番号 -->
          <p class="form__wrap">
            <label class="form__label">電話番号<span>必須</span>
              <input type="tel" name="tel" autocomplete="tel" placeholder="090-1234-5678">
            </label>
          </p>
          <!-- 送信ボタン -->
          <div class="form__submit">
            <input type="submit" value="送信する">
          </div>
        </form>

        <!-- テスト -->
        <div class="inner">
    <h2 class="title">お問い合わせフォーム<br>No.1 input・textareaをカスタマイズしよう！</h2>
    <form action="" class="form">
        <div class="row">
            <div class="head">氏名</div>
            <div class="data"><input type="text" placeholder="ヤマダ タロウ"></div>
        </div>
        <div class="row">
            <div class="head">メールアドレス</div>
            <div class="data"><input type="email" placeholder="info@example.com"></div>
        </div>
        <div class="row ai-start">
            <div class="head">お問い合わせ内容</div>
            <div class="data"><textarea placeholder="こちらに具体的にご入力ください"></textarea></div>
        </div>
    </form>
</div>

      </div>
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