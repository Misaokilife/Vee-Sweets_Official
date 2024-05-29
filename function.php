<?php
// 特定のページにクラスを追加
function add_custom_body_class($classes) {
    if (is_page('company-data')) { // 固定ページのスラッグが'company-data'の場合
        $classes[] = 'company-data-page';
    }
    return $classes;
}
add_filter('body_class', 'add_custom_body_class');

// 特定のページにスタイルを追加
function my_custom_styles() {
    if (is_page('company-data')) { // 固定ページのスラッグが'company-data'の場合
        echo '<style>
            .co-data-icon {
                margin-bottom: 119px !important;
            }
        </style>';
    }
}
add_action('wp_head', 'my_custom_styles');

// カスタムJavaScriptファイルの読み込み
function my_theme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/6-1-2.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

?>
