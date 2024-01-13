jQuery(function ($) { // $はjQueryを表す
    // この中にコードを書く

    // 例：クラスがc-btnのcolorを黒色にする
    // $(".c-btn").css("color","black")

    // 例：idがbuttonのテキストを変更
    // $("#button").text("ボタンのテキストを変更");

    // 例：クラスがc-btnをクリックした場合、コンソールログを出力
    // $(".c-btn").click(function() {
    //     console.log("ボタンがクリックされました！");
    // });


        $('.js-faq-question').on('click', function () {
            $(this).next().slideToggle();
            $(this).toggleClass('is-open');
        });


     // ローディング
        $(window).on("load", function () {
            endLoading();
        });
    
        function endLoading() {
            setTimeout(function () {
                $(".js-loading").fadeOut(1000);
            }, 2000);
        }

});