<div class="wrap_nav">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div class="icon_hamburger">
                        <span></span>
                        <span></span>
                    </div>
<!--                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/header/icon_hamburger.png" alt="navi" class="icon_hamburger">-->
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/header/icon_close.png" alt="close" class="icon_close hidden-xs">
                </button>
                <a class="visible-xs col-xs-6" href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/header/nav_logo_sp.png" alt="印傳博物館"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav center-block col-md-12">
                    <li class="pull-left hidden-xs">
                        <a class="navbar-brand hidden-xs" href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/header/nav_logo.png" alt="印傳博物館" class='nav_logo'></a>
                    </li>
                    <!-- sp -->
                    <li class=" page-scroll visible-xs text-center nav_about">
                        <a href="<?php $blog_title = get_bloginfo(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/05_sp.png" alt="印傳について"></a>
                    </li>
                    <li class=" page-scroll visible-xs text-center nav_exhibits">
                        <a href="<?php echo get_permalink( get_page_by_path( 'exhibits' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/01_sp.png" alt="展示案内"></a>
                    </li>
                    <li class=" page-scroll visible-xs text-center nav_info">
                        <a href="<?php echo get_permalink( get_page_by_path( 'info' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/02_sp.png" alt="ご利用案内"></a>
                    </li>
                    <li class=" page-scroll visible-xs text-center nav_access">
                        <a href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/03_sp.png" alt="アクセス"></a>
                    </li>
                    <li class=" page-scroll visible-xs text-center nav_group">
                        <a href="<?php echo get_permalink( get_page_by_path( 'group' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/04_sp.png" alt="団体・学校でご来場の方へ"></a>
                    </li>
                    <li class="pull-right visible-xs text-center nav_contact" id='scroll_bottom_sp'>
                        <a class="" href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/06_sp.png" alt="お問い合わせ"></a>
                    </li>
<!--
                    <li class="pull-right visible-xs text-center nav_close">
                    </li>
-->

                    <!-- pc -->
                    <li class="pull-left hidden-xs line">
                        <a class="" href="<?php $blog_title = get_bloginfo(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/05.png" alt="印傳について"></a>
                    </li>
                    <li class="pull-left hidden-xs line">
                        <a class="" href="<?php echo get_permalink( get_page_by_path( 'exhibits' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/01.png" alt="展示案内"></a>
                    </li>
                    <li class="pull-left hidden-xs line">
                        <a class="" href="<?php echo get_permalink( get_page_by_path( 'info' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/02.png" alt="ご利用案内"></a>
                    </li>
                    <li class="pull-left hidden-xs line">
                        <a class="" href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/03.png" alt="アクセス"></a>
                    </li>
                    <li class="pull-left hidden-xs ">
                        <a class="" href="<?php echo get_permalink( get_page_by_path( 'group' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/04.png" alt="団体・学校でご来場の方へ"></a>
                    </li>
                    <li class="pull-right hidden-xs" id='scroll_bottom'>
                        <a class="" href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_GNavi/06.png" alt="お問い合わせ"></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
