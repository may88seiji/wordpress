<!-- 404.php -->
<?php get_header('head'); ?>

    <body id="404">
        <!-- header-->
        <header>
            <?php get_header('nav'); ?>
        </header>
        <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container">

            <!-- text -->
            <div class="row">
                <div class="col-xs-12 text not_found"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/404.png" alt="404 page not found" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/404_sp.png" alt="404 page not found" class="visible-xs"></div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 text main"><p>お探しのページは見つかりません</p></div>
            </div>
            <div class="row">
                <div class="col-xs-12 text sub"><p>お探しのページは一時的にアクセスができない状況にあるか、<br class="hidden-xs">移動もしくは削除された可能性があります。</p></div>
            </div>
            <!-- /text -->
            
            <!-- btn -->
            <div class="row">
                <div class="col-xs-12 p0"><div class="btn_home"><input type="button"  value="トップページに戻る" class="btn_input" onclick="location.href='/'"></div></div>
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

