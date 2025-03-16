<h1>archive-newsファイルです。farmです。これはローカルテーマ・お知らせ一覧ページです</h1>

<?php get_header(); ?>

<div class="news-block">
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
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile;
    wp_reset_postdata();
endif;
?>








<!--  -->
 </div>

 <?php get_footer(); ?>