<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="container">
    <div class="time-money">
        <h2>
            <span><img src="<?php bloginfo( 'template_directory' ); ?>/img/icons/time-money-icon1.png" alt=""></span>
			<?= $atts['title']; ?>
            <span><img src="<?php bloginfo( 'template_directory' ); ?>/img/icons/time-money-icon2.png" alt=""></span>
        </h2>
        <div class="time-money__left">
			<?php if ( is_array( $atts['descriptions'] ) && ! empty( $atts['descriptions'] ) ): ?>
				<?php foreach ( $atts['descriptions'] as $key => $description ): ?>
                    <p><img src="<?php bloginfo( 'template_directory' ); ?>/img/icons/dislike.png" alt=""><span>
                            <?= $description['dislayer']; ?>
                        </span>
                    </p>
                    <p><img src="<?php bloginfo( 'template_directory' ); ?>/img/icons/like.png"
                            alt=""><span>  <?= $description['like']; ?></span>
                    </p>
				<?php endforeach; ?>
			<?php endif; ?>

        </div>
        <div class="time-money__right"></div>
    </div>
</div>