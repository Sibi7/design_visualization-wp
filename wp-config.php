<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'tairova');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123edsaqw');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vqOv96&Ynr{e)IcxU4Wwb3Zx>N1/Ix`7a9in+$K?Ey68}U|qWbL-_pp6#1PCzwW~');
define('SECURE_AUTH_KEY',  '}$S2.9Gi}rd}SiO=>U_f8>G6lGZbee`xFX4ma4`M3V^n1-_8C65z]qt5t}H,g6!z');
define('LOGGED_IN_KEY',    '$WAA_N=.[KE)|GKwI^aFV4]Z=,Em(+7J:t9E2qxa&|1Xwn7Co,J2|})2a(;WA^$Y');
define('NONCE_KEY',        'EZH9z7No2XZc=dphgLK&zuE~IWzkBuUC!#rI=oTg7_4;Lr[t(w#R/t=,3ufLQpaL');
define('AUTH_SALT',        '~9wsH6LYjoV2,,xEzEn42[0h[e}=%^?AD8sP9e1{v=utOKUd!@mg::8DD3LBm<Uf');
define('SECURE_AUTH_SALT', 'w(}5#fILqm-jWKV0fN-U~Yr/}.]9uVa]j!?/&wPJ9 qx7GW^o6;J&uF)@7r(ZRxU');
define('LOGGED_IN_SALT',   '2dO$#*7, `HG!4he=V(K fIK6/WqBds$Qg`sE0oaXu`btf6A-I-j(N6~7 2/tKPw');
define('NONCE_SALT',       'YlGt7~}|?<Ldk%p!9a-@nl`XACjkE~wfs6hvhQ(B596j+(8XM= ^[?[cEBs3k2>e');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
