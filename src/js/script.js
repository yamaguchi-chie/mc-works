jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
//ドロワーメニュー
$(".js-header-hamburger").click(function () {
    $(".sp-nav").toggleClass("js-open");
    $(".js-header-hamburger>span").toggleClass("js-open");
    $(".js-header-hamburger").toggleClass("js-open");
  });

});

// $(function () {
//   // ウィンドウをスクロールしたら…
//   $(window).scroll(function () {
//       // ウィンドウの高さを取得
//       const wHeight = $(window).height();
//       // スクロールした量を取得
//       const wScroll = $(window).scrollTop();
//           // それぞれのblockクラスに対して…
//           $(".fadeIn").each(function () {
//               // それぞれのblockクラスのウィンドウからの高さを取得
//               const bPosition = $(this).offset().top;
//               // スクロールした量が要素の高さを上回ったら
//               // その数値にウィンドウの高さを引き、最後に200pxを足す
//           if (wScroll > bPosition - wHeight + 200) {
//               $(this).addClass("fadeIn");
//           }
//       });
//   });
// });

// Intersection Observerの設定
const options = {
  root: null, // ビューポート（画面）を基準
  rootMargin: "0px 0px -13% 0px", // 画面の下10%の位置を基準
  threshold: 0 // 要素が1pxでも交差したら発火
};

// コールバック関数
const callback = (entries, observer) => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          entry.target.classList.add("appear"); // フェードインのクラスを追加
          observer.unobserve(entry.target); // 1度発火したら監視を終了
      }
  });
};

// Intersection Observer を作成
const observer = new IntersectionObserver(callback, options);

// すべての.fade-in要素を監視
document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));