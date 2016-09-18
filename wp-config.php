<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wppiebohmaivee3bair7xeZ2ohlech4lah');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'e,Ow@zA|7VhH>wtef|!e[U_@gp*e4_%V4e-<>%!{iTJ+Fh|kcfY6k4wL0){LWA[t');
define('SECURE_AUTH_KEY',  'zB4Z83fWK3eg1yj:-##WgB[eYOw3(ivJuL=W$>i|OQ$l4,4s.E%s^S,DL?sD[~]Y');
define('LOGGED_IN_KEY',    '!KpNGh!*2.T4.<yIOu34QJi#o|M-7`ob4|^9V24en>3M9>eU+(AcDR^eYv,jbSV=');
define('NONCE_KEY',        'IN!-GlWZ93bXOdlxYIC0+:P[$4+0=7DybHr.6?z^-?[whY&Z1M&im7W!8TKrF;a(');
define('AUTH_SALT',        'Mwos{@Ytw`];>o2FB)^ZVZyD%9hl OAhx$;E-/>/WlA6m|q~KFm+xRA,Eid}T?bU');
define('SECURE_AUTH_SALT', ';$:B+!HyKy{DwIPF%2<|a~4+kq_@C)^_OpdG`+kE Mg0}NZD%aumW(Ej+|-o*II1');
define('LOGGED_IN_SALT',   '|r/ly&D#$CV D,E![puS_bft@M)4,,&hq_ra%-S,$xD-TEzhw||C6QYr7yXKw|.-');
define('NONCE_SALT',       'Ds}J!D{S<rMFo)Uz#9$+D#|K35.8}M#U/ZWxWJ-m|_9K[[(8b-cMdV8Sve6#t}DL');

$table_prefix = 'wp_';

define('DISALLOW_FILE_EDIT', true);
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

