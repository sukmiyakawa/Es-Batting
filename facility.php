<!-- Template Name: 施設・料金案内 -->
<?php get_header(); ?>
<main>
    <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
            <article>
                <section id="facility" class="facility">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2><?php the_title(); ?></h2>
                        <hr>
                        <p class="topicEn">Facility and Fee</p>
                    </div>
                    <div class="facility_contents">
                        <div class="div1">東武東上線</div>
                        <div class="div2"></div>
                        <div class="div3"></div>
                        <a href="#tee" class="div4">
                            <div class="facility_contents_item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/icon_tee.png" alt="" class="facility_icon">
                                <div class="facility_contents_txt">
                                    <p class="facility_contents_topic">ティー<br class="sp"> バッティング<br>エリア</p>
                                    <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="modal" id="tee">
                            <a href="#!" class="modal_wrapper"></a>
                            <div class="modal_contents">
                                <div class="modal_contents_top">
                                    <div class="modal_contents_topic">
                                        <h3>ティー<br class="sp tab">バッティング<br>エリア</h3>
                                        <a href="#!" class="close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/topic_closebtn.svg" alt="" class="topic_closebtn"></a>
                                    </div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/fig_tee.png" alt="" class="modal_fig">
                                    <p class="modal_txt">ティーバッティングエリアには、定番のバッティングティーに加え、トスバッティングマシンやストラックアウト用ネットも完備！初心者の方でもキャッチング練習や打撃フォームの確認が気軽にできるから、自分のペースで楽しく上達できます！気軽にバットを振りに来てくださいね！</p>
                                </div>
                                <div class="modal_fee">
                                    <h4>【料金】（<span class="gold">要予約</span><span class="pc spanpc">15分</span>）</h4>
                                    <p class="fee_txt"><span class="sp tab">15分</span><span class="value">1,000</span>円
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="#atBat" class="div5">
                            <div class="facility_contents_item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/icon_atBat.png" alt="" class="facility_icon">
                                <div class="facility_contents_txt">
                                    <p class="facility_contents_topic">打席ブース</p>
                                    <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="modal" id="atBat">
                            <a href="#!" class="modal_wrapper"></a>
                            <div class="modal_contents">
                                <div class="modal_contents_top">
                                    <div class="modal_contents_topic">
                                        <h3>打席ブース</h3>
                                        <a href="#!" class="close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/topic_closebtn.svg" alt="" class="topic_closebtn"></a>
                                    </div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/fig_atBat.png" alt="" class="modal_fig">
                                    <p class="modal_txt">真ん中のバッティングブースはバーチャルビジョン搭載で、試合さながらの練習が体験できます。本番さながらの迫力で、初心者から上級者まで幅広く満喫できます。</p>
                                </div>
                                <div class="modal_fee">
                                    <h4>【料金】</h4>
                                    <div class="fee_contents">
                                        <div class="oneplay">
                                            <h5>1Play（22球）</h5>
                                            <p class="fee_txt">軟式&emsp;<span class="value">300</span>円<br>
                                                                硬式&emsp;<span class="value">500</span>円
                                            </p>
                                        </div>
                                        <div class="reservation_course">
                                            <h5>予約コース</h5>
                                            <p class="fee_txt">軟式&emsp;<span class="value">3,000</span>円<br>
                                                                <span class="value_note">（25分&emsp;10PLAY付）</span><br>
                                                                硬式&emsp;<span class="value">2,500</span>円<br>
                                                                <span class="value_note">（15分&emsp;5PLAY付）</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#reception" class="div6">
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/icon_reception.png" alt="" class="facility_icon">
                                <p class="facility_contents_topic">受付棟</p>
                                <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                            </div>
                        </a>
                        <div class="modal" id="reception">
                            <a href="#!" class="modal_wrapper"></a>
                            <div class="modal_contents">
                                <div class="modal_contents_top">
                                    <div class="modal_contents_topic">
                                        <h3>受付棟</h3>
                                        <a href="#!" class="close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/topic_closebtn.svg" alt="" class="topic_closebtn"></a>
                                    </div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/fig_reception.png" alt="" class="modal_fig">
                                    <p class="modal_txt">ご来場いただいたら、まずは受付棟へお越しください！明るく穏やかなスタッフが、笑顔で皆さまをお迎えします。初めての方でも安心して楽しめるよう、丁寧にご案内しますので、わからないことがあれば何でも気軽に聞いてください！</p>
                                </div>
                            </div>
                        </div>
                        <div class="div7">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/facility/icon_car.png" alt="" class="facility_icon">
                            <p class="facility_contents_topic">無料駐車場<br class="sp">（6台）</p>
                        </div>
                    </div>
                </section>
                <section id="howto" class="howto">
                    <div class="topTopic">
                        <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                        <h2>ご利用方法</h2>
                        <hr>
                        <p class="topicEn">How to use</p>
                    </div>
                    <div class="howtouse_contents">
                        <div class="howtouse_item">
                            <h3>
                                <span class="howtouse_item_en">step1</span><br>
                                LINE<br>お友達登録
                            </h3>
                            <p class="howtouse_item_txt">
                                まずはお友達登録から！
                            </p>
                        </div>
                        <div class="howtouse_item">
                            <h3>
                                <span class="howtouse_item_en">step2</span><br>
                                日時・コース<br>を選択
                            </h3>
                            <p class="howtouse_item_txt">
                                公式LINE内「予約はこちらから」からご希望の日時・コースを選択してください。
                            </p>
                        </div>
                        <div class="howtouse_item">
                            <h3>
                                <span class="howtouse_item_en">step3</span><br>
                                来場受付
                            </h3>
                            <p class="howtouse_item_txt">
                                当日受付棟にて来場受付をお願いいたします。スタッフがご利用についてのご案内をいたします。
                            </p>
                        </div>
                        <div class="howtouse_item">
                            <h3>
                                <span class="howtouse_item_en">step4</span><br>
                                Play!
                            </h3>
                            <p class="howtouse_item_txt">
                                ごゆっくりとお楽しみください！
                            </p>
                        </div>
                    </div>
                    <p class="howtouse_note">※ご予約されない方は直接受付棟にて<br class="sp">
                                            来場受付をお願いいたしします
                    </p>
                </section>
                <div class="lead">
                    <div class="lead_contents">
                        <p class="lead_txt">交通アクセス<br class="sp">についてもっと知る</p>
                        <a href="/access">
                            <div class="lead_btn">
                                <p class="lead_btn_txt">アクセス</p>
                                <img class="icon_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/arrow-black.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>