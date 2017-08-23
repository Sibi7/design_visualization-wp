<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="better">
    <div class="better__head">
        <div class="container"><h2><?= $atts['title'];?></h2></div>
    </div>
    <div class="clearfix"></div>
    <div class="container">

        <div class="better__left">
            <img class="animated" src="<?php bloginfo('template_directory') ;?>/img/better1.png" alt="">
            <img class="animated" src="<?php bloginfo('template_directory') ;?>/img/better3.png" alt="">
        </div>
        <div class="better__center">

            
            <?php if(is_array($atts['descriptions']) && !empty($atts['descriptions'])): ?>
                <?php foreach($atts['descriptions'] as $key => $description): ?>
                    <div class="better__block">
                        <h3><?= $description['numbers'] ;?></h3>
                        <div class="better__block--dot animated"></div>
                        <div class="better__block--text">
                            <h2><?= $description['title'] ;?></h2>
	                        <?= $description['text'] ;?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="better__right">
            <img class="animated" src="<?php bloginfo('template_directory') ;?>/img/better2.png" alt="">
            <img class="animated" src="<?php bloginfo('template_directory') ;?>/img/better4.png" alt="">
        </div>

    </div>
</div>
