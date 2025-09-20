<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E`LmTQ67i,x~a!r<S{1Y/&x7>&AMdGHA;}Sp-,#64+S(6 #`nDk9qNcMj|!TT6XT' );
define( 'SECURE_AUTH_KEY',  ']im1*MV-xL`g|fuh!3a] ^i09S?7TWD!9kOABKlPx/rMhr8W_7|M9y4ICp:61][S' );
define( 'LOGGED_IN_KEY',    '.td%a98nLGzr;784}d)#F],:L8J%i}?T:&/Vqs4J(@L^xNr|*{l- ~e%Je?cnt-h' );
define( 'NONCE_KEY',        'E~I^??V2Ic:um4`$}V@;a^jHlA/$fnUa`z{pd2bzrmGUb&Q4s^ZhTxNl7xpL?$cP' );
define( 'AUTH_SALT',        'S&LYaQd/e=UUk;plCr8]OzB<`dpygHU3w,O=lTXOvkI$[+3[*o/;=,Yyril]Jx-B' );
define( 'SECURE_AUTH_SALT', '_e)D~yMlVasI2%IdIr$C.4Q_SPkZ)z@a_^1zF!rGZ0bnQrB/tEOgzxE9,-T@mttv' );
define( 'LOGGED_IN_SALT',   'W[}c/LLS;sq12?RP30RZ:.I3z15.{8QNOmo|3Zoqy_@)e`MGZJYO|18)26:Y2{Sf' );
define( 'NONCE_SALT',       '1o_-Tk`.yOAaj6q,V<5f?3 f`Hahp]CJb}y3NW9?W#/I{a75)uFa4RVX.mnD;fV.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
