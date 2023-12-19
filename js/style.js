// グローバルナビ ハンバーガーメニュー
// --------------------------------------------------------------

const hamburgerBtn = document.querySelector('#js_hamburgerBtn');
const hamburgerBg = document.querySelector('#js_hamburgerBg');
const headerNav = document.querySelector('#js_headerNav');

hamburgerBtn.addEventListener('click', function () {
  this.classList.toggle('is_active');
  headerNav.classList.toggle('is_active');
  hamburgerBg.classList.toggle('is_active');
});

hamburgerBg.addEventListener('click', function () {
  hamburgerBtn.classList.remove('is_active');
  headerNav.classList.remove('is_active');
  hamburgerBg.classList.remove('is_active');
});