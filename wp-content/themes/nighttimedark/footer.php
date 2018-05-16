<footer class="footer">
        <p class="footer__p">Backyard Astrophotography</p>
        <div class="footer__search">
            <form action="" class="footer__form">
                <input type="text" class="footer__form--input" name="search">
                <input type="submit" class="footer__form--submit" name="submit" value="Search">
            </form>
        </div>
        <nav class="footer__nav">
            <ul class="footer__ul">
                <li class="footer__li"><a href="" class="footer__a footer__a--select u-link-no-style">Home</a></li>
                <li class="footer__li"><a href="blog/" class="footer__a u-link-no-style">Blog</a></li>
                <li class="footer__li"><a href="gallery/" class="footer__a u-link-no-style">Gallery</a></li>
                <li class="footer__li"><a href="about/" class="footer__a u-link-no-style">About</a></li>
            </ul>
        </nav>
        <div class="footer__cta">
            <p class="footer__cta--txt">Want to receive updates?<span><a class="footer__cta--link" href="<?php echo get_bloginfo('template_directory'); ?>/#">Subscribe</a></span></p>
            
        </div>
    </footer>
    <div class="popup" id="js--img-popup">
        <div class="popup__container">
            <span class="popup__close" id="js--popup-close">&times;</span>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/system/filler3x2.jpg" alt="Sombrero Galaxy 5-7-18" class="popup__img" id="js--popup-img">
        </div>
    </div>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/script.js"></script>
    <?php wp_footer(); ?> 
</body>
</html>
<style>
    html {
        margin-top: 0 !important;
    }
</style>