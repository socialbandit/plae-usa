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
define('DB_NAME', 'plaedb');

/** MySQL database username */
define('DB_USER', 'plaedb');

/** MySQL database password */
define('DB_PASSWORD', 'Plae@2014');

/** MySQL hostname */
define('DB_HOST', '68.178.143.7');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('ROOT_PATH', 'http://ci.cabhook.com/');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*E=c{j{4dKj 6:t=Kj{8{^:SX35ke/^oi/Vyj`GzN2X/l$ZT_aqsx`ozIN06E%ZW');
define('SECURE_AUTH_KEY',  'UE+Q~D:5#n<Lz`,/LslG,r|^Ck}GBz4]K]6mioGN!]}w&~N(hi/y`OiqU1DJOF%H');
define('LOGGED_IN_KEY',    '-bq?!KdCo+<Nw~C@KP^R]dKTu@t%,.a3a;hgn[vwM*;,+6|w];{T^N.-_tH=#sdB');
define('NONCE_KEY',        '<i<2VR[qDB_`<GmnBW+41>3!X$+;O8c{[:<Ug}dN;fEk,~2o)LU#8BazL08h,E6(');
define('AUTH_SALT',        '!8fG6RWfrjii^JpF5W!CJD( iGeg}n7P&!LM;adn|*qxsN{#lFf*K63g^QBAZ@dA');
define('SECURE_AUTH_SALT', 'c^Yu4rZz4atN%HXq6ndp;A`xFq/^ff{2rK4UTUcZX)ubi2}Dz1B;c`Qx?CGJ&}[.');
define('LOGGED_IN_SALT',   'Yh^zb!3We^~:}8UaysY-kEp)TwzHi*vy3T{j;H&x2_nF_/VFpouTtQe%o.qN}Dhf');
define('NONCE_SALT',       '_kmv$c}`rte_ 4yFm(#wE6dVfs}dKK?u8.#6l?nv}Lx`wK<yTsr0V&CT7AHHQleN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'plae_';

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
