<!-- footer-->
<footer class="text-center">
  
       <div class="large_container hidden-xs">
        <div class="row">
            <div class="col-xs-3 col-sm-3  img-responsive">
                <a href="<?php $blog_title = get_bloginfo(); ?>/about">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/footer01.png" alt="印傳について" class="footer01">
                    <div class="caption"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_footer/01_about.png" alt="印傳について"></div>
                </a>
            </div>
            <div class="col-xs-3 col-sm-3 img-responsive" class="footer02">
                <?php
                $page = get_page_by_path( 'exhibits' );
                $permalink = get_permalink( $page->ID );
                ?>
                <a href="<?php echo get_permalink( get_page_by_path( 'exhibits' )->ID ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/footer02.png" alt="展示案内">
                    <div class="caption"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_footer/02_exhibit.png" alt="展示案内"></div>
                </a>
            </div>
            <div class="col-xs-3 col-sm-3 img-responsive" class="footer03">
                <?php
                $page = get_page_by_path( 'info' );
                $permalink = get_permalink( $page->ID );
                ?>
                <a href="<?php echo get_permalink( get_page_by_path( 'info' )->ID ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/footer03.png" alt="ご利用案内">
                    <div class="caption"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_footer/03_guide.png" alt="ご利用案内"></div>
                </a>
            </div>
            <div class="col-xs-3 col-sm-3 img-responsive" class="footer04">
                <?php
                $page = get_page_by_path( 'access' );
                $permalink = get_permalink( $page->ID );
                ?>
                <a href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/footer04.png" alt="アクセス">
                    <div class="caption"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/00_footer/04_access.png" alt="アクセス"></div>
                </a>
            </div>
        </div>
    </div>

    <div class="pagetop_container hidden-xs">
        <div id="pageTop" class="pagetop pull-right opacity"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/pagetop.png" alt="pagetop"></div>
    </div>

    <div class="main_container">
        <div class="row">
            <div class=" col-sm-2 col-xs-12">
                <div class="footer_inden_museum">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/logo_thum.png" alt="印傳博物館" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/logo_thum_sp.png" alt="印傳博物館" class="visible-xs  col-xs-3" ></a>
                </div>
            </div>
            <div class=" col-sm-2 col-xs-12">
                <div class="footer_contact">
                    <p>お問い合わせ<br class="hidden-xs">（音声案内）</p>
<!--                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/contact.png" alt="お問い合わせ(音声案内)" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/contact_sp.png" alt="お問い合わせ(音声案内)" class="visible-xs">-->
                </div>
            </div>
            <div class=" col-sm-4 col-xs-12">
                <div class="footer_tel"><img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/tel.png" alt="055-220-1621" class="hidden-xs"><a href="tel:055-220-1621"><img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/tel_sp.png" alt="055-220-1621" class="visible-xs"></a></div>
            </div>
            <hr class="col-xs-9 visible-xs center-block">
            <div class=" col-sm-4 col-xs-8 center-block">
                <div class="footer_address text-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/footer/line.png" alt="line" class="hidden-xs footer_line">
                    <div>
                        〒400-0032<br>
                        山梨県甲府市中央3-11-15<br>
                        印傳屋本店２階<br>
                        <a href="<?php echo get_template_directory_uri(); ?>/access">アクセス</a>
                    </div>
                </div>
            </div>
        </div>

        <row>
            <div class='copyright'> COPYRIGHT © 2017 INDENYA. ALL RIGHTS RESERVED.</div>
        </row>
    </div>

</footer>
<!-- /footer-->

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/common/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/common/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/common/js/creative.js"></script>
<?php wp_footer(); ?>
</body>

</html>

