<?php get_header('head'); ?>


<body id="article">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="row paper_bg center-box">
            <p class="col-xs-12 title_news"><?php the_title(); ?></p>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="article_container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- tag -->
                <div class="row tag">
                    <ul class="col-xs-12">
                        <li class='date'><?php the_date(); ?></li><br class="visible-xs">
                        <li class='category'>CATEGORY : <span><a href="../<?php $slug_name = $post->post_name; ?>">お知らせ</a></span></li>
                    </ul>
                </div>

                <!-- text -->
                <div class="row text">
                    <div class="col-xs-12"><?php the_content(); ?></div>
                </div>
            
            <?php endwhile; endif; ?>


            <!-- pager -->
            <?php get_template_part('loop','pager'); ?>
            <!-- /pager -->

        </div>
        <!-- /main_container -->
    </main>
    <!-- /main -->



    <?php get_footer(); ?>

