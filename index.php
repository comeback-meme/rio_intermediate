<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <title>U FIT</title>
  <meta name="description" content="トップページの説明" />
  <meta name="keywords" content="キーワード" />
  <!-- ogp -->
  <meta property="og:title" content="サイト名" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="サイトのドメイン" />
  <meta property="og:image" content="OGP IMAGE" />
  <meta property="og:site_name" content="サイトのドメイン" />
  <meta property="og:description" content="トップページの説明" />
  <!-- ファビコン -->
  <link rel="”icon”" href="#">
  <link rel="apple-touch-icon" href="#">
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Noto+Sans+JP:wght@400;500&family=Noto+Sans:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="/css/destyle.min.css" media="all">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="/">
          <img src="images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="header__title">U FIT</span>
        </a>
      </h1>
      <div id="js_hamburgerBg" class="hamburger_bg"></div><!-- is activeが付くとこ -->
      <nav id="js_headerNav" class="header__nav"><!-- is activeが付くとこ -->
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="#feature">feature</a></li>
          <li class="header__nav-item"><a href="#voice">voice</a></li>
          <li class="header__nav-item"><a href="#plan">plan</a></li>
          <li class="header__nav-item"><a href="#faq">faq</a></li>
          <li class="header__nav-item"><a class="c-btn c-btn--colorChange" href="#" target="_blank" rel="noopener">無料体験の申し込みはこちら</a></li>
        </ul>
      </nav>
      <!-- <a href="" class="c-btn c-btn--white">無料体験お申込み</a> -->

      <div class="header__contact-wrapper">
        <a href="#">
          <div class="header__contact"></div>
        </a>

        <button id="js_hamburgerBtn" class="hamburger_menu"><!-- is activeが付くとこ -->
          <span class="hamburger_bar1"></span>
          <span class="hamburger_bar2"></span>
          <span class="hamburger_bar3"></span>
        </button>
      </div>

  </header>
  <!-- <main style="background: #fff;width: 100%;height: 5000px;"></main> -->
  <main>
    <div class="mv__image">
      <div class="mv__inner">
        <p class="mv__title">U FIT</p>
      </div>
    </div>

    <!-- aboutセクション -->
    <section id="about" class="about">
      <div class="about__inner">
        <div class="about__content">
          <div class="about__body">
            <h3 class="about__title">Be yourself</h3>
            <p class="about__text">U FITは、自分の好きな自分になれる場所<br class="pc-only">一時的なボディメイクのサポートではなく、お客様1人1<br class="pc-only">人に寄り添い、長期間における身体のあり方を「共に」<br class="pc-only">
              作り上げていきます。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- featureセクション -->
    <section id="feature" class="feature">
      <h2 class="feature__title title-style">feature</h2>
      <div class="feature__inner">
        <ul class="feature__list">
          <li class="feature__item">
            <div class="feature__content">
            <h3 class="feature__item-title">種類豊富なマシーン完備</h3>
            <p class="feature__text">幅広い種類のトレーニングマシーンで、最適なトレーニングを提供します。<br>ウエイトトレーニングHITトレーニングができる環境が整っています。
            </p>
            </div>
            <div class="feature__item-image">
              <img src="/images/top/feature01@2x.jpg" alt="" width="240" height="192">
            </div>
          </li>
          <li class="feature__item">
            <div class="feature__content">
            <h3 class="feature__item-title">あなたに寄り添うトレーナー</h3>
            <p class="feature__text">当ジムのトレーナーは、あなたに寄り添いながら、個別の目標に合わせたカスタムトレーニングを提供します。<br>わたしたちと一緒に最高の体作りを目指しましょう。
            </p>
            </div>
            <div class="feature__item-image">
              <img src="/images/top/feature02@2x.jpg" alt="" width="240" height="192">
            </div>
          </li>
          <li class="feature__item">
            <div class="feature__content">
            <h3 class="feature__item-title">通いやすいロケーション</h3>
            <p class="feature__text">駅から徒歩3分の立地で、忙しい日常の中でも、手軽にトレーニングが可能！<br>あなたのフィットネス生活をサポートします。
            </p>
            </div>
            <div class="feature__item-image">
              <img src="/images/top/feature03@2x.jpg" alt="" width="240" height="192">
            </div>
          </li>
        </ul>


      </div>




    </section>


  </main>
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__logo">
        <a href="/">
          <img src="images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="footer__title">U FIT</span>
        </a>
      </div>

      <nav class="footer__nav">
        <ul class="footer__nav-list">
          <li class="footer__nav-item"><a href="/">feature</a></li>
          <li class="footer__nav-item"><a href="#">voice</a></li>
          <li class="footer__nav-item"><a href="#">plan</a></li>
          <li class="footer__nav-item"><a href="#">faq</a></li>
        </ul>
      </nav>
    </div>
    <p class="footer__copy">
      <small class="footer__copy-text">Copyright &copy; U FIT All Rights Reserved.</small>
    </p>
  </footer>

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./js/style.js"></script>
</body>

</html>