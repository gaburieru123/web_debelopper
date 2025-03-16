<div class="fv" id="fv-js">
  <div class="fv__content">
   <img src="<?php echo get_template_directory_uri(); ?>/images/img/logo-2.svg" alt="ファースビューのロゴ" class="fv__logo">
   <p class="fv-text">自然の恵みを感じ、豊かな未来を。</p>
  </div>
  <div class="fv__scrolldown" id="type01">
   <a href="#">scroll</a>
  </div>
  <div class="fv__news" id="fv__news-js">
   <div class="fv__news__content">
    <h2 class="fv__news__content-ttl">news</h2>
    <?php
    $args = array(
     'post_type'      => 'news',   // カスタム投稿タイプ 'news'
     'posts_per_page' => 1,        // 最新記事1件のみ取得
     'orderby'        => 'date',   // 日付順
     'order'          => 'DESC',   // 新しい順に取得
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
     while ($query->have_posts()) : $query->the_post(); ?>
      <p class="fv__news__date"><?php echo get_the_date('Y.m.d'); ?></p> <!-- 日付を取得 -->
   </div>
    <h2 class="fv__news__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!-- タイトルを取得 -->
    <?php endwhile; wp_reset_postdata(); endif;?>
  </div>
 </div>