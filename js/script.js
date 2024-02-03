jQuery(function ($) {
  // $はjQueryを表す
  // この中にコードを書く
  // 例：クラスがprimary-btnのcolorを黒色にする
  // $(".primary-btn").css("color","black")
  // 例：idがbuttonのテキストを変更
  // $("#button").text("ボタンのテキストを変更");
  // 例：クラスがprimary-btnをクリックした場合、コンソールログを出力
  // $(".primary-btn").click(function() {
  //     console.log("ボタンがクリックされました！");
  // });

  // アコーディオン FAQ >> javascriptに書き換え
  $(".js-faq-question").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });
  
  // ローディング
  // $(window).on("load", function () {
  //   endLoading();
  // });
  // function endLoading() {
  //   setTimeout(function () {
  //     $(".js-loading").fadeOut(1000);
  //   }, 2000);
  // }

  // ローディング  初回アクセスのみ >> javascriptに書き換え
  $(function () {
    var webStorage = function () {
      if (sessionStorage.getItem("access")) {
        /*
        2回目以降アクセス時の処理
      */
        $(".loading").addClass("is-active");
      } else {
        /*
        初回アクセス時の処理
      */
        sessionStorage.setItem("access", "true"); // sessionStorageにデータを保存
        $(".loading__img").addClass("is-active"); // loadingアニメーションを表示 opacity:1にする
        setTimeout(function () {
          // ローディングを数秒後に非表示にする
          $(".loading").addClass("is-active");
          $(".loading__img").removeClass("is-active");
        }, 3000); // ローディングを表示する時間
      }
    };
    webStorage();
  });

  // パララックス
  // $(function () {
  //   var parallaxContent = $("#parallax");
  //   var parallaxNum = parallaxContent.offset().top;
  //   var parallaxFactor = 0.5;
  //   var windowHeight = $(window).height();
  //   var scrollYStart = parallaxNum - windowHeight;
  //   $(window).on("scroll", function () {
  //     var scrollY = $(this).scrollTop();
  //     if (scrollY > scrollYStart) {
  //       parallaxContent.css(
  //         "background-position-y",
  //         (scrollY - parallaxNum) * parallaxFactor + "px"
  //       );
  //     }
  //   });
  // });

  // スムーススクロール（５秒）
  // $(function () {
  //   $(".js-scroll").on("click", (e) => {
  //     e.preventDefault();
  //     let $target = $($(e.currentTarget).attr("href"));
  //     if ($target.length > 0) {
  //       $("html, body").animate(
  //         {
  //           scrollTop: $target.offset().top,
  //         },
  //         500,
  //         "swing"
  //       );
  //     }
  //   });
  // });
});
