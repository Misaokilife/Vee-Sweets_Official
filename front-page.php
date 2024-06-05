<?php get_header(); ?>
    <main>
        <section class="main-visual">
            <ul class="slider">
                <li class="slider-item">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/main-visual-1.png" alt="Main Visual carousel 1">
                </li>
                <li class="slider-item slider-item01">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/main-visual-2.png" alt="Main Visual carousel 2">
                </li>
                <li class="slider-item slider-item02">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/main-visual-3.png" alt="Main Visual carousel 3">
                </li>
            </ul>
        </section>

        <section class="article">

            <div class="content-wrapper">
                <h2>グルテンフリー、<br class="responsive-break">プラントベースの<br class="responsive-break">スイーツで、 <br>
                    世界を美味しい笑顔でつないでいきます。</h2>

                <hr class="custom-divider"/>

                <p>笑顔は、人々をつなぎます。<br class="responsive-break">私たちは、世界中の笑顔を美味しいスイーツでつなぎたいと考えています。 <br>
                    グルテンフリーでありながら、プラントベースの素材で作られた私たちのスイーツは、<br class="no-linebreak">
                    食物アレルギーや宗教上の制約がある方々にも安心して楽しんでいただけます。<br>
                    <br>
                    私たちのスイーツは、ただ口に運ぶだけでなく、心を満たす贈り物です。 <br>
                    厳選された素材と熟練の技術が生み出す美味しさは、あなたの日常に幸せな光を差し込みます。 <br>
                    体を気づかう方、ヴィーガンやベジタリアンの方、あらゆる方にとって、 <br class="no-linebreak">
                    つながる笑顔が広がる一皿をお届けします。<br>
                    <br>
                    一つ一つのスイーツには、世界中の笑顔が詰まっています。 <br>
                    ぜひ、私たちのスイーツで、つながる笑顔の美味しさをお楽しみください。
                </p>

                <?php
                    // 固定ページのIDを設定します
                    $page_id = 12; // 固定ページのIDを設定
                    $page_url = get_permalink($page_id);
                ?>

                <div class="button-container">
                    <a href="<?php echo esc_url($page_url); ?>" class="narrow-btn">Company Data</a>
                </div>
            </div>

            <div class="image-container">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icecream_1.png" alt="soy base Ice cream" class="responsive-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icecream_2.png" alt="soy base Ice cream" class="responsive-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icecream_3.png" alt="soy base Ice cream" class="responsive-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icecream_4.png" alt="soy base Ice cream" class="responsive-image">
            </div>
        </section>

        <section class="article">
            <div class="content-wrapper">
                <h2 class="caption-title2">Vee-Sweets が提供する安心で安全な素材。</h2>

                <hr class="custom-divider" />

                <p class="article-text2">ヴィーガンホイップ ~添加物不使用の新たなホイップ体験~ <br>
                    当社独自の製法で、添加物を使わずに食感や保形性を向上。
                    従来の乳ホイップに見劣りしない豊かな味わいをお楽しみください。<br>
                    <br>
                    フルーツ&ベジピューレ ~自然の美味しさをそのままに~ <br>
                    私たちは、国内外から厳選した良質な素材だけを使用し、無添加糖のフレッシュピューレを提供しています。自然な甘さと豊かな風味をそのままに、アイスクリームなどのデザートに活用できます。<br>
                    <br>
                    安心安全、高品質の国産素材 ~自然の美味しさをそのままに~ <br>
                    私たちの商品は、高品質な国産素材を厳選し、安心してお召し上がりいただけます。小麦粉、大豆、牛乳など、主要な原材料はすべて国内産です。安全と安心の恵みをお楽しみください。
                </p>
            </div>

            <div class="image-container">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/japanese_ingredients-1.png" alt="Japanese domestic ingredients" class="responsive-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/japanese_ingredients-2.png" alt="Japanese domestic ingredients" class="responsive-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/japanese_ingredients-3.png" alt="Japanese domestic ingredients" class="responsive-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/japanese_ingredients-4.png" alt="Japanese domestic ingredients" class="responsive-image">
            </div>

            <hr class="custom-divider divider-margin" />
        </section>

        <section class="contact">
            <p class="contact-text">商品やサービスに関するお問合せ、ご注文に関してのお問合せはこちら</p>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="contact-btn">お問合せ</a>
            <a href="mailto:info@vee-sweets.com" class="contact-mail">info@vee-sweets.com</a>
            <p class="contact-person">担当：島原</p>
        </section>

    </main>
<?php get_footer(); ?>
