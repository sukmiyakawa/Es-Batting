<li>
    <a href="<?php the_permalink(); ?>">
        <div class="news-list_contents">
            <time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time(get_option('date_format')); ?></time>
            <div class="news-list_txt">
                <p class="news-list_title"><?php the_title(); ?></p>
                <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
            </div>
        </div>
    </a>
</li>