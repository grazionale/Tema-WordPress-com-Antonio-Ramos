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
define('AUTH_KEY',         '-J$NTj$_<(Y[(b5d]A o!yEl_K~3#,C,&eW>Z*2xCRf;;I={%>)%{pDPCkuqy!/l');
define('SECURE_AUTH_KEY',  'Ev;DX5p%o1fR|B|>J)n<v~-h>L(3L=}9Xa*B6xtU4Vmi1NU#M,9W,W!B,tO,<j=3');
define('LOGGED_IN_KEY',    'qfC~o(rui 4Ceh=83#g^;h0JmJfT=/gdY:;hUO~E!_wi)qpWpK]l56G0<+Ni+W?i');
define('NONCE_KEY',        '8oM;5`eX%^(aV.dtFKOO7H%F6?xfAF~X:]SR>F}).xBnfTC0V{ia5|3u-tp/eeG8');
define('AUTH_SALT',        'M7Zj8Ov(_v%m(d&keI!fvKb<]Ha>GK6Ra>og#M7zCF[YZ#kC1{{>g;9LVtq.?Id^');
define('SECURE_AUTH_SALT', 'Z3=Ta`gM(S t[2LBD06L1?RY;V.Bz]67S434)?[%6](2X2:43}Ca=0Lx9^Z3/V3H');
define('LOGGED_IN_SALT',   'cT Tu{e{]O}?Q83Q.DCH+a8R/.hTIArr]*+k<9-6uCrrzNfJ.U^xbe$;e,j:Axg}');
define('NONCE_SALT',       ':UxH>lTM<es73C@*%d*(zLCq!`=}Bw(k|6;R+m==]vae!P6c<+9g~NB^y-H3`)W6');

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
