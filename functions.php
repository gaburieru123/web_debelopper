<?php
// テーマサポートの追加
function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5');
    
    // メニューの登録
    register_nav_menus([
        'primary' => 'メインメニュー',
        'footer' => 'フッターメニュー'
    ]);
}
add_action('after_setup_theme', 'theme_setup');

// ウィジェットの登録
function widget_init() {
    register_sidebar([
        'name' => 'サイドバー',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ]);
}
add_action('widgets_init', 'widget_init');
?>

<?php
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>