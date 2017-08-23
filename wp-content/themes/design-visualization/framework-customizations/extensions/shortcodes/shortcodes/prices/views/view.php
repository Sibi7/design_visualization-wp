<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div id="services" class="prices">
    <div class="container">
        <h2>
            <span><img src="<?php bloginfo('template_directory') ;?>/img/icons/time-money-icon1.png" alt=""></span>
	        <?= $atts['title']; ?>
            <span><img src="<?php bloginfo('template_directory') ;?>/img/icons/time-money-icon2.png" alt=""></span>
        </h2>
        <?php if(is_array($atts['price']) && !empty($atts['price'])): ?>
            <?php foreach($atts['price'] as$key => $att ): ?>
                <div class="prices__block">
                    <div class="prices__block--top">
                        <img src="<?= $att['photo']['url'];?>" alt="">
                        <div><h2><?= $att['title'];?></h2></div>
                    </div>
                    <div class="prices__block--bottom">
	                    <?= $att['services'];?>
                        <h2> <?= $att['price'];?></h2>
                        <a href="#modal" class="open_modal">Заказать дизайн</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="prices__abstraction"></div>
</div>
<div class="clearfix"></div>
