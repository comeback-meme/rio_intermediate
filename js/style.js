// グローバルナビ ハンバーガーメニュー
// --------------------------------------------------------------

const hamburgerBtn = document.querySelector("#js_hamburger_btn");
const hamburgerBg = document.querySelector("#js_hamburger_bg");
const headerNav = document.querySelector("#js_header_nav");
const headerLinks = document.querySelectorAll("#js_header_nav li a");

hamburgerBtn.addEventListener("click", function () {
  this.classList.toggle("is_active");
  headerNav.classList.toggle("is_active");
  hamburgerBg.classList.toggle("is_active");
});

hamburgerBg.addEventListener("click", function () {
  hamburgerBtn.classList.remove("is_active");
  headerNav.classList.remove("is_active");
  hamburgerBg.classList.remove("is_active");
});

headerLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    hamburgerBtn.classList.remove("is_active");
    headerNav.classList.remove("is_active");
    hamburgerBg.classList.remove("is_active");
  });
});

// アコーディオン FAQ >> jQueryから書き換え
document.querySelectorAll(".js-faq-question").forEach(function (element) {
  element.addEventListener("click", function () {
    const answer = this.nextElementSibling;
    answer.style.display =
      answer.style.display === "none" || answer.style.display === ""
        ? "block"
        : "none";
    this.classList.toggle("is-open");
  });
});

// ローディング  初回アクセスのみ
document.addEventListener("DOMContentLoaded", function () {
  const webStorage = function () {
    if (sessionStorage.getItem("access")) {
      /*
      2回目以降アクセス時の処理
      */
      document.querySelector(".loading").classList.add("is-active");
    } else {
      /*
      初回アクセス時の処理
      */
      sessionStorage.setItem("access", "true"); // sessionStorageにデータを保存
      document.querySelector(".loading__img").classList.add("is-active"); // loadingアニメーションを表示 opacity:1にする

      setTimeout(function () {
        // ローディングを数秒後に非表示にする
        document.querySelector(".loading").classList.add("is-active");
        document.querySelector(".loading__img").classList.remove("is-active");
      }, 3000); // ローディングを表示する時間
    }
  };
  webStorage();
});
