<?php
/**
 * Template Name: Company Data
 */
    get_header(); ?>
        
        <main>
            <section class="company-data">
                <h3>Company Data</h3>
            </section>

            <hr class="custom-divider company-divider"/>

            <section class="company-sections">
                <!-- 企業名 -->
                <div class="company-section">
                    <div class="category">
                        <div class="category-title">企業名</div>
                        <div class="category-content">株式会社TORIKAI CAFE</div>
                    </div>
                </div>
                <!-- 所在地 -->
                <div class="company-section">
                    <div class="category">
                        <div class="category-title">所在地</div>
                        <div class="category-content category-locations">
                            <!-- 本社・ファクトリー -->
                            <div class="location">
                                    <p class="location-title">【本社・ファクトリー】</p>
                                    <div class="location-info">
                                        <p>〒814-0022</p>
                                        <p>福岡県福岡市早良区原5-14-8 リュージュ原101</p>
                                        <p>TEL:092-707-6818</p>
                                    </div>
                                </div>
                            <!-- スイーツ取扱店 -->
                            <div class="location location-2">
                                <p class="location-title location-title2">【スイーツ取扱店 ソイストーリーズ薬院】</p>
                                <div class="location-info">
                                    <p>〒810-0022</p>
                                    <p>福岡県福岡市中央区薬院2-2-24-102</p>
                                    <p>TEL:092-231-0677</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 商品 -->
                <div class="company-section">
                    <div class="category">
                        <div class="category-title">商品</div>
                        <div class="category-content">スイーツ全般</div>
                    </div>
                </div>

            </section>               
        </main>

        <?php get_footer(); ?>  
    </body>
</html>