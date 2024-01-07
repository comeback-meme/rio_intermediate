<header class="header">
    <div class="header__inner">

    <?php if ($isTopPage) : ?> <!-- トップページならheader__logoを「h1」に -->
      <h1 class="header__logo">
        <a href="/">
          <img src="images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="header__title">U FIT</span>
        </a>
      </h1>
    <?php else : ?> <!-- トップページ以外ならheader__logoを「p」に -->
      <p class="header__logo">
        <a href="/">
          <img src="images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="header__title">U FIT</span>
        </a>
      </p>
    <?php endif; ?>


  <!-- <h1 class="header__logo">
        <a href="/">
          <img src="images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="header__title">U FIT</span>
        </a>
      </h1> -->
      <div id="js_hamburgerBg" class="hamburger_bg"></div><!-- is activeが付くとこ -->
      <nav id="js_headerNav" class="header__nav"><!-- is activeが付くとこ -->
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="/#feature">feature</a></li>
          <li class="header__nav-item"><a href="/#voice">voice</a></li>
          <li class="header__nav-item"><a href="/plan.php">plan</a></li>
          <li class="header__nav-item"><a href="/#faq">faq</a></li>
          <li class="header__nav-item"><a class="c-btn c-btn--colorChange" href="#" target="_blank" rel="noopener">無料体験の申し込みはこちら</a></li>
        </ul>
      </nav>
      <!-- <a href="" class="c-btn c-btn--white">無料体験お申込み</a> -->

      <div class="header__contact-wrapper">
        <a class="header__contact" href="#"></a>

        <button id="js_hamburgerBtn" class="hamburger_menu"><!-- is activeが付くとこ -->
          <span class="hamburger_bar1"></span>
          <span class="hamburger_bar2"></span>
          <span class="hamburger_bar3"></span>
        </button>
      </div>
      </div>

  </header>