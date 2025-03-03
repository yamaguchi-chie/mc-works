jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
//ドロワーメニュー
$(".js-header-hamburger").click(function () {
    $(".sp-nav").toggleClass("js-open");
    $(".js-header-hamburger>span").toggleClass("js-open");
    $(".js-header-hamburger").toggleClass("js-open");
  });

});
