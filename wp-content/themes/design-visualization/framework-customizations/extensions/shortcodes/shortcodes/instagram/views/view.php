<?php use MetzWeb\Instagram\Instagram;

if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
require_once get_template_directory().'/includes/Instagram.php';
$instagram = new Instagram(array(
	'apiKey' => '316325932da243609c11bda7633e7b23',
	'apiSecret' => '4080e8d6570a48c291fd13bd48fe35de',
	'apiCallback' => 'http://instagram.loc'
));
$instagram->setAccessToken('3284640076.3163259.d9be0a2ca3044a42a167e2201e8c751a');

$media = $instagram->getUserMedia();

?>
<div class="instagram">
    <div class="container">
        <div class="instagram__image-wrapper">
            <div class="owl-carousel">
                <?php foreach ($media->data as $item): ?>
                    <a href="https://www.instagram.com/designsamara">
                        <img src="<?php echo $item->images->low_resolution->url?>" alt="">
                    </a>
                <?php endforeach; ?>
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //echo $item->images->low_resolution->url?><!--" alt="">-->
<!--                </a>-->
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //bloginfo( 'template_directory' ); ?><!--/img/better1.png" alt="">-->
<!--                </a>-->
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //bloginfo( 'template_directory' ); ?><!--/img/better1.png" alt="">-->
<!--                </a>-->
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //bloginfo( 'template_directory' ); ?><!--/img/better1.png" alt="">-->
<!--                </a>-->
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //bloginfo( 'template_directory' ); ?><!--/img/better1.png" alt="">-->
<!--                </a>-->
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //bloginfo( 'template_directory' ); ?><!--/img/better1.png" alt="">-->
<!--                </a>-->
<!--                <a href="instagram.com">-->
<!--                    <img src="--><?php //bloginfo( 'template_directory' ); ?><!--/img/better1.png" alt="">-->
<!--                </a>-->
            </div>

        </div>
    </div>
</div>
