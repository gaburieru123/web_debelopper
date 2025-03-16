// // ①
// document.addEventListener("DOMContentLoaded", function () {
//  const fv = document.querySelector("#fv-js");
//  const fvNews = document.querySelector("#fv__news-js");

//  if (!fv || !fvNews) return; // 要素が存在しない場合は処理を中断

//  const fvHeight = fv.offsetHeight; // fv の高さを取得
//  const fadeOutStart = fvHeight - 100; // フェードアウト開始位置（調整可）

//  window.addEventListener("scroll", function () {
//    let scrollY = window.scrollY; // 現在のスクロール位置

//    if (scrollY >= fadeOutStart) {
//      fvNews.style.opacity = "0"; // フェードアウト
//    } else {
//      fvNews.style.opacity = "1"; // フェードイン
//    }
//  });
// });

// ②
document.addEventListener("DOMContentLoaded", function () {
 const fv = document.querySelector("#fv-js");
 const fvNews = document.querySelector("#fv__news-js");

 if (fv && fvNews) {
     const fvHeight = fv.offsetHeight; // fv の高さを取得
     const fadeOutStart = fvHeight - 300; // フェードアウト開始位置（調整可）

     $(window).on("scroll", function () {
         let scrollY = $(window).scrollTop(); // 現在のスクロール位置
         console.log("現在のスクロール位置:", scrollY); // スクロール位置を表示

         if (scrollY >= fadeOutStart) {
             $(fvNews).stop(true, true).fadeOut(500); // 1秒かけてフェードアウト
         } else {
             $(fvNews).stop(true, true).fadeIn(500); // 1秒かけてフェードイン
         }
     });
 }
});

$(document).ready(function() {
 // 背景画像を順番にフェードイン
 const fadeInImages = () => {
   $('.bg-image').each(function(index) {
     $(this).delay(index * 800).fadeIn(1000); // 800msずつ遅延させて、1秒かけてフェードイン
   });
 };

 // ページ読み込み後に実行
 fadeInImages();
});