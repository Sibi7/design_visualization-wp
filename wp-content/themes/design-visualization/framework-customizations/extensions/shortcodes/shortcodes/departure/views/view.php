<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="departure" id="departure">
	<div class="container">
		<div class="departure__left">
			<p>Закажите бесплатный выезд дизайнера на объект</p>
			<h2>Узнайте скрытые возможности Вашего помещения</h2>
		</div>
		<div class="departure__right">
            <form>
                <!-- Hidden Required Fields -->
                <input type="hidden" name="action" value="booking">
                <!-- END Hidden Required Fields -->
                <input id="v_name1" name="v_name1" type="text" class="vItem1" placeholder="Ваше имя" required>
                <input id="v_phone1" name="v_phone1" type="text" class="vItem1" placeholder="Телефон" required>
                <input id="subm1" type="submit" value="Отправить">
            </form>
		</div>
	</div>
</div>