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
define('DB_NAME', 'mycreati_foxstorytelling');

/** MySQL database username */
define('DB_USER', 'mycreati_fsDBuse');

/** MySQL database password */
define('DB_PASSWORD', 'Bbatman778');

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
define('AUTH_KEY',         'w:}Gd=jb{-){Z`&R=hFO`Jf-aFX6D=SHq9{[CzKT4.Fy*CqAa->TnXIQMy.a7tMj');
define('SECURE_AUTH_KEY',  'Pa);|#JYzTuTO4R-=*Y^_X9})wI`UkuRje~?JgC<W?T/ODY&W6)EoF%=_$`.%*1E');
define('LOGGED_IN_KEY',    '#}B&-AO-[^GNj<wIoJteS00BgA:+=WRh1bweOQ3+RkYujpA(uo-E._gQ@W57T$*<');
define('NONCE_KEY',        'J`kF1Sce^22/ll/irf5&[%E}}t|]?,DEv&$=Oud]H105`2h$|<Y>#dDiq.oO.1F&');
define('AUTH_SALT',        'sFVM4go:~ Tk~F.w:Wye4;;H]|nSh.}u@D@,741g%*$Y0U!n2;SCf^*Kecs<_7n;');
define('SECURE_AUTH_SALT', '2:H_>4T|3PQ/(}`Ssd%Q|{U~psx9DqGD[C4L9I5@$Z#P5;m_f,&KHKETxa#,^_,N');
define('LOGGED_IN_SALT',   'O21`7JMZYbj?biAt343$3oH7uH/ >X{y5;7hkcKJZed0TE77$cMP=KtrX)GHOE5b');
define('NONCE_SALT',       '0tpK|H.E%$3 eJSJ6iTN>^5M2`/r:Jb7ab{m|nIuEsu@$-&j+E5*V+*F*c$o^s3=');

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
