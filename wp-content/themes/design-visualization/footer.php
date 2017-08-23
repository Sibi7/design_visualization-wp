<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>
<footer class="footer">
    <div class="container">
        <a href="#" class="footer__logo">
            <img src="<?php bloginfo('template_directory') ;?>/img/logo.jpg" alt="">
        </a>
        <ul class="footer__menu">
            <li><a href="#top">Главная</a></li>
            <li><a href="#portfolio">Портфолио</a></li>
            <li><a href="#services">Наши услуги</a></li>
            <li><a href="#about">О нас</a></li>
            <li><a href="#notice">FAQ</a></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
