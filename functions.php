<?php
// css&js読み込み
function stylesheet_version() {
    wp_enqueue_style('destyle-style', get_template_directory_uri() . '/css/destyle.css');
    wp_enqueue_style('common-style', get_stylesheet_directory_uri() . '/css/common.css',array('destyle-style'));
    wp_enqueue_script('comon-script',get_stylesheet_directory_uri() . '/js/common.js',array('jquery'));
    
    if ( is_front_page() ) {
        wp_enqueue_style(
            'front-page-style',
            get_template_directory_uri() . '/css/top.css',
            array('common-style'),
            filemtime( get_template_directory() . '/css/top.css' )
        );
        
        wp_enqueue_script(
            'top-script',
            get_stylesheet_directory_uri() . '/js/top.js',
            array('jquery')
        );
    }        
    elseif ( is_single() ) {
        wp_enqueue_style(
            'single-style',
            get_template_directory_uri() . '/css/single.css',
            array('common-style')
        );
    }
    elseif ( is_home() ) {
        wp_enqueue_style(
            'home-style',
            get_template_directory_uri() . '/css/home.css',
            array('common-style')
        );
    }
    elseif ( is_page('legal-notation') ) {
        wp_enqueue_style(
            'law-style',
            get_template_directory_uri() . '/css/law.css',
            array('common-style')
        );
    }
    elseif ( is_page('privacy-policy') ) {
        wp_enqueue_style(
            'home-style',
            get_template_directory_uri() . '/css/privacyPolicy.css',
            array('common-style')
        );
    }
    elseif ( is_page('access') ) {
        wp_enqueue_style(
            'access-style',
            get_template_directory_uri() . '/css/access.css',
            array('common-style')
        );
    }
    elseif ( is_page('facility') ) {
        wp_enqueue_style(
            'facility-style',
            get_template_directory_uri() . '/css/facility.css',
            array('common-style')
        );
        wp_enqueue_script(
            'facility-script',
            get_stylesheet_directory_uri() . '/js/facility.js',
            array('jquery')
        );
    }
    elseif ( is_page('features') ) {
        wp_enqueue_style(
            'features-style',
            get_template_directory_uri() . '/css/features.css',
            array('common-style')
        );
        wp_enqueue_script(
            'features-script',
            get_stylesheet_directory_uri() . '/js/features.js',
            array('jquery')
        );
    }
    elseif ( is_page('hope') ) {
        wp_enqueue_style(
            'hope-style',
            get_template_directory_uri() . '/css/hope.css',
            array('common-style')
        );
        wp_enqueue_script(
            'hope-script',
            get_stylesheet_directory_uri() . '/js/hope.js',
            array('jquery')
        );
    }
    else{
        wp_enqueue_style(
            'index-style',
            get_template_directory_uri() . '/style.css',
            array('common-style')
        );
    }
}
add_action('wp_enqueue_scripts', 'stylesheet_version');
remove_action('wp_head','wp_generator');



// お知らせ管理画面編集
    // 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


    // 管理画面｜投稿の名前変更
function change_menu_label(){
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
}
function change_object_label(){
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'change_object_label' );
add_action( 'admin_menu', 'change_menu_label' );
