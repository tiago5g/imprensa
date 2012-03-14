<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'imprensa');

/** MySQL database username */
define('DB_USER', 'imprensa');

/** MySQL database password */
define('DB_PASSWORD', 'imprensa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/-~,;wy|o},&D~].Cf]/m%c/%n4v%v+3{3l=?VK3$/6<)OY7 SQV3B#9,)*$$2O@');
define('SECURE_AUTH_KEY',  'Y=beNLn|ksWc!7wy9&L(PG*%iu)COHdSb?.NM_oL+P2@/&uxk-BI|_(*#{uRY-,-');
define('LOGGED_IN_KEY',    '|*Miv4dk=a:6L)~5[Yv+:taNXT!Fz+rpLqf0+ob<-_2T=*WvWQTYp}~Z;99~o%WH');
define('NONCE_KEY',        'khO42$|h}U&Qy)N0Hpd@K3)AU{; UE@h-:5e 7(vKb-#7r_S|3GKfoSDz+Y6~%se');
define('AUTH_SALT',        'U7[B24rCjd2/`||;!o|1Aki[Q2ohj_a-|<[3|U+i3@0@8$)P=99g%NqmBQ|Y;siX');
define('SECURE_AUTH_SALT', '08lUMExRRk3&aL1u:gY-|S Clc-QNe5y?xQ:(pjGcklCB,Ru!Z{4?1Q8d+~T:Z I');
define('LOGGED_IN_SALT',   '43Sd|X|uNR9A/evRG*-&U`%ApsO-?_7E]K7NxFpSI!=2`/f4~H.fUW??E]w3Vz%2');
define('NONCE_SALT',       ']@9<Gd(T|EEimz_z-Ca-:F~VNQ4_slya}n1B)Ysvm!Jz`AP9_ 1cEp%qbg5o*<.N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
