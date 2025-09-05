<?php get_header(); ?>

        <main>
            <article>
                <section class="mainVisual">
                    <div class="mainVisual_contents">
                        <div class="mainVisual_vegas">
                            <?php
                                echo do_shortcode('[smartslider3 slider="2"]');
                            ?>
                            <div class="vegas">
                                <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                                <p class="vegas_txt">が今始まる</p>
                            </div>
                        </div>
                        <div class="mainVisual_others">
                            <h2 class="mainVisual_txt">
                                埼玉県で唯一<br>本物の硬球が打てる<br>バッティングセンター！
                            </h2>
                            <div class="mainVisual_btn">
                                <a href="/features" class="mainVisual_conductorBtn mainVisual_conductorBtn--features">
                                    <p class="mainVisual_conductorBtn_txt">施設について<br class="sp tab">もっと知る</p>
                                    <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow.svg" alt="">
                                </a>
                                <a href="/facility#howto" class="mainVisual_conductorBtn mainVisual_conductorBtn--howto">
                                    <p class="mainVisual_conductorBtn_txt">初めて<br class="sp tab">来られる方へ</p>
                                    <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow.svg" alt="">
                                </a>
                                <a href="#reservation" class="mainVisual_conductorBtn mainVisual_conductorBtn--reservation">
                                    <p class="mainVisual_conductorBtn_txt">予約状況</p>
                                    <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow.svg" alt="">
                                </a>
                                <a href="#information" class="mainVisual_conductorBtn mainVisual_conductorBtn--information">
                                    <p class="mainVisual_conductorBtn_txt">お知らせ</p>
                                    <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow.svg" alt="">
                                </a>
                                <a href="https://line.me/R/ti/p/@252zbldw" class="LINE_btn_link">
                                    <div class="LINEbtn">
                                        <img class="icon_LINE" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/LINE.svg" alt="">
                                        <p class="LINE_txt">お問い合わせ<br>予約をする</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mainSection threePillars">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2>の三本柱</h2>
                        <hr>
                        <p class="topicEn">ThreePillars</p>
                    </div>
                    <div class="pillarsFlame">
                        <div class="diamond diamond--top">
                            <h3 class="pillars_topic">データ解析</h3>
                            <p class="pillars_txt">BLASTで<br class="sp">自己分析！</p>
                        </div>
                        <div class="diamond diamond--left">
                            <h3 class="pillars_topic">革ボール</h3>
                            <p class="pillars_txt">全国的にも珍しい<br><span class="gold">革ボールが打てる！</span></p>
                        </div>
                        <div class="diamond diamond--right">
                            <h3 class="pillars_topic">予約サービス</h3>
                            <p class="pillars_txt">好きな時間に<br>サクッと打てる！</p>
                        </div>
                    </div>
                </section>
                <section id="reservation" class="mainSection reservation">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2>本日の予約状況</h2>
                        <hr>
                        <p class="topicEn">Reservation</p>
                    </div>
                    <?php
                        // 左打席のステータスを取得
                        $left_hitter_status = get_field('left_hitter');

                        // 両打席のステータスを取得
                        $switch_hitter_status = get_field('switch_hitter');

                        // 右打席のステータスを取得
                        $right_hitter_status = get_field('right_hitter');

                        // ティーエリアのステータスを取得
                        $tee_status = get_field('tee');

                        // 各ステータスに対応する記号、メッセージ、色を定義
                        $statuses = [
                            'available' => [
                                'symbol' => '〇',
                                'message' => '空き<br>あり',
                                'color' => '#0BE4FC',
                            ],
                            'limited' => [
                                'symbol' => '△',
                                'message' => '残り<br>わずか',
                                'color' => 'var(--accentcolor)',
                            ],
                            'unavailable' => [
                                'symbol' => '✕',
                                'message' => '空き<br>なし',
                                'color' => '#F21818',
                            ],
                        ];
                    ?>

                    <div class="reservation_contents">
                        <div class="reservation_item reservation_left" style="border-bottom: 5px solid <?php echo $statuses[$left_hitter_status]['color']; ?>;">
                            <img class="reservation_info" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/reservation_top/leftHitter.png" alt="">
                            <p class="reservation_info">左打席</p>
                            <p class="reservation_info"><?php echo $statuses[$left_hitter_status]['symbol']; ?></p>
                            <p class="reservation_info"><?php echo $statuses[$left_hitter_status]['message']; ?></p>
                        </div>

                        <div class="reservation_item reservation_switch" style="border-bottom: 5px solid <?php echo $statuses[$switch_hitter_status]['color']; ?>;">
                            <img class="reservation_info" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/reservation_top/switchHitter.svg" alt="">
                            <p class="reservation_info">両打席</p>
                            <p class="reservation_info"><?php echo $statuses[$switch_hitter_status]['symbol']; ?></p>
                            <p class="reservation_info"><?php echo $statuses[$switch_hitter_status]['message']; ?></p>
                        </div>

                        <div class="reservation_item reservation_right" style="border-bottom: 5px solid <?php echo $statuses[$right_hitter_status]['color']; ?>;">
                            <img class="reservation_info" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/reservation_top/rightHitter.png" alt="">
                            <p class="reservation_info">右打席</p>
                            <p class="reservation_info"><?php echo $statuses[$right_hitter_status]['symbol']; ?></p>
                            <p class="reservation_info"><?php echo $statuses[$right_hitter_status]['message']; ?></p>
                        </div>

                        <div class="reservation_item reservation_tee" style="border-bottom: 5px solid <?php echo $statuses[$tee_status]['color']; ?>;">
                            <img class="reservation_info" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/reservation_top/tee.png" alt="">
                            <p class="reservation_info">ティー<br>エリア</p>
                            <p class="reservation_info"><?php echo $statuses[$tee_status]['symbol']; ?></p>
                            <p class="reservation_info"><?php echo $statuses[$tee_status]['message']; ?></p>
                        </div>
                    </div>

                    <p class="LINEcheck">詳しくは<br class="sp">LINEをcheck！</p>
                    <a href="https://line.me/R/ti/p/@252zbldw" class="LINE_btn_link">
                        <div class="LINEbtn">
                            <img class="icon_LINE" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/LINE.svg" alt="">
                            <p class="LINE_txt">お問い合わせ<br>予約をする</p>
                        </div>
                    </a>
                </section>
                <section id="information" class="mainSection information">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2>お知らせ</h2>
                        <hr>
                        <p class="topicEn">Information</p>
                    </div>
                    <div class="information_contents">
                        <img class="information_contents_fig" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/information/information.png" alt="">
                        <div class="information_topic">
                            <?php
                                $args = array(
                                    'post_type'=>'post',
                                    'posts_per_page'=>3,
                                    'post_status'=>'publish',
                                );
                                $the_query= new WP_Query($args);
                            ?>
                            <?php if($the_query->have_posts()):?>
                                <?php while($the_query->have_posts()): $the_query->the_post();?>
                                <ul class="news-list">
                                    <?php get_template_part('parts','archiveposts'); ?>
                                </ul>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>記事はありません</p>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
                <section class="mainSection faq">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2>よくある質問</h2>
                        <hr>
                        <p class="topicEn">Frequently Asked Question</p>
                    </div>
                    <div class="faq_contents">
                        <img class="faq_contents_fig" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/faq.png" alt="">
                        <div class="faq_topic">
                            <div class="faq_item">
                                <div class="question">
                                    <div class="question_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_Q.png" alt="">
                                        <p class="faq_txt">予約なしでも<br class="sp tab">利用できますか？</p>
                                    </div>
                                    <img class="faq_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/faq_arrow.svg" alt="">
                                </div>
                                <div class="answer">
                                    <div class="answer_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_A.png" alt="">
                                        <p class="faq_txt">打席ブースは、予約不要でご利用いただけます。一方、ティーバッティングエリアは事前予約が必要です。ご希望の日時をご予約の上ご利用ください。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_item">
                                <div class="question">
                                    <div class="question_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_Q.png" alt="">
                                        <p class="faq_txt">打席の球数は<br class="sp tab">何球打てますか？</p>
                                    </div>
                                    <img class="faq_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/faq_arrow.svg" alt="">
                                </div>
                                <div class="answer">
                                    <div class="answer_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_A.png" alt="">
                                        <p class="faq_txt">軟式球・硬式球ともに1Playあたり22球お楽しみいただけます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_item">
                                <div class="question">
                                    <div class="question_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_Q.png" alt="">
                                        <p class="faq_txt">本当に硬球が<br class="tab"> 打てますか？</p>
                                    </div>
                                    <img class="faq_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/faq_arrow.svg" alt="">
                                </div>
                                <div class="answer">
                                    <div class="answer_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_A.png" alt="">
                                        <p class="faq_txt">他の施設でよく使われる準硬式球ではなく、プロ仕様の革ボールを打てるため、試合に近い打感や球威を体感できます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_item">
                                <div class="question">
                                    <div class="question_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_Q.png" alt="">
                                        <p class="faq_txt">お支払いは<br class="sp tab"> 現金のみですか？</p>
                                    </div>
                                    <img class="faq_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/faq_arrow.svg" alt="">
                                </div>
                                <div class="answer">
                                    <div class="answer_contents">
                                        <img class="faq_icon" src="<?php echo get_stylesheet_directory_uri(); ?>/image/top/faq/icon_A.png" alt="">
                                        <p class="faq_txt">お支払いは現金のみならず、各種クレジットカード、電子マネー、QRコードがご利用いただけます。なお、予約の際はクレジットカードのみのお支払いとなります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
       
        </main> 
<?php get_footer(); ?>        