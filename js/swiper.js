const swiper = new Swiper(".swiper-voice", {
  loop: true, // デフォルトはfalse
  autoplay: {
    delay: 3000, //何秒ごとにスライドを動かすか
    stopOnLastSlide: false, //最後のスライドで自動再生を終了させるか
    disableOnInteraction: true, //ユーザーの操作時に止める
    reverseDirection: false, //自動再生を逆向きにする
  },
  speed: 1000, //表示切り替えのスピード
  effect: "slide", //切り替えのmotion (※1)
  centeredSlides: true, // アクティブなスライドを中央にする
  slidesPerView: "auto", // autoにする
  initialSlide: 1, // スライドの開始位置

  breakpoints: {
    1: {
      spaceBetween: 18,
    },
    769: {
      spaceBetween: 24,
    },
    993: {
      spaceBetween: 30,
    },
    1201: {
      spaceBetween: 40,
    },
  },

  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true, // クリック有効化
  },
});
