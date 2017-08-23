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
		'label' => __('Заголовок секции', '{domain}'),
		'type' => 'text',
		'value' => 'Портфолио со смыслом'
	),
	'title-description' => array(
		'label' => __('Подзаголовок', '{domain}'),
		'type' => 'text',
		'value' => 'Мы уделяем максимум внимания деталям. Ни одно из Ваших пожеланий не останется незамечанным.'
	),
	'slides' => array(
		'type' => 'addable-popup',
		'label' => __('Портфолио', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'limit' => 2,
		'popup-options' => array(
			'title' => array(
				'label' => __('Название работы', '{domain}'),
				'type' => 'text',
				'value' => 'Квартира <br> для молодой пары'
			),
			'description' => array(
				'type' => 'wp-editor',
				'label' => __('Описание работы', '{domain}'),
				'size' => 'small', // small, large
				'editor_height' => 400,
				'wpautop' => true,
				'editor_type' => false, // tinymce, html
			),
			'img' => array(
				'type' => 'multi-upload',
				'label' => __('Фотографии', '{domain}'),
				'images_only' => true,
			),
		),
	),
	'reviews' => array(
		'type' => 'addable-popup',
		'label' => __('Отзывы', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'limit' => 2,
		'popup-options' => array(
			'title' => array(
				'label' => __('Имя Фамилия', '{domain}'),
				'type' => 'text',
				'value' => 'Несмелов Кирилл'
			),
			'img' => array(
				'type' => 'multi-upload',
				'label' => __('фото', '{domain}'),
				'images_only' => true,
			),
			'description' => array(
				'type' => 'wp-editor',
				'label' => __('Текст отзыва', '{domain}'),
				'size' => 'small', // small, large
				'editor_height' => 400,
				'wpautop' => true,
				'editor_type' => false, // tinymce, html
			),

		),
	),
];