<?php get_header('head'); ?>

<body id="about">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="row paper_bg">
            <p class="col-xs-12"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/05_about/05_title.png" alt="印傳について" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/05_about/05_title_sp.png" alt="印傳について" class="visible-xs"></p>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
   <main>
       <!-- main_container -->
       <div class="main_container">

               <!-- 記事一覧 -->
               <div class="row item_box" >
                   <!-- loop item-->
                   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   <?php get_template_part('loop','item'); ?>
                   <?php endwhile; endif; ?>
               </div>

           <!-- page navigation-->
           <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

           
       </div>
       <!-- /main_container -->
    </main>
    <!-- /main -->



    <?php get_footer(); ?>

