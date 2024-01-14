jQuery(function ($) {
  // $はjQueryを表す
  // この中にコードを書く

  // 例：クラスがc-btnのcolorを黒色にする
  // $(".c-btn").css("color","black")

  // 例：idがbuttonのテキストを変更
  // $("#button").text("ボタンのテキストを変更");

  // 例：クラスがc-btnをクリックした場合、コンソールログを出力
  // $(".c-btn").click(function() {
  //     console.log("ボタンがクリックされました！");
  // });

  $(".js-faq-question").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });


  // ローディング
  // $(window).on("load", function () {
  //     endLoading();
  // });

  // function endLoading() {
  //     setTimeout(function () {
  //         $(".js-loading").fadeOut(1000);
  //     }, 2000);
  // }

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

});

