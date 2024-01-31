<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include(__DIR__ . "/../inc/head.php"); ?>
  <meta name="description" content="無料体験受付中　ご希望の日程をお選びください。" />
  <meta name="keywords" content="キーワード" />
  <title>無料体験受付 | U FIT</title>
  <link rel="stylesheet" href="/css/swiper-bundle.min.css" media="all">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <!-- ヘッダー -->
  <?php include(__DIR__ . "/../inc/header.php"); ?>
  <main>
    <div class="contact-page-mv__image">
      <h1 class="contact-page__title primary-title">contact</h1>
    </div>

    <!-- CONTACTセクション -->
    <section class="contact">
      <div class="contact__inner">
        <h2 class="contact__title">無料体験受付</h2>

        <form class="contact__form form" action="" method="post">
          <!-- 体験日程 -->
          <div class="form__wrap">
            <label class="form__label" for="date">体験日程<span>必須</span>
            </label>
            <div class="form__data">
              <input type="text" id="date" name="date" autocomplete="date" placeholder="日時を選択してください">
            </div>
          </div>
          <!-- お名前 -->
          <div class="form__wrap">
            <label class="form__label" for="name">お名前<span>必須</span></label>
            <div class="form__data">
              <input type="text" id="name" name="your_name" autocomplete="name">
            </div>
          </div>
          <!-- 性別---ラジオボタン -->
          <div class="form__wrap radio">
            <div class="form__label">性別</div>
            <div class="radio__wrap">
              <label><input type="radio" name="gender" value="女性"><span>女性</span></label>
              <label><input type="radio" name="gender" value="男性"><span>男性</span></label>
            </div>
          </div>
          <!-- 住所 -->
          <div class="form__wrap">
            <label class="form__label" for="address">ご住所<span>必須</span> </label>
            <div class="form__data">
              <input type="text" id="address" name="your_address" autocomplete="name">
            </div>
          </div>
          <!-- メールアドレス -->
          <div class="form__wrap">
            <label class="form__label" for="mail">メールアドレス<span>必須</span></label>
            <div class="form__data">
              <input type="email" id="mail" name="email" autocomplete="email" placeholder="info@example.com">
            </div>
          </div>
          <!--  電話番号 -->
          <div class="form__wrap">
            <label class="form__label" for="tel">電話番号<span>必須</span></label>
            <div class="form__data">
              <input type="tel" id="tel" name="tel" autocomplete="tel" placeholder="090-1234-5678">
            </div>
          </div>
          <!-- 送信ボタン -->
          <div class="form__submit">
            <input type="submit" value="送信する">
          </div>
        </form>

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