
  $('.activity__slide').each(function() {
   $(this).slick({
     autoplay: true,
     autoplaySpeed: 0,
     speed: 2000,
     cssEase: 'linear',
     swipe: false,
     arrows: false,
     pauseOnFocus: false,
     pauseOnHover: false,
     centerMode: true,
     rtl: true,
     variableWidth: false,
     slidesToShow: 3,
     // responsive: [{
     //   breakpoint: 767,
     //   settings: {
     //     slidesToShow: 1,
     //     centerMode: true
     //   }
     // }]
     
   });
 });

 // 変更箇所: タブ切り替え機能を修正
 $('.activity__tab-button').on('click', function() {
   const tabId = $(this).data('tab');
   console.log('Clicked tab:', tabId); // デバッグ用

   // タブボタンのアクティブ状態を切り替え
   $('.activity__tab-button').removeClass('activity__tab-button--active');
   $(this).addClass('activity__tab-button--active');

   // テキストの表示切り替え
   $('.activity__text').removeClass('activity__text--active');
   $(`.activity__text--${tabId}`).addClass('activity__text--active');

   // スライダーの表示切り替え
   $('.activity__slider').removeClass('activity__slider--active');
   $(`.activity__slider--${tabId}`).addClass('activity__slider--active');
   
   // スライダーの再初期化
   $(`.activity__slider--${tabId}`).slick('setPosition');
 });
// });









