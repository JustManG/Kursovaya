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
define('DB_NAME', 'co-operative');

/** Имя пользователя MySQL */
define('DB_USER', 'malice');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'malice');

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
define('AUTH_KEY',         '?1M.+2R8@cx(J)3H},y<#W d2el-Z%w,3sZ/zqbINbVyEVlzPVeg|rb-5[=2 ^,N');
define('SECURE_AUTH_KEY',  'a1_@|dpC]y%$gKqABuo@F;*-KM%$.$ddKA8D%#ikOefA|,4YzX`:P32ThfWub-mW');
define('LOGGED_IN_KEY',    '(=7:{^zfr +G;Z1[=PDgT/eN$cZ9+-9h;,`s,:1yNV;P*;Dm+H=KTd{jdF%w?MH+');
define('NONCE_KEY',        'Oi2/KSn- <~]KgZq,Q~D!V-XyQD(}F#SaY0WE-rLy;9pwAx|Y->h^L::oV:U%h7)');
define('AUTH_SALT',        'HT}.,J8;Fqvxvo1 4w^yE_^[0(jH&Mn{J+;v3+e2E3|Va*-=L)#A:2)jx^+r@.w~');
define('SECURE_AUTH_SALT', '#d%@_g2iQ]$,h>GJH1JNfOZI9}qlh#) &J|Wenb#sNi{3xI68pZmT6jB0~|nqifN');
define('LOGGED_IN_SALT',   '!(],7>cu|dR)@88nhf1[8Se{I@;_[nfrJ# t?>laL|Xl}*y,,^Gt)n+9(ImD6$!l');
define('NONCE_SALT',       ']$4u$LxZ)Or#oFHPE%`cPRr0/zy*uz;+8B0_jO=pa* Az3 !=</t-9OdL$Yi<tcy');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'coop_';

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
