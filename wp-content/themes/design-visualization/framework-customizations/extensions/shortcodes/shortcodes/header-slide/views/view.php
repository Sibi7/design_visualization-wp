<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="header-slide">

    <div class="header-slide__img" style="background-image: url(<?= $atts['background_img']['url']; ?>)"></div>
    <div class="container">
        <div class="header-slide__sidebar">
            <a href="#" class="icon-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span>Меню</span>
            </a>

            <div class="menu">

                <div class="icon-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="#top">Главная</a></li>
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#services">Наша услуги</a></li>
                    <li><a href="#about">О нас</a></li>
<!--                    <li><a href="#notice">FAQ</a></li>-->
                </ul>
            </div>

        </div>
        <div class="header-slide__content">
            <div class="header-slide__content__wrap">
                <h1><?= $atts['title_lvl_1']; ?></h1>
                <h2><?= $atts['title_lvl_2']; ?></h2>
                <a class="bonce" href="#form-top">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/icons/triangle.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
