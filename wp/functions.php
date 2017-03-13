<?php 
//アイキャッチ画像
    add_theme_support('post-thumbnails');

//titleの文字数調整
function my_the_title($id=null) {
    $title = get_the_title($id);
    $title = mb_strimwidth($title, 0, 14, "…","UTF-8");
    echo $title;
}

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
    return 9;
}
    add_filter('excerpt_length', 'my_excerpt_length');
//末尾を3点リーダーに変更
function new_excerpt_more($more) {
    return ' ...';
}
    add_filter('excerpt_more', 'new_excerpt_more');
/* 存在しないページを指定された場合は 404 ページを表示する */ 
function redirect_404() { 
    //メインページ・シングルページ・アーカイブ（月別）・固定ページ 以外の指定の場合 404 ページを表示する 
    if(is_front_page() || is_single() || is_archive() || is_page()) return; include(TEMPLATEPATH . '/404.php'); exit;
}
    add_action('template_redirect', 'redirect_404');

// 【MW MW Form】エラーメッセージをカスタマイズ
function my_validation_rule( $Validation, $data, $Data ) {
    $Validation->set_rule( 'gruop_name', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'representative', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'furigana', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'mail', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'mail', 'mail', array( 'message' => '※有効なメールアドレスを入力してください。' ) );
    $Validation->set_rule( 'postal_code', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'address', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'tel', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'year', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'month', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'day', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'time_text', 'noEmpty', array( 'message' => '※未入力です。' ) );
    $Validation->set_rule( 'number_person', 'noEmpty', array( 'message' => '※未入力です。' ) );
    return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-70', 'my_validation_rule', 10, 3 );
/* DON'T DELETE THIS CLOSING TAG */ ?>