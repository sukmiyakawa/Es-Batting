<!-- Template Name: プライバシーポリシー -->
<?php get_header(); ?>
        <main>
            <?php if (have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>

            <div class="privacyPolicy">
                <div class="topTopic">
                    <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                    <h2><?php the_title(); ?></h2>
                    <hr>
                    <p class="topicEn">Privacy-Policy</p>
                </div>
                <?php the_content(); ?>
            </div>
            <div class="lead">
                <div class="lead_contents">
                    <p class="lead_txt">TOP<br class="sp">へ戻る</p>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <div class="lead_btn">
                            <p class="lead_btn_txt">TOP</p>
                            <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                        </div>
                    </a>
                </div>
            </div>
             <?php endwhile; ?>
        <?php endif; ?>
        </main>
        <?php get_footer(); ?>