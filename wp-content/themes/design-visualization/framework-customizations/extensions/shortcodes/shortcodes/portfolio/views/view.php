<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section id="portfolio" class="portfolios-meaning">
    <div class="container">
        <div class="portfolios-meaning__absolute">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/vector-icon1.png" alt="">
        </div>
        <div class="portfolios-meaning__absolute-2">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/vector-icon2.png" alt="">
        </div>
        <h1><?= $atts['title']; ?></h1>
        <h2><?= $atts['title_description']; ?></h2>
        <div class="portfolios-meaning__left">
            <h1>
				<?= $atts['slides']['0']['title']; ?>
            </h1>
            <p>
				<?= $atts['slides']['0']['description']; ?>
            </p>
            <div class="portfolios-meaning__left__border"></div>
            <div class="portfolios-meaning__left__user">
                <div class="portfolios-meaning__left__user__photo">
                    <img src="<?= $atts['reviews']['0']['img']['0']['url']; ?>" alt="">
                </div>

                <div class="portfolios-meaning__left__user__text">
                    <h2><?= $atts['reviews']['0']['title']; ?></h2>
                    <p>
						<?= $atts['reviews']['0']['description']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="portfolios-meaning__right">
            <div id="slider1" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartment-family/1.jpg"/>
                        <div class="portfolios-meaning__right__add-item">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item__content">
                                В гостиной мы выбрали красный ковер с бахромой и в зоне чтения книг повесели картину
                                современного искусства.
                            </div>
                        </div>
                        <div class="portfolios-meaning__right__add-item">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item__content">
                                в зоне чтения книг повесели картину современного искусства.
                            </div>
                        </div>

                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartment-family/2.jpg"/>
                        <div class="portfolios-meaning__right__add-item-2">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item-2__content">
                                Изголовья спальни сделали с 3д эффектом, в этом нам помогли крашенные в черный цвет
                                панели из гипса.
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartment-family/3.jpg"/>
                        <div class="portfolios-meaning__right__add-item-3">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item-3__content">
                                Декоративная стена из красного камня плавно переходит на балкон.
                            </div>
                        </div>
                        <div class="portfolios-meaning__right__add-item-3">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item-3__content">
                                Современные бра усиливают эстетическое восприятие
                            </div>
                        </div>
                        <div class="portfolios-meaning__right__add-item-3">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item-3__content">
                                На кухне решено было поставить круглый стол и за небольшой площади.
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartment-family/4.jpg"/>
                        <div class="portfolios-meaning__right__add-item-4">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item-4__content">
                                Современные бра усиливают эстетическое восприятие.
                            </div>
                        </div>
                        <div class="portfolios-meaning__right__add-item-4">
                            <span>+</span>
                            <div class="portfolios-meaning__right__add-item-4__content">
                                Декоративная стена из красного камня плавно переходит на кухню.
                            </div>
                        </div>
                    </li>
					<?php if ( is_array( $atts['slides']['0']['img'] ) && ! empty( $atts['slides']['0']['img'] ) ): ?>
						<?php foreach ( $atts['slides']['0']['img'] as $key => $att ): ?>
                            <li>
                                <img src="<?= $att['url']; ?>"/>
                            </li>
						<?php endforeach; ?>
					<?php endif; ?>
                </ul>
            </div>
            <div id="carousel1" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartament-family-thumb/1.png"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartament-family-thumb/2.png"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartament-family-thumb/3.png"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/apartament-family-thumb/4.png"/>
                    </li>
					<?php if ( is_array( $atts['slides']['0']['img'] ) && ! empty( $atts['slides']['0']['img'] ) ): ?>
						<?php foreach ( $atts['slides']['0']['img'] as $key => $att ): ?>
                            <li>
                                <img src="<?= $att['url']; ?>"/>
                            </li>
						<?php endforeach; ?>
					<?php endif; ?>
                    <!-- items mirrored twice, total of 12 -->
                </ul>
            </div>
        </div>
    </div>

