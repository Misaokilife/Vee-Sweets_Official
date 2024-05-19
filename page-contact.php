<?php
/**
 * Template Name: Contact Page
 */
    get_header(); ?>
        
        <main>
            <div class="form-container">
                <h1>お問い合わせ</h1>
                <?php echo do_shortcode('[wpforms id="14"]'); ?>
            </div>
        </main>

        <?php get_footer(); ?>  
    </body>
</html>