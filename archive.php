<?php
get_header();
?>
<h1>
    <?php
    if (is_category()) {
        single_cat_title('カテゴリー: ');
    } elseif (is_tag()) {
        single_tag_title('タグ: ');
    } elseif (is_author()) {
        the_author();
    } elseif (is_date()) {
        echo get_the_date('Y年n月');
    }
    ?>
</h1>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'archive');
    endwhile;
    the_posts_pagination();
endif;
get_footer();
?>