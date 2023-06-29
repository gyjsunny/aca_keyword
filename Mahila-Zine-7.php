<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/swiper-bundle.min.css">
<link rel="stylesheet" href="dist/css/pygments.css" />
<link rel="stylesheet" href="dist/css/easyzoom.css" />
<link rel="stylesheet" href="dist/css/project.css">
</head>

<body>
    <?php
    // include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <div id="Wapper">
        <div class="bread">
            <a href="./">HOME</a>
            <a href="project.php">PROJECT</a>
            <a href="The-footprints-of-Maroon.php">The footprints of Maroon</a>
            <a class="active">Mahila Zine 7</a>
        </div>        
        <section class="row">
            <div class="col-auto text-center">
                <div class="mb-2 fs24">
                    <b>Vichar K Achaar</b>
                    <span class="tag">#Lockdown</span>
                </div>
                
                <h1 class="h1title">Mahila Zine 7</h1>
                <div class="title-line"></div>         
            </div>
        </section>
        <section class="photoWrap mpsrel">
            <div class="mpsrel swiperbox">
                <div class="swiper photo">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="dist/images/pexels-simon-berger-1266810.jpg">
                            <img src="dist/images/pexels-simon-berger-1266810.jpg" alt=""/> 
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="dist/images/The-footprints-of-Maroon/1 973.png">
                                <img src="dist/images/The-footprints-of-Maroon/1 973.png" alt=""/>
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="dist/images/The-footprints-of-Maroon/1 973.png">
                                <img src="dist/images/The-footprints-of-Maroon/1 973.png" alt=""/>
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true" alt=""/>
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true" alt=""/>
                            </a>
                        </div>
                        </div>
                </div>   
                <div class="arrow ltbn">
                    <img src="dist/images/chevron-left.png">
                    <i>PREV</i>
                </div>
                <div class="arrow rtbn">
                    <i>NEXT</i>
                    <img src="dist/images/chevron-right.png">
                </div>   
            </div>              
            <div class="control-btn mpsrel">
                <div class="swiper-pagination"></div>
                <div class="swiper-scrollbar"></div>
            </div>  
        </section>
    </div> 
    <?php include "quote/template/footer.php"; ?>
    <script src="dist/js/swiper-bundle.min.js"></script>
	<script src="dist/js/easyzoom.js"></script>

    <script>
        new Swiper(".photo", {
            slidesPerView: 1,
            centeredSlides: false,
            slidesPerGroupSkip: 1,
            // grabCursor: true,
            keyboard: {
                enabled: true,
            },
            breakpoints: {
                769: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            navigation: {
                prevEl: ".arrow.ltbn",
                nextEl: ".arrow.rtbn",
            },
        });
        var $easyzoom = $('.easyzoom').easyZoom();
    </script>
</body>

</html>