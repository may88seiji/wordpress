(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize and Configure Scroll Reveal Animation
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);

    // Initialize and Configure Magnific Popup Lightbox Plugin
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });
    
    //Modal
    $('.modal_target').on('click', function () {
        var $width = $(window).width();
        if( 769 < $width ){
            var index = $('.modal_target').index(this);
            updateModal(index);
        }
    });
    
    //モーダル左矢印
    $('.arrow_left').on('click', function () {
        var index = parseInt($('#myModal').attr( 'data-index' ));
        updateModal( index - 1 );
    });
    
    //モーダル右矢印
    $('.arrow_right').on('click', function () {
        var index = parseInt($('#myModal').attr( 'data-index' ));
        updateModal( index + 1 );
    });

    /**
     * モーダルの表示を更新
     */
    function updateModal(index) {
        $('#myModal').attr( 'data-index', index );
        var $triggerObj = $('.modal_target:eq('+index+')');
        
        var $next_img = $triggerObj.attr('data-img');
        $('.modal-body').children('.modal_img').attr('src', $next_img);
        
        //次の画像のタイトルを取得 表示
        var alt = $triggerObj.find('img').attr("alt");
        $('.modal_title').text(alt);
        
        if( index <= 0 ){
            //画像1のときに左の矢印を隠す
            $('.arrow_left').hide();
            $('.arrow_right').show();
        }else if( index >= $('.modal_target').length - 1 ){
            //画像最大数のときに右の矢印を隠す
            $('.arrow_left').show();
            $('.arrow_right').hide();
        }else{
            $('.arrow_left').show();
            $('.arrow_right').show();
        }
    }
    
    $(function(){
        // PAGETOP FADEIN
        $("#pageTop").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 400) {
                    $('#pageTop').fadeIn();
                } else {
                    $('#pageTop').fadeOut();
                }
            });
            // PAGETOP SCROLL
            $('#pageTop').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800,
                                       "swing");
                return false;
            });
        });
    });
    
    $(function () {
        // scroll_bottom
        $('[id^=scroll_bottom]').click(function () {
            $('body,html').animate({
                scrollTop: $(document).height()
            }, 800,
                                   "easeInSine");
            return false;
        });
    });
    
    //グロナビのアイコン切り替えの関数
    function openNav(){
//        $('.icon_hamburger').stop().addClass('hidden-xs');
        $('.icon_hamburger').stop().addClass('active');
//        $('.icon_close').stop().removeClass('hidden-xs');
    }
    
    function closeNav(){
//        $('.icon_hamburger').stop().removeClass('hidden-xs');
        $('.icon_hamburger').stop().removeClass('active');
//        $('.icon_close').stop().addClass('hidden-xs');
    }
    
    //toggleNav の実行
    $('.navbar-toggle').on('click', function(){
        if($('.navbar-collapse').hasClass('in')){
            closeNav();
        }else{
            openNav();
        }
    });
    
    $('#scroll_bottom_sp').on('click', function(){
        closeNav();
    });
    
    
    $(function(){
        $(window).scroll(function(){ 
            //スクロール量を取得
            var $scrollTop = $(this).scrollTop();
            if( $scrollTop > 400){
                if($('.navbar-collapse').hasClass('in')){
                    closeNav();
                    $('.navbar-collapse').removeClass('in');
                }
            }
        });
    });

    
//    メニューを開いている時は画面固定
//    $(function(){
//        var state = false;
//        var scrollpos;
//        $('.navbar-toggle,.nav_close').on('click touch', function(){
//            if(state == false) {
//                scrollpos = $(window).scrollTop();
//                $('body').addClass('fixed').css({'top': -scrollpos});
//                $('.navbar-collapse').addClass('open');
//                state = true;
//            } else {
//                $('body').removeClass('fixed').css({'top': 0});
//                window.scrollTo( 0 , scrollpos );
//                $('.navbar-collapse').removeClass('open');
//                state = false;
//            }
//        });
//    });

    //お知らせ 印傳について 展示情報 の高さを動的に調整
    $(window).on('load resize', function(){
        var $height = $("#item_height").css('height');
        $('.title_item,.item_box>div').css({ height : $height });
    });
    
    //フォームバリデーションの文字入れ替え
    $(function(){
        $('.error').each(function(){
            var txt = $(this).html();
            $(this).html(txt.replace("必須項目です。","※個人情報の取扱をご確認ください。"));
        });
    });
    
    //slide
    $(function(){
        // 設定
        var $width = 100; // 横幅
        var $height =675; // 高さ
        var $interval = 4000; // 切り替わりの間隔（ミリ秒）
        var $fade_speed = 1500; // フェード処理の早さ（ミリ秒）
        $("#slide ul li").css({"position":"relative","overflow":"hidden","width":$width + "%","height":$height});
        $("#slide ul li").hide().css({"position":"absolute","top":0,"left":0});
        $("#slide ul li:first").addClass("active").show();
        setInterval(function(){
            var $active = $("#slide ul li.active");
            var $next = $active.next("li").length?$active.next("li"):$("#slide ul li:first");
            $active.fadeOut($fade_speed).removeClass("active");
            $next.fadeIn($fade_speed).addClass("active");
        },$interval);
    });
    
})(jQuery); // End of use strict
