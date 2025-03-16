<!-- <footer>


    <div class="footer-widgets">
        </?php dynamic_sidebar('footer-sidebar'); ?>
    </div>
    <div class="copyright">
        &copy; </?php echo date('Y'); ?> </?php bloginfo('name'); ?>
    </div>
</footer> -->

<footer>
 <div class="footer-pc">
  <div class="fotter">
   <div class="footer__container">
    <div class="footer__inner">
     <div class="footer__logo">
      <a href="http://farmpractice.local/" class="logo">
       <img src="<?php echo get_template_directory_uri(); ?>/images/img/logo.svg" alt="自然農園のロゴ">
      </a>
     </div>
     <div class="footer__address">
      <p>〒123-4567</p>
      <p>千葉県◯◯市××町1丁目-23-45</p>
     </div>

    </div>

    <div class="footer__content">
     <div class="footer__menu__items-pc js-items-pc" id="menu__items-pc" aria-hidden="true">
      <a href="/" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="1"><span>ホーム</span></div>
      </a>
      <a href="https://www.google.com" target="_blank" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="2"><span>私たちについて</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="3"><span>活動紹介</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="4"><span>よくあるご質問</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="5"><span>お知らせ</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="6"><span>アクセス</span></div>
      </a>
     </div>
    </div>
   </div>
   <div class="footer__bottom">
    <div class="footer__telfax">
     <p>TEL:123-4567-8910</p>
     <p>FAX:12-345-6789</p>
    </div>
    <div class="social-icons">
     <a href="https://twitter.com" class="social-icon" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/x-icon.svg" alt="X（Twitter）">
     </a>
     <a href="https://www.instagram.com" class="social-icon" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/insta-icon.svg" alt="Instagram">
     </a>
     <a href="https://www.youtube.com" class="social-icon" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/youtube-icon.svg" alt="YouTube">
     </a>
    </div>
   </div>



   <div class="footer__copyright">
    <p>&copy; shizen-no-megumi-nouen Inc .2023</p>
   </div>
  </div>
 </div>

 <!-- pc/sp区分け -->

 <div class="footer-sp">
  <div class="fotter--sp">
   <div class="footer__container--sp">
    <div class="footer__inner--sp">
     <div class="footer__logo--sp">
      <a href="http://farmpractice.local/" class="logo--sp">
       <img src="<?php echo get_template_directory_uri(); ?>/images/img/logo.svg" alt="自然農園のロゴ">
      </a>
     </div>
     <div class="footer__address--sp">
      <p>〒123-4567</p>
      <p>千葉県◯◯市××町1丁目-23-45</p>
     </div>
     <div class="footer__telfax--sp">
      <p>TEL:123-4567-8910</p>
      <p>FAX:12-345-6789</p>
     </div>
    </div>

    <div class="footer__content--sp">
     <div class="footer__menu__items--sp js-items--sp" id="menu__items--sp" aria-hidden="true">
      <a href="/" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="1"><span>ホーム</span></div>
      </a>
      <a href="https://www.google.com" target="_blank" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="2"><span>私たちについて</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="3"><span>活動紹介</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="4"><span>よくあるご質問</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="5"><span>アクセス</span></div>
      </a>
      <a href="https://www.google.com" class="footer__menu__item-link--sp">
       <div class="footer__menu__item--sp" tabindex="6"><span>お知らせ</span></div>
      </a>
     </div>
    </div>
   </div>
   <div class="footer__bottom--sp">

    <div class="social-icons--sp">
     <a href="https://twitter.com" class="social-icon--sp" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/x-icon.svg" alt="X（Twitter）">
     </a>
     <a href="https://www.instagram.com" class="social-icon--sp" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/insta-icon.svg" alt="Instagram">
     </a>
     <a href="https://www.youtube.com" class="social-icon--sp" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img/youtube-icon.svg" alt="YouTube">
     </a>
    </div>
   </div>



   <div class="footer__copyright--sp">
    <p>&copy; shizen-no-megumi-nouen Inc .2023</p>
   </div>
  </div>
 </div>
</footer>

<?php wp_footer(); ?>
<!-- <h1>フッター表示確認テキストです。</h1> -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
 crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script src="</?php echo get_theme_file_uri('js/archive-news.js'); ?>"></script> -->
<script src="<?php echo get_theme_file_uri('js/hamburger.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/front-page.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/about.js'); ?>"></script>
</body>

</html>