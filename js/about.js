// jQuery(document).ready(function($) {
//  // 背景画像を順番にフェードイン
//  const fadeInImages = () => {
//    $('.about__bg-image img').each(function(index) {
//      $(this)
//        .css('opacity', 0) // 初期状態を透明に
//        .delay(index * 800) // 800ミリ秒ずつ遅延
//        .animate({ opacity: 1 }, 1000); // 1秒かけてフェードイン
//    });
//  };

//  // ページ読み込み後に実行
//  fadeInImages();
// });








// // jQuery(document).ready(function($) {
// //  const fadeInImages = () => {
// //    $('.about__bg-image img').each(function(index) {
// //      $(this)
// //        .css('opacity', 0) // 初期状態を透明に
// //        .delay(index * 800) // 800ミリ秒ずつ遅延
// //        .animate({ opacity: 1 }, 1000); // 1秒かけてフェードイン
// //    });
// //  };

// //  // スクロールイベントを監視
// //  $(window).on('scroll', function() {
// //    const aboutSection = $('.about');
// //    const windowHeight = $(window).height();
// //    const scrollTop = $(window).scrollTop();
// //    const sectionTop = aboutSection.offset().top;

// //    if (scrollTop + windowHeight > sectionTop + 100) { // 100px余裕を持たせる
// //      fadeInImages();
// //      $(window).off('scroll'); // 1回実行したら監視を解除
// //    }
// //  });
// // });


// jQuery(document).ready(function($) {
//  const fadeInImages = () => {
//    $('.about__bg-image img').each(function(index) {
//      $(this)
//        .delay(index * 800) // 800ミリ秒ずつ遅延
//        .animate({ opacity: 1 }, 1000); // 1秒かけてフェードイン
//    });
//  };

//  const checkVisibility = () => {
//    $('.about').each(function() {
//      let elementTop = $(this).offset().top;
//      let elementBottom = elementTop + $(this).outerHeight();
//      let viewportTop = $(window).scrollTop();
//      let viewportBottom = viewportTop + $(window).height();

//      // 画面内に入ったらアニメーションを実行
//      if (elementBottom > viewportTop && elementTop < viewportBottom) {
//        fadeInImages();
//      }
//    });
//  };

//  // 初回チェック
//  checkVisibility();

//  // スクロール時にチェック
//  $(window).on('scroll', function() {
//    checkVisibility();
//  });
// });



// jQuery(document).ready(function($) {
//  // フェードイン関数
//  const fadeInImages = () => {
//    $('.about__bg-image img').each(function(index) {
//      $(this)
//        .delay(index * 800) // 800ミリ秒ずつ遅延
//        .animate({ opacity: 1 }, 1000); // 1秒かけてフェードイン
//    });
//  };

//  // スクロールイベントで発火
//  $(window).on('scroll', function() {
//    let aboutTop = $('.about').offset().top; // .about の位置
//    let windowHeight = $(window).height(); // 画面の高さ
//    let scrollPos = $(window).scrollTop(); // 現在のスクロール位置

//    if (scrollPos + windowHeight > aboutTop) {
//      fadeInImages(); // 画面内に入ったらフェードイン実行
//      $(window).off('scroll'); // 1回だけ実行
//    }
//  });

//  // 初期状態を透明にする
//  $('.about__bg-image img').css('opacity', 0);
// });


jQuery(document).ready(function ($) {
 // 初期状態を透明に
 $('.about__bg-image img').css('opacity', 0);

 const fadeInImages = () => {
   $('.about__bg-image img').each(function (index) {
     $(this)
       .delay(index * 800) // 800ミリ秒ずつ遅延
       .animate({ opacity: 1 }, 1000); // 1秒かけてフェードイン
   });
 };

 const checkVisibility = () => {
   const about = $('.about');
   const windowHeight = $(window).height();
   const scrollTop = $(window).scrollTop();
   const aboutTop = about.offset().top;
   const aboutBottom = aboutTop + about.outerHeight();

   if (aboutTop < scrollTop + windowHeight && aboutBottom > scrollTop) {
     fadeInImages();
   } else {
     $('.about__bg-image img').stop().css('opacity', 0); // すぐ非表示
   }
 };

 $(window).on('scroll resize', checkVisibility);
 checkVisibility(); // 初回チェック
});
