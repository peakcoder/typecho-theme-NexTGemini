/*
* 右侧固定按钮的操作
  （1）回到顶部
  （2）显示二维码
*/

$(document).ready(function() {
    var mobileWith = 1095; //当宽度大于该值时，在文章外部显示按钮。否则在文章内部显示，是移动版本。

    if ($(window).width() >= mobileWith) {
        //初始化右侧固定按钮的位置
        $('.right-layer').css('left', $('.content-wrap').offset().left + $('.content-wrap').outerWidth() + 5 + 'px');
        //$('.right-layer').css('bottom', (document).height() - $('.footer').offset().top + 32 +'px');
    }

    //如果从向下移动50个像素，则显示
    if ($(window).scrollTop() > 50) {
        $(".site-back-to-top").show();
    }

    //宽口更改时，需要重新固定右侧面板的位置
    $(window).resize(function() {
        if ($(window).width() >= mobileWith) {
            $('.right-layer').css('left', $('.content-wrap').offset().left + $('.content-wrap').outerWidth() + 5 + 'px');
        } else {
            $('.right-layer').css('left', 'inherit').css('right', '10px');
        }
    });

    $(window).scroll(function() {
        /*
        if ( $(document).scrollTop() + $(window).height() + 32 > $('.footer').offset().top ) {
          $('.right-layer').css('bottom', 
           $(document).scrollTop() + $(window).height() - $('.footer').offset().top + 32 +'px');
        }else{
            $('.right-layer').css('bottom', 10 +'px');

        }
        */
        if ($(window).width() >= mobileWith) {
            $('.right-layer').css('left', $('.content-wrap').offset().left + $('.content-wrap').outerWidth() + 5 + 'px');
        } else {
            $('.right-layer').css('right', '10px');
        }

        if ($(window).scrollTop() > 50) {
            $(".site-back-to-top").fadeIn(200);
        } else {
            $(".site-back-to-top").fadeOut(200);
        }
    });

    //动画过渡的形式回到顶部
    $(".site-back-to-top").click(function() {
        $('body,html').animate({ scrollTop: 0 }, 300);
        return false;
    });

    //显示二维码
    $(".site-qrcode-btn").hover(
        function() { //鼠标移动到上面时候
            $(".site-qrcode-img").css('left', $('.right-layer').offset().left - $(".site-qrcode-img").outerWidth() + 'px');
            $(".site-qrcode-img").css('bottom', parseInt($('.right-layer').css('bottom')) + 'px');
            $(".site-qrcode-img").show();
        },
        function() { //鼠标移出时
            $(".site-qrcode-img").hide();
        }
    );
});