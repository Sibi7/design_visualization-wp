<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section id="about" class="about">

    <div class="container">
        <div class="about__left">
            <img src="<?= $atts['photo']['url'];?>" alt="">
        </div>
        <div class="about__right">
            <h1>
                <?= $atts['title'];?>
            </h1>
	        <?= $atts['text'];?>
            <div class="about__right__count">
                <p><span class="js-counter"><?= $atts['counter']['0']['projects'];?></span><span>проекта</span></p>
                <p><span class="js-counter"><?= $atts['counter']['0']['practice'];?></span> лет <span>опыта</span></p>
                <p><span class="js-counter"><?= $atts['counter']['0']['works'];?></span>часов<span>работы</span></p>
            </div>
        </div>
    </div>
</section>
