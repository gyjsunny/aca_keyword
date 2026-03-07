<footer>     
    <b class="copyright">
        COPYRIGHT © 2025 ARTISTS. ALL RIGHTS RESERVED. <br>
        SLOGAN DESIGN BY RAJNISH CHHANESH, <br>
        LOGO DESIGN BY CHERIE LIANG, ALL RIGHTS RESERVED.
    </b><br><br>
    keywordartstudio@gmail.com
</footer>
<script src="dist/js/main.js"></script>

<script>
    $('a[href*=#]:not([href=#])').click(function() {
            let target = $(this.hash);
            let move = target.offset().top
           
            $('html,body').animate({

                scrollTop: move - 80

            }, 600);

            return false;

        });
</script>