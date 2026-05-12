<?php
/**
 * Configuración base de WordPress
 */

/** MySQL */
define('DB_NAME', 'jovec_botiga');
define('DB_USER', 'jovec_admin');
define('DB_PASSWORD', 'Peperoni1234.');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/** URLs de WordPress: forzamos HTTP, no HTTPS */
define('WP_HOME', 'http://joveco.cat/Botiga');
define('WP_SITEURL', 'http://joveco.cat/Botiga');

/** Integración Dolibarr */
define('DOLIBARR_REST_API_URL', 'http://joveco.cat/ERP/htdocs/api/index.php');
define('DOLIBARR_REST_API_USER_KEY', '8d0c9dcf8075f9585c281c1f5702888b');

/** Claves de seguridad WordPress */
define('AUTH_KEY',         'ywj4x$i(DLr$Y1G9ahdeflFBmkMlI%c0WrbOBp28%uiotG03DL7#yG^IT2^f0lJL');
define('SECURE_AUTH_KEY',  'kIyMK@SUWhmTQrRV8o%RH^K399$LS%nOUvYb5op3vX(@PtDerOfAA%n951nZ!mdb');
define('LOGGED_IN_KEY',    '2b!v7Mm5gzMSdZkydxCZY%C%V*aaynQzcW4fVegL3H*@ndF$6n');
define('NONCE_KEY',        'vLd0H$3vyzj%N9!t4m$Jy@iPc!5h(ZnmD0**4PR0lTw%E9ITWDtFK97Kg0@T3bB@');
define('AUTH_SALT',        'WjioAeyUqwuo5a8JhmjXfZXVW4f8SOw98#Fg1zcn%wNo7PI2orKo4I#(8gh7aS2v');
define('SECURE_AUTH_SALT', '$D8nrGFFIAwjWlGYsh#u3$N6JxoJnSBxtiLQ41Fkp4wu(&RQo(kQvbH*SaOgk!tX');
define('LOGGED_IN_SALT',   '1AE91hLZ5NerBB3Bz(6DYtqAWmCRYY@biLZzleMt*w&jIEE%W2Z!eD6*4zwUSSRR');
define('NONCE_SALT',       'z5E8$Os@t(94drursq5Fa7tslrkw9&NXxH8Oz^v%udM%SFKgy7tlwRc3rCoG6Ikt');

/** Prefijo de tablas */
$table_prefix = 'wp_';

/** Idioma */
define('WPLANG', 'es_ES');

/** Debug */
define('WP_DEBUG', false);

/** Ruta absoluta */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Carga WordPress */
require_once ABSPATH . 'wp-settings.php';