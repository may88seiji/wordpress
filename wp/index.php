<?php get_header('head'); ?>


<body id="page-top">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="row top_img">
            <div class="main_container ">
                <div class="row">
                    <h1 class="col-xs-12 col-sm-8 h1_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/01_main.png" alt="印傳の歴史と文化を伝えます" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/01_main_sp.png" alt="印傳の歴史と文化を伝えます" class="visible-xs"></h1>
                    <p class="col-xs-12 sub_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/02_sub.png" alt="印傳博物館では印傳作品・鹿革工芸品・漆工芸品を中心に、約１５００点を収蔵し、テーマに合わせた展示を行っています。日本の革工芸文化を公開し、後世の技術の研究拡大・普及を目的としています。" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/02_sub_sp.png" alt="印傳博物館では印傳作品・鹿革工芸品・漆工芸品を中心に、約１５００点を収蔵し、テーマに合わせた展示を行っています。日本の革工芸文化を公開し、後世の技術の研究拡大・普及を目的としています。" class="visible-xs"></p>
                </div>
            </div>        </div>
    </header>
    <!-- /header-->

    <!-- main -->
    <main>
        <div class="main_container">
            <!-- 開館時間 入館料 -->
            <div class="row time_pay">
                <!--               <img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/03_info.jpg" alt="" class="hidden-xs">-->
                <div class=" col-sm-2 col-xs-12">
                    <!--               <div class=" col-sm-2 col-xs-12 visible-xs">-->
                    <div class="time_title">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/icon_time_pc.png" alt="開館時間" class="hidden-xs"></span>
                        <span><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/03_time_sp.png" alt="開館時間" class="visible-xs"></span>
                    </div>
                </div>
                <div class=" col-sm-4 col-xs-12">
                    <div class="time_text"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/text_time_pc.png" alt="午前10:00~午後5:00" class="hidden-xs"></div>
                    <div class="time_text"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/03_time02_sp.png" alt="午前10:00~午後5:00" class="visible-xs"></div>
                </div>
                <div class=" col-sm-2 col-xs-12">
                    <div class="pay_title">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/icon_payment_pc.png" alt="入館料" class="hidden-xs"></span>
                        <span><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/03_fee_sp.png" alt="入館料" class="visible-xs"></span>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="pay_text"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/text_payment_pc.png" alt="一般:200円 小・中学生:100円 ＊障害者手帳持参者とその介助者1名は入館料免除" class="hidden-xs"></div>
                    <div class="pay_text"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_top/03_fee02_sp.png" alt="一般:200円 小・中学生:100円 ＊障害者手帳持参者とその介助者1名は入館料免除" class="visible-xs"></div>
                </div>
            </div>

            <!-- お知らせ -->
            <div class="row item_box">
                <div class="col-xs-6 col-sm-3">
                    <a href="<?php $blog_title = get_bloginfo(); ?>/news"><div class="item title_item opacity"><p>お知らせ</p></div></a>
                </div>
                <!--最新の3件取得-->
                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'news', //カスタム投稿名
                    'posts_per_page' => 3 //表示件数（ -1 = 全件 )
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

            <!-- 印傳について -->
            <div class="row item_box">
                <div class="col-xs-6 col-sm-3">
                    <a href="<?php $blog_title = get_bloginfo(); ?>/about"><div class="item title_item opacity"><p>印傳について</p></div></a>
                </div>
                <!--最新の3件取得-->
                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'about', //カスタム投稿名
                    'posts_per_page' => 3 //表示件数（ -1 = 全件 )
                ));

                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="item ">
                        <a href="<?php the_permalink() ?>">
                            <div class="item_top"><img src="
                                <?php if ( has_post_thumbnail() ) {
    //サムネイルの画像があるか判定してURLを返す
    $image_id = get_post_thumbnail_id ();
    $image_url = wp_get_attachment_image_src ($image_id, true);
    echo $image_url[0];
} else {
    $url = get_template_directory_uri();
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
            <div class="row item_box ">
                <div class="col-xs-6 col-sm-3">
                    <a href="<?php $blog_title = get_bloginfo(); ?>/collection"><div class="item title_item opacity"><p>展示情報</p></div></a>
                </div>
                <!--最新の3件取得-->
                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'collection', //カスタム投稿名
                    'posts_per_page' => 3 //表示件数（ -1 = 全件 )
                ));

                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="item ">
                        <a href="<?php the_permalink() ?>">
                            <div class="item_top"><img src="
                                <?php if ( has_post_thumbnail() ) {
    //サムネイルの画像があるか判定してURLを返す
    $image_id = get_post_thumbnail_id ();
    $image_url = wp_get_attachment_image_src ($image_id, true);
    echo $image_url[0];
} else {
    $url = get_template_directory_uri();
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
        </div>
    </main>
    <!-- /main -->



    <?php get_footer(); ?>

