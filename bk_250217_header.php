<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Local_test_Document</title>
 <meta name="description" content="お知らせ">
 <meta name="format-detection" content="telephone=no,address=no,email=no">
 <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

 <!-- 各順番に意味はあるのか。なければtitleタグは上記の位置でいい。 -->
 <title>ページタイトル</title>
 <meta name="description" content="ページ説明文">
 <link rel="canonical" href="https://test.local/"> <!-- 正規ページのURL -->
 <link rel="icon" href="./favicon.ico" sizes="any"> <!-- ファビコン -->
 <link rel="icon" href="./icon.svg" type="image/svg+xml"> <!-- モダンブラウザ用SVGアイコン -->
 <link rel="apple-touch-icon" href="./apple-touch-icon.png"> <!-- スマホホーム画面ショートカット用アイコン -->
 <link rel="manifest" href="./manifest.webmanifest"> <!-- Android用pngアイコンマニフェスト -->
 <meta property="og:title" content="SNS用タイトル">
 <meta property="og:description" content="SNS用ページ説明文">
 <meta property="og:url" content="SNS用URL">
 <meta property="og:image" content="SNS用サムネイル画像URL">
 <meta property="og:type" content="website or blog">
 <meta property="og:site_name" content="SNS用サイト名">
 <meta property="og:locale" content="ja_JP">
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:site" content="@twitter id">

 <!-- 構造かデータ -->
 <!-- reset.css -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
 <!-- <link href="css/reset.css" rel="stylesheet" /> -->
 <link href="<?php echo get_template_directory_uri(); ?>/css/header.css" rel="stylesheet" />
 <link href="<?php echo get_template_directory_uri(); ?>/css/footer.css" rel="stylesheet" />

 <!-- <?php if (is_post_type_archive('news_category')) : ?>
 <link href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css" rel="stylesheet" />
<?php endif; ?>
<?php if (is_singular('test_category	', 'localhost_c_test')) : ?>
 <link href="<?php echo get_template_directory_uri(); ?>/css/single-news.css" rel="stylesheet" />
<?php endif; ?> -->


 <link href="<?php echo get_template_directory_uri(); ?>/css/functions.css" rel="stylesheet" />

 <!-- page.css 問い合わせフォームの時に適用させたい。のでif使っている。if外すとarchive-news.phpに効いてしまう！ -->
 <?php if (is_page('inquiry')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/page.css" rel="stylesheet" />
 <?php endif; ?>

 <?php if (is_page('company')): ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/page-company.css" rel="stylesheet" />
 <?php endif; ?>

 <?php if (is_post_type_archive('news')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css" rel="stylesheet" />
 <?php endif; ?>
 <?php if (is_singular('news')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/single-news.css" rel="stylesheet" />
 <?php endif; ?>
 <link href="<?php echo get_template_directory_uri(); ?>/css/index.css" rel="stylesheet" />

 <!-- <link rel="stylesheet" href="</?php echo get_template_directory_uri(); ?>/css/searchform.css" type="text/css" /> -->


 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">

 <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet"> -->


 <?php wp_head(); ?>

 <!-- 
    <meta charset="</?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </?php wp_head(); ?>
 -->
</head>
<!-- <body </?php body_class(); ?>> -->

<body>
 <header>
  <div class="header--pc">
   <div class="header__inner">
    <div class="header__logo">
     <a href="http://farmpractice.local/" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/logo.svg" alt="自然農園のロゴ">
     </a>
    </div>

    <nav class="menu__inner-pc js-menu-pc" id="nav-pc">
     <div class="menu-header-pc js-overlay-pc" id="js-fade-out-scroll-pc">
      <!-- <p class="accordion-header__trigger">電気</p> -->
      <div class="menu__items-pc js-items-pc" id="menu__items-pc" aria-hidden="true">
       <a href="https://www.google.com" target="_blank" class="menu__item-link">
        <div class="menu__item-pc" tabindex="1"><span>私たちについて</span></div>
       </a>
       <a href="https://www.google.com" class="menu__item-link">
        <div class="menu__item-pc" tabindex="2"><span>活動紹介</span></div>
       </a>
       <a href="https://www.google.com" class="menu__item-link">
        <div class="menu__item-pc" tabindex="3"><span>よくあるご質問</span></div>
       </a>
       <a href="https://www.google.com" class="menu__item-link">
        <div class="menu__item-pc" tabindex="4"><span>お知らせ</span></div>
       </a>
       <a href="https://www.google.com" class="menu__item-link">
        <div class="menu__item-pc" tabindex="5"><span>アクセス</span></div>
       </a>
       <a href="https://www.google.com" class="menu__item-link menu__item--q">
        <div class="menu__item-pc" tabindex="6"><span>お問い合わせ</span></div>
       </a>
      </div>
     </div>
   </div>
  </div>

  <div class="header--sp">
   <div class="header__inner--sp">
    <div class="header__logo-sp">
     <a href="http://farmpractice.local/" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/logo.svg" alt="自然農園のロゴ">
     </a>
    </div>
    <div class="menu-box">
     <div class="menu">
      <button type="button" class="hamburger js-button" id="js-button" aria-controls="nav" aria-expanded=false aria-label="メニューを開く">
       <span></span>
       <span></span>
      </button>
      <p>MENU</p>
     </div>

     <nav class="menu__inner js-menu" id="nav">
      <div class="menu-header js-overlay" id="js-fade-out-scroll">
       <div class="menu__items js-items" id="menu__items" aria-hidden="true">
        <a href="https://www.google.com" target="_blank" class="menu__item-link">
         <div class="menu__item-pc" tabindex="1"><span>トップ</span><span>TOP</span></div>
        </a>
        <a href="https://www.google.com" target="_blank" class="menu__item-link">
         <div class="menu__item-pc" tabindex="2"><span>私たちについて</span><span>ABOUT</span></div>
        </a>
        <a href="https://www.google.com" class="menu__item-link">
         <div class="menu__item-pc" tabindex="3"><span>よくあるご質問</span><span>FAQ</span></div>
        </a>
        <a href="https://www.google.com" class="menu__item-link">
         <div class="menu__item-pc" tabindex="4"><span>活動紹介</span><span>WORKS</span></div>
        </a>

        <a href="https://www.google.com" class="menu__item-link">
         <div class="menu__item-pc" tabindex="5"><span>お知らせ</span><span>NEWS</span></div>
        </a>
        <a href="https://www.google.com" class="menu__item-link">
         <div class="menu__item-pc" tabindex="6"><span>アクセス</span><span>ACCESS</span></div>
        </a>

       </div>
      </div>

      <div class="inquiry">
      <div class="header__tel--sp">
       <p>問い合わせ電話</p>
       <p>123-4567-8910</p>
      </div>
      <div class="header__fax--sp">
       <p>【受付時間】</p>
       <p>10:00 ~ 18:00(土日祝除く)</p>
      </div>
      <a href="https://www.google.com" class="menu__item-link menu__item--q">
       <div class="menu__item-pc" tabindex="6"><span>お問い合わせ</span></div>
      </a>
     </div>
     </nav>

    </div>
   </div>
  </div>



 </header>