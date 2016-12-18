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
define('DB_NAME', 'mgfinaldb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't:}.y}d@[Y$AZpgzNlt[]#wv]p;}hyFUAy@/e%QivZ$<?,uG0D%0~tdbu^`Rtx:$');
define('SECURE_AUTH_KEY',  '?n8 ^n:f&ulO& #@e*?iYA0&Tb&szu5nnUi4tC}I^ O4gI,9:n|&Uf0J/J1#(Tt9');
define('LOGGED_IN_KEY',    'tWobq=W[ ^cWs)5}rddT`JzE}$X9s;Wc7}piT+g:?$*+$qZ*SgK<i?f^9BLj$:3*');
define('NONCE_KEY',        'M,XiXrtf|eMm!Td|B>AsrBU1jvrPa|rz4gfbg*!pbzE5I9QjO4VS6??aYk/goJ-Z');
define('AUTH_SALT',        ';}Ak%FC[*nq`<wDG8ZhB[9=1kBM>Pz3,0mPOTqR-ru(Dw-Xnb/S2PL~%-<TlZ[oK');
define('SECURE_AUTH_SALT', 'RNc&CB1mG6y~jPM:tJKW{Rn;gV?M|=;DW4=EO6GApk(^q%-WD_nW8c!#A|@AjjLp');
define('LOGGED_IN_SALT',   '/!mprRK]8c2yim.wFJvK>~  C98C;lS}hvmoa}se&*TW?URrJ{wW(T-]|(enUO&=');
define('NONCE_SALT',       '}y*e0mm2K:&`$!Q:=)$3$?Kugvfj1-9x.,Dvs5Nb&9XISO--Q~b7puqd}Uq2zP]{');

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
