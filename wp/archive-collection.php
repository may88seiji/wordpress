<?php get_header('head'); ?>


<body id="collection">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="row paper_bg">
            <p class="col-xs-12"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/08_ExhibitionInfo/08_title.png" alt="展示情報" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/08_ExhibitionInfo/08_title_sp.png" alt="展示情報" class="visible-xs"></p>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
   <main>
       <!-- main_container -->
       <div class="main_container">

           <!-- 記事一覧 -->
           <div class="row item_box">
               <!-- loop -->
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <?php get_template_part('loop','item'); ?>
               <?php endwhile; endif; ?>
           </div>
 
           
           <!-- page navigation-->
           <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
           
           <!-- /page navigation-->
           
       </div>
       <!-- /main_container -->
    </main>
    <!-- /main -->



    <?php get_footer(); ?>

