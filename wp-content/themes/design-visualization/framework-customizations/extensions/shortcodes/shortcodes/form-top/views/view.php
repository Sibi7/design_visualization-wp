<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<div class="form-top" id="form-top">
    <div class="container">
        <div class="consult__left flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php bloginfo('template_directory') ;?>/img/header-form-slide1.png"/>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ;?>/img/consult-slide2.png"/>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ;?>/img/header-form-slide1.png"/>
                </li>
            </ul>
        </div>
        <div class="consult__right">
            <h1>Закажите бесплатный выезд дизайнера на объект</h1>
            <h2>Узнайте скрытые возможности
                Вашего помещения</h2>
            <form id="header__form">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="action" value="booking">
                <!-- END Hidden Required Fields -->
                <input  id="v_name" name="v_name" type="text" class="vItem"  placeholder="Ваше имя" required>`
                <input id="v_phone" name="v_phone" type="text" class="vItem" placeholder="Телефон" required >

                <input id="subm" type="submit" value="Отправить">
            </form>
        </div>
    </div>
</div>