</section>
<div class="clearfix"></div>
<!-- start portfolio-meaning-right-->
<section class="portfolios-meaning-right">
    <div class="container">
        <div class="portfolios-meaning-right__right">
            <div id="slider2" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon/1.jpg"/>
                        <div class="portfolios-meaning-right__right__add-item">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item__content">
                                Также в интерьере ,в качестве декора используются настоящие цветы-Орхидеи, для них были
                                созданы геометрические высокие столики и скрытая подсветка в потолке.
                            </div>
                        </div>
                        <div class="portfolios-meaning-right__right__add-item">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item__content">
                                При входе в зал ,по левую сторону расположена вместительная, скрытая система хранения.
                            </div>
                        </div>
                        <div class="portfolios-meaning-right__right__add-item">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item__content">
                                Было решено , задекорировать наружные стены санузла -мягкими панелями, в цвет мягкой
                                зоны у окна.
                            </div>
                        </div>
                        <div class="portfolios-meaning-right__right__add-item">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item__content">
                                За основу данного проекта взяты природные материалы-камень и дерево.
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon/2.jpg"/>
                        <div class="portfolios-meaning-right__right__add-item-2">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item-2__content">
                                Для обивки мы выбрали материал с замшевым выбитым рисунком.
                            </div>
                        </div>
                        <div class="portfolios-meaning-right__right__add-item-2">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item-2__content">
                                Для ожидания создана мягкая зона ,что позволяет клиентам выпить чай и скоротать время.
                            </div>
                        </div>
                        <div class="portfolios-meaning-right__right__add-item-2">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item-2__content">
                                Стены декорированы –популярным гипсовым камнем , покрашен в бело кремовый цвет.
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon/3.jpg"/>
                        <div class="portfolios-meaning-right__right__add-item-3">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item-3__content">
                                Также в интерьере ,в качестве декора используются настоящие цветы-Орхидеи, для них были
                                созданы геометрические высокие столики и скрытая подсветка в потолке.
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon/4.jpg"/>
                        <div class="portfolios-meaning-right__right__add-item-4">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item-4__content">
                                Стены декорированы –популярным гипсовым камнем , покрашен в бело кремовый цвет.
                            </div>
                        </div>
                        <div class="portfolios-meaning-right__right__add-item-4">
                            <span>+</span>
                            <div class="portfolios-meaning-right__right__add-item-4__content">
                                Легкие белые тюли, пропускают солнечный свет.
                            </div>
                        </div>
                    </li>
					<?php if ( is_array( $atts['slides']['1']['img'] ) && ! empty( $atts['slides']['1']['img'] ) ): ?>
						<?php foreach ( $atts['slides']['1']['img'] as $key => $att ): ?>
                            <li>
                                <img src="<?= $att['url']; ?>"/>
                            </li>
						<?php endforeach; ?>
					<?php endif; ?>
                </ul>
            </div>
            <div id="carousel2" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon-thumb/1.png"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon-thumb/2.png"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon-thumb/3.png"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/beauty-saloon-thumb/4.png"/>
                    </li>
					<?php if ( is_array( $atts['slides']['1']['img'] ) && ! empty( $atts['slides']['1']['img'] ) ): ?>
						<?php foreach ( $atts['slides']['1']['img'] as $key => $att ): ?>
                            <li>
                                <img src="<?= $att['url']; ?>"/>
                            </li>
						<?php endforeach; ?>
					<?php endif; ?>
                    <!-- items mirrored twice, total of 12 -->
                </ul>
            </div>
        </div>
        <div class="portfolios-meaning-right__left">
            <h1>
				<?= $atts['slides']['1']['title']; ?>
            </h1>
			<?= $atts['slides']['1']['description']; ?>
            <div class="portfolios-meaning-right__left__border"></div>
            <div class="portfolios-meaning-right__left__user">
                <div class="portfolios-meaning-right__left__user__photo">
                    <img src="<?= $atts['reviews']['1']['img']['0']['url']; ?>" alt="">
                </div>
                <div class="portfolios-meaning-right__left__user__text">
                    <h2><?= $atts['reviews']['1']['title']; ?></h2>
                    <p>
						<?= $atts['reviews']['1']['description']; ?>
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>
<div class="clearfix"></div>