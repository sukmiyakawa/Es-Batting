<!-- Template Name: 特徴 -->
<?php get_header(); ?>
<main>
    <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
            <article>
                <section id="features" class="features">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2><?php the_title(); ?></h2>
                        <hr>
                        <p class="topicEn">Features</p>
                    </div>
                    <div class="features_wrapper">
                        <div class="features_contents">
                            <div id="ball" class="features_item">
                                <h3>硬球が打てる</h3>
                                <div class="figandtxt">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/features/hardBall_features.png" alt="" class="features_img">
                                    <p class="features_txt">当センターでは革製の硬式ボールを使用し、本格的なバッティングを気軽に楽しめます。練習感覚でも試合さながらの迫力を味わえるのが魅力です。ご利用前に以下をご確認ください。<br>
                                                            <span class="features_txt_marker"></span>&emsp;&ensp;毎回安全のための同意書へのご署名をお願いします<br>
                                                            <span class="features_txt_marker"></span>&emsp;&ensp;硬式球でプレーする場合はヘルメットとバッティンググローブの装着をお願いします
                                    </p>
                                </div>
                            </div>
                            <div id="BLAST" class="features_item">
                                <h3>バットスイング<br class="sp">解析システム<br class="sp">ーBLAST</h3>
                                <div class="figandtxt">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/features/BLAST.png" alt="" class="features_img">
                                    <p class="features_txt">MIZUNO社のBLASTを導入しており、バッティングに関する13項目を計測・数値化され、すべてのスイング3D軌道結果を確認できます。<br>
                                                            BLASTについての詳細は<span><a class="BLAST_mizuno" href="https://jpn.mizuno.com/baseball/products/BLAST#about">ミズノ公式オンラインサイト</a></span>をご覧ください。
                                    </p>
                                </div>
                            </div>
                            <div id="reservation" class="features_item">
                                <h3>予約サービス</h3>
                                <div class="figandtxt">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/features/reservation_features.png" alt="" class="features_img">
                                    <p class="features_txt">気軽にボールを打ちこめるユニークなバッティングセンターです。予約サービスがあるので、混雑を避けて自分だけの練習を楽しめます。初心者はもちろん、腕に自信がある方も存分にスイングしてください。快適な施設内でストレスなく振り込めるのが魅力です。思い切り振れる空間で、心地よい汗を流してください。ぜひ一度お試しを。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <nav class="subMenu">
                            <a href="#ball" ><div class="subNavi_item subNavi_item--ball">硬球が打てる</div></a>
                            <a href="#BLAST" ><div class="subNavi_item subNavi_item--BLAST">バットスイング<br>解析システム<br>ーBLAST</div></a>
                            <a href="#reservation" ><div class="subNavi_item subNavi_item--reservation">予約サービス</div></a>
                        </nav>
                    </div>
                </section>
                <div class="lead">
                    <div class="lead_contents">
                        <p class="lead_txt">ブース・料金<br class="sp">についてもっと知る</p>
                        <a href="/facility">
                            <div class="lead_btn">
                                <p class="lead_btn_txt">施設・料金案内</p>
                                <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>