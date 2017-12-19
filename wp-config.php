<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'firsttheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`9b^:,TYfv4c|#3`K.Uw::r29(ErvwK1v[t>qG P E7G&aGN_.YDn=y:-&riJp0n');
define('SECURE_AUTH_KEY',  'C~`we&@paNIvAW(UNEb)AtHBYz-nmM*Fb-!G;WQucl-G9*HdbaJyWF,J3SPtQtbx');
define('LOGGED_IN_KEY',    'U9>T?f0Li.S_XkYz?IKq*W@~7u72n<n*AaQFE:`OSULM^,_X/IL9Z$E/1 H`y?H_');
define('NONCE_KEY',        'EhQ[v[Z0*0X3UV>6>}h%1d4`D-a`[@QoB59o8O({Lhy7:Mq)CD7B/!?2]9U/.cv_');
define('AUTH_SALT',        'cu9;(@*V0yDY8hRZ9B&MZf@>sl%cO@Odc]r^&6KE:+jd,v8mq^oI^4>st(]dy:0v');
define('SECURE_AUTH_SALT', '~Mc)05|rQ28`t:*438awXDc6`7Se.!eg$:-+;dY#&DQTTrL_$6tVq(#^!:_M|%3%');
define('LOGGED_IN_SALT',   'juj)5~U9bOpS}oYo|tbzbOrZ|PJmnni*UkpDai<t0Cya^aO015UqP;v1GK>$ZT,3');
define('NONCE_SALT',       ')9j!d.~q6lyce#!x@~^Z Am9kH]ItK<!e]w:ZeC?3CK`M Dn4.g6])ySBq8),{TD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
