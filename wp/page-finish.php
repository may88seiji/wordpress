<?php
/*
 Template Name: finish
*/
?>


<?php get_header('head'); ?>


    <body id="form" class="finish">
        <!-- header-->
        <header>
            <?php get_header('nav'); ?>
            <div class="row paper_bg">
                <p class="col-xs-12">団体・学校の<br class="visible-xs">見学申込み</p>
            </div>
        </header>
        <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container">

            <!-- step -->
            <div class="row step">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/form/step_finish.png" alt="お問い合わせ内容の入力 確認 完了" class="col-xs-12 hidden-xs">
                <span class="text_input hidden-xs">お問い合わせ内容の入力</span><span class="text_confirm hidden-xs">確認</span><span class="text_finish hidden-xs color_white">完了</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/form/step_finish_sp.png" alt="お問い合わせ内容の入力 確認 完了" class="col-xs-12 visible-xs">
            </div>
            <!-- /step -->

            <!-- text -->
            <div class="row">
                <div class="col-xs-12 text main"><p>お問い合わせ<br class="visible-xs">ありがとうございました。<br>お申し込みを受け付けました。</p></div>
            </div>
            <div class="row">
                <div class="col-xs-12 text sub"><p>担当者より折り返しご連絡させて頂きます。<br>3営業日以上連絡のない場合、お手数ですがお電話にてお問い合わせください。</p></div>
            </div>
            <!-- /text -->
            
            <!-- btn -->
            <div class="row">
                <div class="col-xs-12"><div class="btn_home"><input type="button"  value="トップページに戻る" class="btn_input" onclick="location.href='/'"></div></div>
            </div>
            
            <!-- /btn -->

            <!-- form -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-xs-12"><?php the_content(); ?></div>
            </div>

            <?php endwhile; endif; ?>
            <!-- /form -->
            
            

        </div>
        <!-- /main_container -->
    </main>
    <!-- /main -->



        <?php get_footer(); ?>

