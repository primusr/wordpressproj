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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'Rzv]TY=XW-,Fd6] MU >OFSP#Xt]oo!cm.exk<wWJPk8}f-XrBX>x}iK!:ktM7eY');
define('SECURE_AUTH_KEY',  '^[y )jOt$h:Ywl-I$f -!pZ;GrW4u^/RNv<Z~&-:o)9_-&01hwkt:7[V*`zzCFMw');
define('LOGGED_IN_KEY',    'U3rC79I`QsA%OI}9lY+;_s*Is-d=^l:KjPZ;n0GpGINFxA1L@w6vtI$[q0Bz@ai&');
define('NONCE_KEY',        'jBj3NQ4*MS1Z.Jw,~K+^9&,Po+^;H}Nv?mPvT@Q.>2gdxyvb3D}s;yoh[{Kb :aW');
define('AUTH_SALT',        'V.+JNLv)cO$lv|sZUH_z}&o<jsn1%;3YU[o:g@=.x-Xv:D!95y~::r!J5HGi%t8@');
define('SECURE_AUTH_SALT', 'gcKGZc3t &=1|){PsTz)(.sa`rot$8vg/ CDIPs9x0TI7@a<_I/c*MBmcWZ6E[5o');
define('LOGGED_IN_SALT',   'Wf?ip~7+OZ{><yyZqZ9Eno0cI)dUeB!=4X>2xQ+kK:2NCw}U%e<HSi3Q#/oT<NVB');
define('NONCE_SALT',       'u3v}b05b[cC=p~;6O_0t%Y9;#h_ZCf|+BEEsN?o*(5+KAz)9@=UHzAl_!u[Byk!W');

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
