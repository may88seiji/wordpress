<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- title-->
        <title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/common/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Plugin CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/common/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/common.css" rel="stylesheet">

        <!-- css 条件分岐 -->
        <?php if(is_front_page()): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/top.css" rel="stylesheet">
        <?php elseif(is_page('access')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/access.css" rel="stylesheet">
        <?php elseif(is_page('group')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/group.css" rel="stylesheet">
        <?php elseif(is_page('info')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/info.css" rel="stylesheet">
        <?php elseif(is_page('exhibits')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/exhibits.css" rel="stylesheet">
        <?php elseif(is_page('input')): ?>
         <link href="<?php echo get_template_directory_uri(); ?>/common/css/form.css" rel="stylesheet">
        <?php elseif(is_page('confirm')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/form.css" rel="stylesheet">
        <?php elseif(is_page('finish')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/form.css" rel="stylesheet">
        <?php elseif(is_archive('collection')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/collection.css" rel="stylesheet">
        <?php elseif(is_archive('about')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/about.css" rel="stylesheet">
        <?php elseif(is_archive('news')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/news.css" rel="stylesheet">
        <?php elseif(is_single('')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/article.css" rel="stylesheet">
        <?php elseif(is_404('')): ?>
        <link href="<?php echo get_template_directory_uri(); ?>/common/css/404.css" rel="stylesheet">
        <?php endif; ?>

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

        <!-- meta tag 条件分岐-->
        <?php if(is_archive('collection')): ?>
        <meta name="description"  content="印傳博物館、展示案内のページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <meta name="keywords"  content="印傳,博物館,印傳屋,上原,勇七,山梨,伝統工芸,甲州印伝,革工芸,鹿革,漆,甲府,燻,更紗,印伝,伝統的工芸品" />
        <link rel="canonical" href="http://www.museum.jp/" />
        <meta property="og:title" content="展示案内｜MUSEUM" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.museum.jp/" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="印傳博物館" />
        <meta property="og:description" content="印傳博物館、展示案内のページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="展示案内｜MUSEUM" />
        <meta name="twitter:description" content="印傳博物館、展示案内のページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <?php elseif(is_archive('about')): ?>
        <meta name="description"  content="印傳博物館、印傳についてのページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <meta name="keywords"  content="印傳,博物館,印傳屋,上原,勇七,山梨,伝統工芸,甲州印伝,革工芸,鹿革,漆,甲府,燻,更紗,印伝,伝統的工芸品" />
        <link rel="canonical" href="http://www.museum.jp/" />
        <meta property="og:title" content="印傳について｜MUSEUM" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.museum.jp/" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="印傳博物館" />
        <meta property="og:description" content="印傳博物館、印傳についてのページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="印傳について｜MUSEUM" />
        <meta name="twitter:description" content="印傳博物館、印傳についてのページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <?php elseif(is_archive('news')): ?>
        <meta name="description"  content="印傳博物館、お知らせのページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <meta name="keywords"  content="印傳,博物館,印傳屋,上原,勇七,山梨,伝統工芸,甲州印伝,革工芸,鹿革,漆,甲府,燻,更紗,印伝,伝統的工芸品" />
        <link rel="canonical" href="http://www.museum.jp/" />
        <meta property="og:title" content="お知らせ｜MUSEUM" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.museum.jp/" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="印傳博物館" />
        <meta property="og:description" content="印傳博物館、お知らせのページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="お知らせ｜MUSEUM" />
        <meta name="twitter:description" content="印傳博物館、お知らせのページです。印傳博物館では甲州に400年以上伝わる鹿革工芸・漆工芸の印傳作品を中心に、関連する道具や絵画・書物等の資料約150点を収蔵しています。" />
        <?php endif; ?>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

        <!-- ga tag-->
        <script>
        </script>
        <?php wp_head(); ?>
    </head>
