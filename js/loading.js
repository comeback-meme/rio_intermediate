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