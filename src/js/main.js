//@prepros-prepend jquery_min.js
//@prepros-prepend function.js

const $window = $(window);
const $header = $('header');
let winW, winH, footerH, bodyH, scrollTop;
let srtop = 0;

$(function () {
    window.setTimeout(function () {
        $('body').addClass('fade-in');
    }, 800);
    window.setTimeout(function () {
        revealOnScroll()
    }, 2000);
    $("#topBtn").click(function () {
        $("html,body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
    //mobile menu
    var menuicon = $('header .title-bar'),
        navBox = $('header .mmenu'),
        nav = $('header .navBox'),
        $body = $('body'),
        headerbox = $('header');
    menuicon.on('click', function () {
        var $this = $(this);
        if (!$header.hasClass('menu-expanded')) {
            $header.addClass('menu-expanded');
            nav.stop().fadeIn();
        } else {
            $header.removeClass('menu-expanded');
            nav.stop().fadeOut(function () {
                $(this).removeAttr('style');
            });
        }
        return false;
    });   
    revealOnScroll();
    $window.on('resize', function () {
        winW = $window.width();
        winH = $window.height();
        footerH = $('footer').outerHeight(true);
        if ($('#index').length < 1) {
            bodyH = winH - footerH;
        }
        //bodyH
        $('#Wapper').css('min-height', bodyH);
        
        resizeBgcover(winW);
    }).resize();

    let beforeScrollTop;
    $window.on('scroll', function () {
        scrollTop = $(this).scrollTop();
        gotopfun(scrollTop);
        revealOnScroll()
        if(beforeScrollTop < scrollTop) headerbox.addClass("navdown");
        else headerbox.removeClass("navdown");
        setTimeout(function(){ beforeScrollTop = scrollTop ; },0)
    }).scroll();
});