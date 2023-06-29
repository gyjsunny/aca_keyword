<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="dist/css/pygments.css" />
    <link rel="stylesheet" href="dist/css/easyzoom.css" />
    <link rel="stylesheet" href="dist/css/project.css">
  </head>
  <body>
    <div class="easyzoom easyzoom--overlay easyzoom--with-toggle">
      <a
        href="https://i-like-robots.github.io/EasyZoom/example-images/3_zoom_1.jpg"
      >
        <img
          src="https://i-like-robots.github.io/EasyZoom/example-images/3_standard_1.jpg"
          alt=""
          width="640"
          height="360"
        />
      </a>
    </div>
    
    <?php include "quote/template/footer.php"; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    <script src="dist/js/swiper-bundle.min.js"></script>
	  <script src="dist/js/easyzoom.js"></script>

    <script>
        var $easyzoom = $('.easyzoom').easyZoom();
        var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

        // new Swiper(".photo", {
        //     slidesPerView: 1,
        //     centeredSlides: false,
        //     slidesPerGroupSkip: 1,
        //     // grabCursor: true,
        //     keyboard: {
        //         enabled: true,
        //     },
        //     breakpoints: {
        //         769: {
        //         slidesPerView: 2,
        //         slidesPerGroup: 2,
        //         },
        //     },
        //     pagination: {
        //         el: ".swiper-pagination",
        //         type: "fraction",
        //     },
        //     scrollbar: {
        //         el: ".swiper-scrollbar",
        //     },
        //     navigation: {
        //         prevEl: ".arrow.ltbn",
        //         nextEl: ".arrow.rtbn",
        //     },
        // });
    </script>
  </body>
</html>
