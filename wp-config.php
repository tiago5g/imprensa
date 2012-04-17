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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'F4IhAB}NQ3yATy@qd$ ~WnJnJJ*7C1A>/zbcC0etcm];8|RFnQ-Og:x&fYKm_%1@');
define('SECURE_AUTH_KEY',  '=>ZfRi0k:A+ ArD^m,/J]~YAj}XX*3g{WOY/wRj66ZC>Gib:%U5snz}/lMdVQg[A');
define('LOGGED_IN_KEY',    '>efT.AR%|e.MM0sm=x.nd/B]JMhWMuF5/2 OM3ztKi@4G;o)(5JLH1sYx<9.[Uvt');
define('NONCE_KEY',        'y_HDE&Z#L5Z>G)U|SMf/3!/FnzS>3{6`MYlR2zD7Ple_sn4MV8&@yq~~fFVV=Jfy');
define('AUTH_SALT',        'o.x^t2}&[uN4I?t;VTI,jA0IP(Z&@i^ikB{wNb`;ihNIFd?3$p~I^/Z)<Rw6~t*$');
define('SECURE_AUTH_SALT', 'co@~hg-u ;s<+_K!t{w!37wYi}79?~)l%D#*~|X]?/j.$FDNn>A`74UzpLIpss,7');
define('LOGGED_IN_SALT',   ';!kypw!e}H9fYGjDs!>0pFvzXj&!+ee1OT/e)egVyh75 DjkX{<pfq?5p.`sq<k6');
define('NONCE_SALT',       'aC1WK_V1q9._EuzwhrC3-MpCj%~n}xeS}q#,n}$ $HN*%-~*_dl l*KrEnM@hlYC');

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
