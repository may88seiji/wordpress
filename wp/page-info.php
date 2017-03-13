<?php
/*
 Template Name: info
*/
?>

<?php get_header('head'); ?>


<body id="info">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="info_bg">
            <div class="main_container ">
                <div class="row ">
                    <h1 class="col-xs-12 h1_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/02_guide/03_title.png" alt="ご利用案内" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/02_guide/03_title.png" alt="ご利用案内" class="visible-xs"></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container">
            
            <!-- h2 title  会館時間-->
            <div class="row">
                <h2 class="col-xs-12 h2_title open_time"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/02_guide/hall.png" alt="会館時間" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/02_guide/hall_sp.png" alt="会館時間" class="visible-xs"></h2>
            </div>
            
            <!-- table -->
            <div class="row">
                <table class="table table-bordered col-xs-12">
                    <tbody>
                        <tr>
                            <th scope="row col-xs-4">開館時間</th>
                            <td class="col-xs-8">AM10:00〜PM5:00</td>
                        </tr>
                        <tr>
                            <th scope="row">休館日</th>
                            <td>印傳屋本店休業日・展示替え期間中（ご来館の際は、あらかじめお問い合わせ下さい。）</td>
                        </tr>
                        <tr>
                            <th scope="row">入館料</th>
                            <td>一般：200円、小・中学生：100円  ※障害者手帳持参者とその介助者１名は入館料免除</td>
                        </tr>
                        <tr>
                            <th scope="row">所在地</th>
                            <td>〒400-0032  山梨県甲府市中央3-11-15  印傳屋 本店２階</td>
                        </tr>
                        <tr>
                            <th scope="row">駐車場</th>
                            <td>乗用車：約20台、  大型車：約1台</td>
                        </tr>
                        <tr>
                            <th scope="row">お問い合わせ / 電話番号</th>
                            <td>055-220-1621（自動音声案内）</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- h2 title  フロアマップ-->
            <div class="row">
                <h2 class="col-xs-12 h2_title floor_map">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/02_guide/map.png" alt="フロアマップ" class="hidden-xs">
                    <div class="floor_text hidden-xs">
                        《館内施設》<br>エレベーター（9名定員）1基<br>車椅子用トイレ 1ヶ所<br>※当館は印傳屋本店2階にございます。店舗内中央の階段をご利用下さい。<br>※チケットの販売は1階店舗レジにて取り扱っております。<br>※エレベーターご利用の方は店頭スタッフまでお申し付け下さい。
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/02_guide/map_sp.png" alt="フロアマップ" class="visible-xs">
                </h2>
            </div>
            <!-- h2 title  フロアマップ-->

            <!-- フロア画像 -->
            <div class="row text">
                <div class="col-xs-12"></div>
                <div class="col-xs-12 content_img"><img src="<?php echo get_template_directory_uri(); ?>/common/img/news/floor_img.png" alt="フロアマップ" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/news/floor_img_sp.png" alt="フロアマップ" class="visible-xs">
                    <div class="floor_text visible-xs">
                        <p>《館内施設》<br>エレベーター（9名定員）1基<br>車椅子用トイレ 1ヶ所</p>
                        <p>※当館は印傳屋本店2階にございます。店舗内中央の階段をご利用下さい。<br>※チケットの販売は1階店舗レジにて取り扱っております。<br>※エレベーターご利用の方は店頭スタッフまでお申し付け下さい。</p>
                    </div>
                </div>
            </div>
            <!-- フロア画像 -->


        </div>
        <!-- /main_container -->
    </main>
    <!-- /main -->



    <?php get_footer(); ?>

