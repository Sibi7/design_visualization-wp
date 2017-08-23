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
<div id="modal" class="modal_div"> <!-- скрытый див с уникaльным id = modal1 -->
    <span class="modal_close">X</span>
    <form action="#">
        <h1>Заполните форму</h1>
        <input id="v_name4" name="v_name4" type="text" class="vItem4" placeholder="Ваше имя" required>
        <input id="v_phone4" name="v_phone4" type="text" class="vItem4" placeholder="Телефон" required>
        <input id="subm4" type="submit" value="Отправить">
    </form>
</div>
<div id="overlay"></div><!-- Пoдлoжкa, oднa нa всю стрaницу -->
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
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
