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
	'title-lvl-1' => array(
		'label' => __('Заголовок первого уровня', '{domain}'),
		'type' => 'text',
		'value' => 'ДИЗАЙН&ВИЗУАЛИЗАЦИЯ',
	),
	'title-lvl-2' => array(
		'label' => __('Заголовок второго уровня', '{domain}'),
		'type' => 'text',
		'value' => 'уникальные интерьерные решения',
	),
	'background-img' => array(
		'type' => 'upload',
		'label' => __('Фоновое изображение', '{domain}'),
		'images_only' => true,
	),
];