<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <header>
            <div class="header_contents">
                <h1><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/logo_common.png" alt="Es-Batting"></a></h1>
                <div class="header_menu">
                    <nav class="menu">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/features" class="menu_item"><img class="sp hamburgerNavi" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/icon_hamburgerNavi.png" alt="">特徴</a></li>
                            <li><a href="<?php echo home_url(); ?>/facility" class="menu_item"><img class="sp hamburgerNavi" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/icon_hamburgerNavi.png" alt="">施設・料金案内</a></li>
                            <li><a href="<?php echo home_url(); ?>/hope" class="menu_item"><img class="sp hamburgerNavi" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/icon_hamburgerNavi.png" alt="">想い</a></li>
                            <li><a href="<?php echo home_url(); ?>/access" class="menu_item"><img class="sp hamburgerNavi" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/icon_hamburgerNavi.png" alt="">アクセス</a></li>
                        </ul>
                    </nav>
                    <a href="https://line.me/R/ti/p/@252zbldw" class="LINEheader">
                        <div class="LINEheader">
                            <img class="headerIcon_LINE" src="<?php echo get_stylesheet_directory_uri(); ?>/image/common/LINE.svg" alt="">
                            <p class="headerTxt_LINE"><span class="headerTxt_LINE_compact">友だち<br></span>登録</p>
                        </div>
                    </a>
                    <div class="sp btn_menu">
                        <span></span>
                        <span></span>
                        <span></span> 
                    </div>
                </div>
            </div>
        </header>        