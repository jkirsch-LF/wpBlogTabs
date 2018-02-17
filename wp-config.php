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
define('DB_NAME', 'fantabulous');

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
define('AUTH_KEY',         ':V@u;5c%Pwv+Lb.T _ SQzQ_M|#]BB]&Vj*orb|y9zzHYQ=6:^.6C7}M^jW&E?su');
define('SECURE_AUTH_KEY',  ',haKip7O[Wz/Tukj#IdoPryFz0@YkVn)O>zaUw3irCY1!BW3x;^2U=GYTk-7Xv6/');
define('LOGGED_IN_KEY',    'wth<d f`y2o}K7T:!oceZ!|yp2CBq[,1}%(y*#bImdHk0iXp-}%|8_Vk[W7.,g_S');
define('NONCE_KEY',        '3&?}wTM#/Dj`CapIF_r=#CPyORY LCg4,[a5V6L[R4u@ H}6I??+@@,;J3;I#*CO');
define('AUTH_SALT',        '~~d `p1Ot7zP<Kf|jvr+9%661*193k8iu,H2-m[}wg.{Hg/4HF!~^+~4$wHXjeh&');
define('SECURE_AUTH_SALT', 'd]4,7;9%B(}OJ|gcCLr3x9ZGJJ6rn8f!9)oC6kzQTqE~H* KBl>Rqpbb2:VT.M(!');
define('LOGGED_IN_SALT',   'ZR^GWD26OiqkZ2aIP#EB1{o|,T6(*(t>=3Pn@fi#!s;]+Mxc9:^|!0O^ox9AEBai');
define('NONCE_SALT',       'xOLG/::FDir?S7^&K1GHp>EY>tx>un2I*~NGEf({B`S-pYsoZ!Xv YdI*9!v<`&g');

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
