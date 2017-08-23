<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head lang="ru">
    <link rel="icon" href="<?php bloginfo('template_directory') ;?>/img/icons/favicon.ico"; type="image/x-icon" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ;?>/img/icons/favicon.ico"; type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory') ;?>/img/icons/favicon.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=1400">
    <meta name="format-detection" content="telephone=no">

	<?php wp_head(); ?>
</head>

<body>
<header id="top" class="header">
    <div class="container">
        <div class="header__logo">
            <a href="/">
                <img src="<?php bloginfo('template_directory') ;?>/img/logo.png" alt="">
            </a>
        </div>
        <div class="header__contacts">
            <span><i class="fa fa-envelope" aria-hidden="true"></i> info@studioart.com</span>
            <span><i class="fa fa-phone" aria-hidden="true"></i> 8-927-650-14-44</span>
        </div>
    </div>
</header>
