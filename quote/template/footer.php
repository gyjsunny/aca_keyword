<footer>     
    <b class="copyright">
        Copyright © 2023 Artists. All rights reserved.<br>
        Slogan Design by Rajnish Chhanesh, all rights reserved. 
    </b><br><br>
    Special Thanks Artemas Liu
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