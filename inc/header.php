<header class="header">
    <div class="header__inner">

    <?php if ($isTopPage) : ?> <!-- トップページならheader__logoを「h1」に -->
      <h1 class="header__logo">
        <a href="/">
          <img src="/images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="header__title">U FIT</span>
        </a>
      </h1>
    <?php else : ?> <!-- トップページ以外ならheader__logoを「p」に -->
      <p class="header__logo">
        <a href="/">
          <img src="/images/top/logo_header.png" alt="u fit" width="61" height="61">
          <span class="header__title">U FIT</span>
        </a>
      </p>
    <?php endif; ?>


      <div id="js_hamburger_bg" class="hamburger_bg"></div><!-- is activeが付くとこ -->
      <nav id="js_header_nav" class="header__nav"><!-- is activeが付くとこ -->
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="/#feature">feature</a></li>
          <li class="header__nav-item"><a href="/#voice">voice</a></li>
          <li class="header__nav-item"><a href="/plan/">plan</a></li>
          <li class="header__nav-item"><a href="/#faq">faq</a></li>
          <li class="header__nav-item"><a class="primary-btn primary-btn_color-change" href="/contact/">無料体験の申し込みはこちら</a></li>
        </ul>
      </nav>

      <div class="header__contact-wrapper">
        <a class="header__contact" href="/contact/"></a>

        <button id="js_hamburger_btn" class="hamburger_menu"><!-- is activeが付くとこ -->
          <span class="hamburger_bar1"></span>
          <span class="hamburger_bar2"></span>
          <span class="hamburger_bar3"></span>
        </button>
      </div>
      </div>

  </header>