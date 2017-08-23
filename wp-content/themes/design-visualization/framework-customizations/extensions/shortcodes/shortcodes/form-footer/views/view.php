<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="consult" id="consult">
    <div class="container">
        <div class="consult__left flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php bloginfo('template_directory') ;?>/img/consult-slide1.png"/>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ;?>/img/consult-slide2.png"/>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ;?>/img/consult-slide3.png"/>
                </li>
            </ul>
        </div>
        <div class="consult__right">
            <h2><?= $atts['title'];?></h2>
            <p><?= $atts['desc'];?></p>
            <form>
                <input id="v_name2" name="v_name2" type="text" class="vItem2" placeholder="Ваше имя" required>
                <input id="v_phone2" name="v_phone2" type="text" class="vItem2" placeholder="Телефон" required>
                <input id="subm2" type="submit" value="Отправить">
            </form>
        </div>
    </div>
</div>
