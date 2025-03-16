<?php
get_header();
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div class="meta">
                投稿日: <?php the_date(); ?>
                カテゴリー: <?php the_category(', '); ?>
            </div>
            <?php the_content(); ?>
            <?php comments_template(); ?>
        </article>
        <?php
    endwhile;
endif;
get_footer();
?>