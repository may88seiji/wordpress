<?php
/*
 Template Name: access
*/
?>


<?php get_header('head'); ?>


    <body id="access">
    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="access_bg">
            <div class="main_container ">
                <div class="row ">
                    <h1 class="col-xs-12 col-sm-8 h1_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/03_access/03_title.png" alt="アクセス" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/03_access/03_title.png" alt="アクセス" class="visible-xs"></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container">
            <!-- access_itembox-->
            <div class="row access_itembox">
                <div class="col-xs-12 col-sm-6 left">
                    <div>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/03_access/public.png" alt="公共交通機関をご利用の方" class="hidden-xs "><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/03_access/public_sp.png" alt="公共交通機関をご利用の方" class="visible-xs"></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/access/access_left.png" alt="公共交通機関をご利用の方" class="hidden-xs "><img src="<?php echo get_template_directory_uri(); ?>/common/img/access/access_left_sp.png" alt="公共交通機関をご利用の方" class=" visible-xs">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 right">
                    <div>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/03_access/car.png" alt="お車をご利用の方" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/03_access/car_sp.png" alt="お車をご利用の方" class="visible-xs"></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/common/img/access/access_right.png" alt="お車をご利用の方" class="hidden-xs "><img src="<?php echo get_template_directory_uri(); ?>/common/img/access/access_right_sp.png" alt="お車をご利用の方" class=" visible-xs">
                    </div>
                </div>
            </div>
            <!-- /access_img -->
           
           
            <!-- googlemap-->
            <div class="row googlemap">
                <div class="col-xs-12" style="width: 100%; overflow: hidden; height: 380px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6671218953375!2d138.57254171525824!3d35.66057218019908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601bf9c695efd9b7%3A0xd7093ea48536aa3e!2z77yI5qCq77yJ5Y2w5YKz5bGL5LiK5Y6f5YuH5LiDIOacrOW6lw!5e0!3m2!1sja!2sjp!4v1486628566034" width="100%" height="680" frameborder="0" style="border:0;margin-top: -150px;pointer-events: none;" allowfullscreen></iframe>
                </div>
            </div>
            <!-- /googlemap -->



        </div>
        <!-- /main_container -->
    </main>
    <!-- /main -->



        <?php get_footer(); ?>

