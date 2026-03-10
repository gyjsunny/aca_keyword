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

//頁籤功能
const slider = document.querySelector('.tab-wrap');
if (slider) {
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('dragging');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
    });

    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });
    window.addEventListener("load", () => {

        const container = document.querySelector('.tab-wrap');
        const active = container.querySelector('.active');

        if(!active) return;

        const activeLeft = active.offsetLeft;
        const containerWidth = container.offsetWidth;
        const scrollWidth = container.scrollWidth;

        let targetScroll = activeLeft;

        // 如果已經接近最右邊就不要強制靠左
        if(targetScroll + containerWidth > scrollWidth){
            targetScroll = scrollWidth - containerWidth;
        }

        container.scrollTo({
            left: targetScroll,
            behavior: "smooth"
        });

    });
}
//手風琴功能
if($('.full-text').length > 0){
    $('ul.full-text li > a').on('click', function () {
        let $this = $(this);
        let obj = $('ul.full-text li ');

        if ($(this).next().is(':hidden')) {
            obj.find('.stext').slideUp();
            obj.removeClass('active');
            $this.next().slideDown();
            $this.parent().addClass('active');
        } else {
            $this.next().slideUp();
            $this.parent().removeClass('active');
        }

        return false;
    });
}