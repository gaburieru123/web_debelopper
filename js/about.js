jQuery(document).ready(function($) {
 // 背景画像を順番にフェードイン
 const fadeInImages = () => {
   $('.about__bg-image img').each(function(index) {
     $(this)
       .css('opacity', 0) // 初期状態を透明に
       .delay(index * 800) // 800ミリ秒ずつ遅延
       .animate({ opacity: 1 }, 1000); // 1秒かけてフェードイン
   });
 };

 // ページ読み込み後に実行
 fadeInImages();
});