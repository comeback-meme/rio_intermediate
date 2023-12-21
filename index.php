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
  <link rel="”icon”" href="">
  <link rel="apple-touch-icon" href="">
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Noto+Sans+JP:wght@400;500&family=Noto+Sans:wght@500&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
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
          <li class="header__nav-item"><a href="/">feature</a></li>
          <li class="header__nav-item"><a href="#">voice</a></li>
          <li class="header__nav-item"><a href="#">plan</a></li>
          <li class="header__nav-item"><a href="#">faq</a></li>
          <li class="header__nav-item"><a class="c-btn c-btn--colorChange" href="#" target="_blank"
              rel="noopener">無料体験の申し込みはこちら</a></li>
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
  </main>
  <footer class="footer">
  フッター2
  </footer>

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./js/style.js"></script>
</body>

</html>