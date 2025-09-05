<?php get_header(); ?>
<main>
    <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="single">
        <div class="topTopic">
            <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
            <h2>お知らせ</h2>
            <hr>
            <p class="topicEn">Information</p>
        </div>
        <div class="single_contents">
            <div class="main-content post">
                <div class="post-header">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>
                </div>
                <h3 class="post-title"><?php the_title(); ?></h3>
                <div class="post-wrapper">
                    <?php if (has_post_thumbnail()) : ?><figure class="eyecatch"><?php the_post_thumbnail('full'); ?></figure><?php endif; ?>
                    <?php the_content(); ?>
                </div>

                <ul class="page-nav">
                    <li>
                        <?php 
                            $prev_post = get_previous_post();
                            if (!empty($prev_post)): ?>
                                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
                                    <img class="page-nav_arrow page-nav_arrow-previous" src="<?php echo get_template_directory_uri(); ?>/image/common/arrow-black.svg" alt="前の記事へ">
                                </a>
                        <?php endif; ?>
                        <?php previous_post_link('%link','前の記事へ'); ?>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>news/" class="to-archive">お知らせトップ</a></li>
                    <li>
                        <?php next_post_link('%link','次の記事へ'); ?>
                        <?php 
                            $next_post = get_next_post();
                            if (!empty($next_post)): ?>
                                <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
                                    <img class="page-nav_arrow" src="<?php echo get_template_directory_uri(); ?>/image/common/arrow-black.svg" alt="次の記事へ">
                                </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>        