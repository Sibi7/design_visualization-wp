<?php
// Бекенд

/**
 * Дебаг переменной
 */
// fw_print($value);


/**
 * Рендер шаблона
 */
// fw_render_view($file_path, $view_variables = [])

/**
 * AJAX
 *
 * @link
 */
//Регестрируем экшны для обработки аякса
//add_action( 'wp_ajax_НАЗВАНИЕ_ЭКШЕНА', 'НАЗВАНИЕ_МЕТОДА' );
//add_action( 'wp_ajax_nopriv_НАЗВАНИЕ_ЭКШЕНА', 'НАЗВАНИЕ_МЕТОДА' );
//
add_action( 'wp_ajax_booking', 'sendBookingForm' );
add_action( 'wp_ajax_nopriv_booking', 'sendBookingForm' );

function sendBookingForm() {
	if ( $_POST ) {
		// обрабатываем запрос
		$msg = 'Вам отправили заявку на бронирование <br>';

		$msg .= 'Имя:' . $_POST['name'] . '<br>';
		$msg .= 'Телефон: ' . $_POST['phone'] . '<br>';

		$adminEmail = 'info@annatairova.ru';


		if(wp_mail( $adminEmail, 'Заявка на бронирование', $msg, 'Content-type: text/html' )) {
			wp_send_json($_POST);
		} else {
			wp_send_json([
				'status' => 'error',
				'message' => 'Ошибка при отправке формы. Попробуйте еще раз'
			]);
		}
	}
}

