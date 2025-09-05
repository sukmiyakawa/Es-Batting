<!-- Template Name: アクセス -->
<?php get_header(); ?>
<main>
    <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <article>
            <section id="access" class="access">
                <div class="topTopic">
                    <img class="legend_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/legend_logo.svg" alt="伝説">
                    <h2><?php the_title(); ?></h2>
                    <hr>
                    <p class="topicEn">Access</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3229.389382832451!2d139.38667017423097!3d35.961904614507446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018d7007ea6c9f9%3A0x5c86c094b504d492!2sEs-Batting!5e0!3m2!1sja!2sjp!4v1751280507722!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="train">
                    <h3>電車・バスでお越しの方</h3>
                    <div class="train_fig">
                        <div class="div1 spot">所沢</div>
                        <div class="div2 method SS">西武<br>新宿線<br><br>各停<br>約20分</div>
                        <div class="div3 spot">本川越</div>
                        <div class="div4 method walk">徒歩<br><br>約10分</div>
                        <div class="div5 spot">川越市</div>
                        <div class="div6 method TJ">東武<br>東上線<br><br>普通<br>約10分</div>
                        <div class="div7 spot">大宮</div>
                        <div class="div8 method JA">JR<br>川越線<br><br>各停<br>約20分</div>
                        <div class="div9 spot">池袋</div>
                        <div class="div10 method TJ ">東武<br>東上線<br><br>急行<br>約30分</div>
                        <div class="div11 spot">川越</div>
                        <div class="div12 method TJ">東武<br>東上線<br><br>普通<br>約10分</div>
                        <div class="div13 spot">坂戸</div>
                        <div class="div14 method walk">徒歩<br><br>約15分</div>
                        <div class="div15 method bus">川越<br class="sp">観光<br>バス<br><br>約5分</div>
                        <div class="div16 spot">横町</div>
                        <div class="div17 method walk">徒歩<br><br>約1分</div>
                        <div class="div18 spot"><img class="logo_access" src="<?php echo get_stylesheet_directory_uri(); ?>/image/access/logo_access.png" alt=""></div>
                        
                    </div>
                </div>
                <div class="car">
                    <h3>お車でお越しの方</h3>
                    <div class="car_fig">
                        <div class="div19 spot">練馬<br>IC</div>
                        <div class="div20 method method--expwy">関越道<br><br>約20分</div>
                        <div class="div21 spot">佐野<br>藤岡<br>IC</div>
                        <div class="div22 method method--expwy">東北道<br><br>約15分</div>
                        <div class="div23 spot">久喜<br>白岡<br>JCT</div>
                        <div class="div24 method method--expwy">圏央道<br><br>約20分</div>
                        <div class="div25 spot">鶴ヶ島<br>JCT</div>
                        <div class="div26 method method--expwy">関越道<br><br>約2分</div>
                        <div class="div27 spot">前橋<br>IC</div>
                        <div class="div28 method method--expwy">関越道<br><br>約35分</div>
                        <div class="div29 spot">鶴ヶ島<br>IC</div>
                        <div class="div30 method method--local">一般道<br><br>約5分</div>
                        <div class="div31 spot">坂戸西<br>SIC</div>
                        <div class="div32 method method--local">一般道<br><br>約5分</div>
                        <div class="div33 spot"><img class="logo_access" src="<?php echo get_stylesheet_directory_uri(); ?>/image/access/logo_access.png" alt=""></div>
                    </div>
                </div>
            </section>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>