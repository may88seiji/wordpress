<?php
/*
 Template Name: exhibits
*/
?>

<?php get_header('head'); ?>


    <body id="exhibits">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="exhibits_bg">
            <div class="main_container ">
                <div class="row ">
                    <h1 class="col-xs-12 col-sm-8 h1_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/01_exhibit/01_title.png" alt="展示案内" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/01_exhibit/01_title.png" alt="展示案内" class="visible-xs"></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container">
            <!-- 展示情報 -->
            <div class="row item_box ">
                <div class="col-xs-6 col-sm-3">
                    <a href="<?php $blog_title = get_bloginfo(); ?>/collection"><div class="item title_item opacity"><p>展示情報</p></div></a>
                </div>
                
                
                <!--最新の3件取得-->
                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'collection', //カスタム投稿名
                    'posts_per_page' => 3 //表示件数
                ));
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="item" id="item_height">
                        <a href="<?php the_permalink() ?>">
                            <div class="item_top"><img src="
                            <?php if ( has_post_thumbnail() ) {
                                //サムネイルの画像があるか判定してURLを返す
                                $image_id = get_post_thumbnail_id ();
                                $image_url = wp_get_attachment_image_src ($image_id, true);
                                echo $image_url[0];
                            } else {
                                    echo '/wordpress/wp-content/themes/museum/common/img/common/logo_museum.png' ;
} ?>" alt="<?php my_the_title(); ?>"></div>
                            <div class="item_bottom"><?php my_the_title(); ?><br><span><?php the_time('Y年n月j日'); ?></span></div>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <!--/最新の3件取得-->

            </div>
            <!-- 展示情報 -->
            
            <!-- h2 title  収蔵品ギャラリー-->
            <div class="row">
                <h2 class="col-xs-12 h2_title gallery"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/01_exhibit/gallery.png" alt="収蔵品ギャラリー" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/01_exhibit/gallery_sp.png" alt="収蔵品ギャラリー" class="visible-xs"></h2>
            </div>
            <!-- h2 title  収蔵品ギャラリー-->
            
            <!-- 収蔵品 -->
            <div class="row">
                <?php if(have_rows('repeat')): ?>
                    <?php while(have_rows('repeat')): the_row(); ?>
                <div class="col-xs-12 col-sm-4 modal_target" data-toggle="modal" data-target="#myModal" data-img="<?php the_sub_field('img'); ?>">
                    <div class="item-collection"><img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('title'); ?>"  class='1'></div>
                        <div class="gallery_caption visible-xs text-center "><?php the_sub_field('title'); ?></div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


            <!-- 収蔵品ギャラリー -->
            <!-- modal -->
            <!-- 表示される画像のモーダルウィンドウ -->
            <div class="modal fade hidden-xs" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog hidden-xs" role="document">
                    <div class="modal-content hidden-xs">
                        <div class="modal-body">
                            <div class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/btn_close.png" alt="close"></span></div>
                            <div class="arrow_left"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/arrow_left.png" alt="left"></div>
                            <div class="arrow_right"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/arrow_right.png" alt="right"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/img/article/img01.png" alt="収蔵品ギャラリー" class="modal_img" width="800" height="600">
                        </div>
                        <div class="modal-footer hidden-xs">
                            <div class="modal_title">革羽織 -角字-</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal -->
            
            


        </div>
        <!-- /main_container -->
    </main>
    <!-- /main -->



        <?php get_footer(); ?>

