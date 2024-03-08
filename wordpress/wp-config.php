<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'art' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e WY%(~&xWQCutPV8fBI8T >1,4<5.z6UB18Yu^u^I%OfI:?eA6UWbBI*, NNQZ7' );
define( 'SECURE_AUTH_KEY',  '{I*~l!HE4-$Rm~h{Ma8:i3!run85&zrDcK~<|/a[ILCGSLEn:^FGLn}f[[@k{*vK' );
define( 'LOGGED_IN_KEY',    '2(44oLLbe6@wARvb_Z5ya##S9yHky#!yp9*|y=D&hcr#IFe,If8?)e;:}Zh%DsEp' );
define( 'NONCE_KEY',        'B|im4L< vM7<iq*1,D.`{^k!^x7B*KstcH%/(y_zfVN@nu|E!sSYqn|_Be0A&fu0' );
define( 'AUTH_SALT',        ',@CR-M>*{hK64)n.uNXdOZEPks`Ne]O[;b]7Owdal:b_Yy>>v68r2L^=Av6|+IAk' );
define( 'SECURE_AUTH_SALT', '%(g$tby7rtXuvJxYN$nG^|>Q6bC.Ln@(nvnLN@}8RG5t6,o z.xEy,dU42i4;/e$' );
define( 'LOGGED_IN_SALT',   '>h7C[hEK2ud5QQ!T}d6f:cy6.19iKVu&g4+QZ-wr45U`ny@Py)s$FiVK{8!Z(qS}' );
define( 'NONCE_SALT',       'j;<5R`_un/,, .#niCVt222$Tc#i&<KWDTT6xn}L!{`O=]gk3xL|6)L>cI,K$c =' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
