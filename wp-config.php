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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'interview-task' );

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
define( 'AUTH_KEY',         '1z 2;^pY?}v.}:{dgI+BbZUf796EY+v`&k}=-BpAW9CB`#IK/AZSl^>T0_{#u9N9' );
define( 'SECURE_AUTH_KEY',  'zonIk~Z |[%SD`K.ug[3d8+9I$#kSJJ`?9K6_NhS&~>`;s:P#M*j$I8~F#11reTU' );
define( 'LOGGED_IN_KEY',    'U>NT3fmR df},k7uS:jP>a)vp9+U{?d}Po<&F79vi5^@?h<*mnm:->9HkJ:i$569' );
define( 'NONCE_KEY',        '5m*Y4wJ#ouHkz0.vZb,mcj F#(6-4:z]`SKgF/@q|JuaD369^i[0,vg3J>b?C)#=' );
define( 'AUTH_SALT',        '#f`JB ?yc<j~?KBEi6X<C5z-q_Cw.%9ftg0iqYK^3-:N%NvdyW-))LS+JFo-:jW#' );
define( 'SECURE_AUTH_SALT', '6C7DI38Vd)R,n!RVVE,atf.EYAbPDvl,WNz119F+`9MC}Vbbpz]9keI@0YF$F[S9' );
define( 'LOGGED_IN_SALT',   'S`uW0`fLI:0zR,_Uqq4==>eIG-I^a`*S|(zJm*eq&JK/yaz0PvXM9c60yQx,10*>' );
define( 'NONCE_SALT',       'hm5JY]84UutF<&&H!2-IV^&)F^N17iqGJNySslQ3rGzkW2Hah!?Sn +itvf.PS4F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
