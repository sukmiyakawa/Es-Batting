<!-- Template Name: 願い -->
<?php get_header(); ?>
<main>
    <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
            <article>
                <section id="hope" class="hope">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2><?php the_title(); ?></h2>
                        <hr>
                        <p class="topicEn">Hope</p>
                    </div>
                    <h3>坂戸から出てこい！<br class="sp">未来のスター選手たち</h3>
                    <div class="hope_contents">
                        <div class="hope_fig">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/hope/boy.png" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/hope/professional.png" alt="">
                        </div>
                        <p class="hope_contents_txt">
                            <span class="gold_hightlight gold_hightlight--first">野球が大好きな気持ちを、そのまま続けてほしい</span>――そんな思いを胸に誕生したのが、ここEs-Battingです。代表の私も幼い頃から巨人戦に夢中になり、小・中・高校と一心不乱にボールを追いかけてきました。大学では新たな世界を知りましたが、野球への情熱は消えず、地域の子どもたちを応援したいとずっと思い続けてきました。<br>
                            <br>
                            「近くで硬式野球ができる場所がなくなった」と困る仲間たちを見て、一念発起。探し続けた末、自宅敷地に全3打席の小さなバッティングセンターを実現しました。<br>
                            <br>
                            <span class="limarker limarker_1st"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/li_marker.svg" alt=""></span>&emsp;挨拶は“絶対”<br>
                            <span class="limarker limarker_2nd"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/li_marker.svg" alt=""></span>&emsp;明るく<br>
                            <span class="limarker limarker_3rd"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/li_marker.svg" alt=""></span>&emsp;楽しく<br>
                            <span class="limarker limarker_4th"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/li_marker.svg" alt=""></span>&emsp;安全に<br>
                            <br>
                            これが私たちのモットーです。<span class="gold_hightlight gold_hightlight--second">未経験者大歓迎！</span>動きやすい服装でぜひお越しください。思い切りバットを振って、<span class="gold_hightlight gold_hightlight--third">好きなことを続ける楽しさ</span>を味わってもらえたらうれしいです。坂戸から「伝説」をつくりあげましょう！
                        </p>
                    </div>
                </section>
                <div class="lead">
                    <div class="lead_contents">
                        <p class="lead_txt">施設<br class="sp">についてもっと知る</p>
                        <a href="/features">
                            <div class="lead_btn">
                                <p class="lead_btn_txt">特徴</p>
                                <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>