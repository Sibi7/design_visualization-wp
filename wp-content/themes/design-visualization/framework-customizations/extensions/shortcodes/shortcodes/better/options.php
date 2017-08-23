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
		'label' => __( 'Заголовок', '{domain}' ),
		'type'  => 'text',
		'value' => 'Почему мы делаем дизайн лучше других?',
	),
	'descriptions' => array(
		'type' => 'addable-popup',
		'label' => __('Описание', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'limit' => 4,
		'popup-options' => array(
			'title' => array(
				'label' => __('Заголовок', '{domain}'),
				'type' => 'text',
			),
			'text' => array(
				'label' => __('Описание', '{domain}'),
				'type' => 'wp-editor',
			),
			'numbers' => array(
				'label' => __('Номер поста', '{domain}' ),
				'type' => 'text',
			)

		),
	),

];