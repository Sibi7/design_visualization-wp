<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	//ключ - slug опции, к которому будем обращаться во view
	//значение - массив конфигураций для опции
	'title' => array(
		'label' => __( 'Заголовок', '{domain}' ),
		'type'  => 'text',
		'value' => 'Студия дизайна интерьера Анны Таировой',
	),
	'text' => array(
		'label' => __( 'Описание', '{domain}' ),
		'type'  => 'wp-editor',
	),
	'photo' => array(
		'label' => __( 'Фото', '{domain}' ),
		'type'  => 'upload',
	),
	'counter' => array(
		'type' => 'addable-popup',
		'label' => __('Статистика', '{domain}'),
		'template' => 'Статистика',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'limit' => 1,
		'popup-options' => array(
			'projects' => array(
				'label' => __('Проекты', '{domain}'),
				'type' => 'text',
				'value' => '24'
			),
			'practice' => array(
				'label' => __('Опыт', '{domain}'),
				'type' => 'text',
				'value' => '5'
			),
			'works' => array(
				'label' => __('Количество часов', '{domain}'),
				'type' => 'text',
				'value' => '1500'
			),

		),
	),

];