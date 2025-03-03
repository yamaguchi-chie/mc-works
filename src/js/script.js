jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
//ドロワーメニュー
$(".js-header-hamburger").click(function () {
    $(".sp-nav").toggleClass("js-open");
    $(".js-header-hamburger>span").toggleClass("js-open");
    $(".js-header-hamburger").toggleClass("js-open");

      //クリックしたときMV以上だったら、透過しない
    // if ($('.js-mainview').height() < $(window).scrollTop()) {
    //   $(".js-header-hamburger>span").addClass("js-opacity");
    // } else { //クリックしたときMV以下だったら、透過する
    //   $(".js-header-hamburger>span").toggleClass("js-opacity");
    // }
  });

});
