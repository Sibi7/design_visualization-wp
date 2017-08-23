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
		'value' => ' Не тратьте свое время и деньги!',
	),
	'descriptions' => array(
		'type' => 'addable-popup',
		'label' => __('Преимущества', '{domain}'),
		'template' => '{{- dislayer }}',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'limit' => 4,
		'popup-options' => array(
			'dislayer' => array(
				'label' => __('Дизлайк', '{domain}'),
				'type' => 'text',
			),
			'like' => array(
				'label' => __('Лайк', '{domain}'),
				'type' => 'text',
			),

		),
	),

];