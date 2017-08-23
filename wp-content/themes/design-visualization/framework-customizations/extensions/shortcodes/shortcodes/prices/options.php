<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
	'title' => array(
		'label' => __('Заголовок секции', '{domain}'),
		'type' => 'text',
		'value' => 'Цены на услуги'
	),
	'price' => array(
		'type' => 'addable-popup',
		'label' => __('Цены на услуги', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => array(
			'photo' => array(
				'label' => __('Фото', '{domain}'),
				'type' => 'upload',
				'images_only' => true,
			),
			'title' => array(
				'label' => __('Заголовок', '{domain}'),
				'type' => 'text',
			),
			'services' => array(
				'type'  => 'wp-editor',
				'label' => __('Услуги', '{domain}'),
			),
			'price' => array(
				'type'  => 'text',
				'label' => __('Цена', '{domain}'),
			),
		),
	)
];