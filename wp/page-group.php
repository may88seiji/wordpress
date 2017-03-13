<?php
/*
 Template Name: group
*/
?>

<?php get_header('head'); ?>


<body id="group">

    <!-- header-->
    <header>
        <?php get_header('nav'); ?>
        <div class="group_bg">
            <div class="main_container ">
                <div class="row">
                    <h1 class="col-xs-12  col-sm-8 h1_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/04_title.png" alt="団体・学校でご来館の方へ" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/04_title_sp.png" alt="団体・学校でご来館の方へ" class="visible-xs"></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- /header-->

    <!-- main -->
    <main>
        <!-- main_container -->
        <div class="main_container group">
           
            <!-- text -->
            <div class="row group_text">
                <div class="col-xs-12 col-sm-9"><p>印傳博物館は印傳の専門店•印傳屋の2階に併設した施設となっております。</p><p class="mb_p">開館時間は午前10:00から午後5:00でございます。館内は30分程度で観覧出来ます。</p><p class="mb_p">小スペースのため50名様以上の団体様につきましては人数・時間を調整していただく場合がございます。</p><p>本店休業日・展示替期間中は休館となります。</p><p>あらかじめご確認の上、お申込み下さいませ。</p></div>
            </div>

            
            <!-- h2 title  入館料-->
            <div class="row fee">
                <h2 class="col-xs-12 h2_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/fee.png" alt="入館料" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/fee_sp.png" alt="入館料" class="visible-xs"></h2>
            </div>
            <!-- h2 title  入館料-->

            
            <!-- table -->
            <div class="row">
                <table class="table table-bordered col-xs-12">
                    <tbody>
                        <tr>
                            <th scope="row col-xs-4">学校の方</th>
                            <td class="col-xs-9">小学校・中学校等の学生と引率者が教育課程における活動として<br class="hidden-xs">観覧希望の際は入館料を免除いたしております。</td>
                        </tr>
                        <tr>
                            <th scope="row">一般団体の方</th>
                            <td>入館料は大人200円•小中学生100円でございます。（団体割引はございません）</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- h2 title  お申込について-->
            <div class="row">
                <h2 class="col-xs-12 h2_title img_submit"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/offer.png" alt="お申込について" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/offer_sp.png" alt="お申込について" class="visible-xs"></h2>
            </div>

            <!-- table -->
            <div class="row submit">
                <table class="table table-bordered col-xs-12">
                    <tbody>
                        <tr>
                            <th scope="row col-xs-4">お申込方法</th>
                            <td class="col-xs-9">館内・店舗内・駐車場の混雑を避けるため、 事前のご連絡をお願い致しております。<br class="hidden-xs">見学の2週間前までにお申し込み下さい。</td>
                        </tr>
                        <tr>
                            <th scope="row">お申込み〜当日までの流れ</th>
                            <td><span style="font-weight:bold;">(1)フォームからのお申込み</span><br>学校の教育課程における活動として観覧希望の際は入館料を免除いたしております。<br><br><span style="font-weight:bold;">(2)博物館担当者から団体代表者様または学校へのご連絡</span><br>当日の内容や下見の有無等を確認させていただきます。<br>学生の方の教育課程における活動の場合、博物館入館許可書を郵送により<br>各学校へ送付致します。当日、 入館許可書をグループごとにご提示をお願い致します。<br><br><span style="font-weight:bold;">(3)見学当日</span><br>ご入館の際には1階店舗スタッフにお声掛けの上ご入館下さい。<br>（学生の方の教育課程における活動の場合、入館許可書をご提示下さい。）<br>退館時にも1階店舗スタッフにお声掛けをお願い致します。</td>
                        </tr>
                        <tr>
                            <th scope="row col-xs-4">一般団体の方</th>
                            <td class="col-xs-9">ご予約はこちらの<a class='link_form' href="<?php $blog_title = get_bloginfo(); ?>/group/input">見学申し込みフォーム</a>よりご連絡下さいませ。</td>
                        </tr>
                        <tr>
                            <th scope="row col-xs-4">学校の方</th>
                            <td class="col-xs-9">ご予約は見学申し込みフォームよりご連絡下さいませ。<br><span style="line-height: 3;">PDF: <a class='link_form' href="<?php echo get_template_directory_uri(); ?>/common/pdf/gakusei.pdf" target="_blank">申込み書類 (ダウンロード)</a></span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="cancel">※お申込み後のキャンセルは電話055-233-1100（午前10時～午後6時）までご連絡ください。</div>
            </div>

            <!-- h2 title  印傳博物館からのお願い-->
            <div class="row favor">
                <h2 class="col-xs-12 h2_title img_favor"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/notice.png" alt="印傳博物館からのお願い" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/common/img/text_img/04_group/notice_sp.png" alt="印傳博物館からのお願い" class="visible-xs"></h2>
            </div>

            <!-- table -->
            <div class="row">
                <table class="table table-bordered col-xs-12 table_favor">
                    <tbody>
                        <tr>
                            <th scope="row col-xs-4">駐車場</th>
                            <td class="col-xs-9">車両でお越しの際は店舗東側の駐車場をご利用下さい。<span style="font-size:1.2rem;">（バスはバックにてご入場下さい）</span></td>
                        </tr>
                        <tr>
                            <th scope="row">見学の際のお願い</th>
                            <td>見学の際は見学マナーを守ってご覧頂けますようお願い申し上げます。<br>・走ったり、大きな声に気をつけて頂きますようお願い致します。<br>・館内、店内でのご飲食はご遠慮頂いております。<br>・アルコールをお召し上がりのお客様のご来館はご遠慮頂いております。<br>・展示品にはお手を触れないようお願い致します。<br>・写真撮影は禁止となっております。ご理解の程宜しくお願い致します。<br>・本店休業日・展示替期間中は休館となります。あらかじめご確認の上、<br><span style="opacity: 0;" class="hidden-xs">・</span>お申込みください。</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
        <!-- /main_container -->
    </main>
    <!-- /main -->



    <?php get_footer(); ?>

