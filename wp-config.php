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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{>JBa,93&FBdppX+Dv.Pu57<I8pv0RjbHCmk5J}Ch(c5B&NVbF2^D?EHn8@2*I*H');
define('SECURE_AUTH_KEY',  '4[ 1cBdcMr{|qSu*0Zuqv,K6*vjLU}#$AXdr,v?^)O5z.TN1&{#qM#d~yb$3BAR.');
define('LOGGED_IN_KEY',    'Re(BHbr;h05Ei@]zFtz[%r+P},~PmjVu a(Ft|79,1A!M ^]Td0R6Yu4NKX/>Lan');
define('NONCE_KEY',        '6bK#*;sx_#ZjxA2Th[b[Efz&,!6i.|xZ.b+1oNY)zJBH#{hf !%~_4uBsgyz:6L<');
define('AUTH_SALT',        'KM]9v EUnyj8h~-PC_eMRi.s4orWHHa~GZ;dcWx}`^$C>vqCZ9!H2!I,O97|0kCr');
define('SECURE_AUTH_SALT', 'uYOJKpP@ xq`7]ggrDojlG2nSNKqdzwEO&uk7gA{XKn6C3^Y`nHa,C9p>VIi+DxH');
define('LOGGED_IN_SALT',   '7T)ayY[-VoW_34KvqF}xyND]<zZpN@ZGO?<OJ2e<T?zUm+:T8&K-oi6,3P<5k5z!');
define('NONCE_SALT',       'q!T.*IHNGP1MaP*d3inMzMYlSAj;haO|&9GvrnowTIUz04VKPmC8tw2o.%]|2D[<');

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
define('WPLANG', 'pt_BR');

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
