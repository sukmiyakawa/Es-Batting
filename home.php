<?php get_header(); ?>
        <main>
            <div class="archive">
                <div class="topTopic">
                    <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                    <h2>お知らせ</h2>
                    <hr>
                    <p class="topicEn">Information</p>
                </div>
                <div class="archive_contents">
                    <?php if(have_posts()): ?><ul class="news-list">
                        <?php
                        while(have_posts()): the_post();
                            get_template_part('parts','archiveposts');
                        endwhile;
                        ?>
                    </ul><?php else: ?>
                        <p>記事はありません</p>
                    <?php endif; ?>

                    <?php wp_pagenavi(); ?>
                </div>                       
            </div>
        </main>
<?php get_footer(); ?>        