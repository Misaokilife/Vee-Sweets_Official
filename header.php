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
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()) . '/style.css'; ?>" media="all" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
        <?php wp_head(); ?>
    </head>

    <body>
    <?php wp_body_open(); ?>
        <header> 
            <!-- ハンバーガーメニュー -->
            <div class="hamburger-menu">
                <div class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                        <li><a href="<?php echo esc_url(home_url('/company-data')); ?>">Company Data</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- 特定のページにスタイルを追加 -->
            <div class="site-icon <?php if (is_page('company-data')) { echo 'co-data-icon'; } ?>">
                <a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/site_logo.png" alt="Vee-Sweets Site icon"></a>
            </div>
        </header>