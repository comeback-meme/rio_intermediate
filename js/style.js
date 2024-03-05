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


