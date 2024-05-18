<!DOCTYPE html>
<html lang="ja">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>" media="all" type="text/css" />
    <?php wp_head(); ?>
    </head>

    <body>
    <?php wp_body_open(); ?>

        <header> 
            // 特定のページにスタイルを追加
            <div class="site-icon <?php if (is_page('company-data')) { echo 'co-data-icon'; } ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/site_logo.png" alt="Vee-Sweets Site icon">
            </div>
        </header>