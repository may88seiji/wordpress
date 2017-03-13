<?php
/*
 Template Name: confirm
*/
?>


<?php get_header('head'); ?>


    <body id="form" class='confirm'>
        <!-- header-->
        <header>
            <?php get_header('nav'); ?>
            <div class="row paper_bg">
                <p class="col-xs-12">団体の見学申込み</p>
            </div>
        </header>
        <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container">

            <!-- step -->
            <div class="row step">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/form/step_confirm.png" alt="お問い合わせ内容の入力 確認 完了" class="col-xs-12 hidden-xs">
                <span class="text_input hidden-xs ">お問い合わせ内容の入力</span><span class="text_confirm hidden-xs color_white">確認</span><span class="text_finish hidden-xs">完了</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/form/step_confirm_sp.png" alt="お問い合わせ内容の入力 確認 完了" class="col-xs-12 visible-xs">
            </div>
            <!-- /step -->
           
            <!-- text -->
            <div class="row">
                <div class="col-xs-12 text"><p>入力内容のご確認をお願い致します。<br>送信後、自動返信メールが下記で入力したメールアドレスに届きます。<br>万が一届かない場合は、メールアドレスの記入間違いにより返信が出来ていない可能性がございますので、<br>再度お申し込みをお願い致します。</p></div>
            </div>
            <!-- /text -->

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

