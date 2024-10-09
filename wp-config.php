<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^& yNu&_8bS2xGC<|Kq81%!%BXCgb!2+%N*&6/Z4m.hT|+c9Q!p&*ADQsaF *|B8' );
define( 'SECURE_AUTH_KEY',   'r@dcDgIk26?_v# {:m(?G}EDp2L7%OwgKT&Ho(XGdAj,&s*(+e0.TX%|oD62Z-T@' );
define( 'LOGGED_IN_KEY',     'Rp?>^W,C-pVj9 p9.e<#(2rNWrIUr[%XS(N.L5O7^4wtVyqc~2r~9gbRfFyVxAmK' );
define( 'NONCE_KEY',         'y)p+~64kVAi4,N;9LE8&04]L165tbTrneQEV4jn&jBqQB|^y)x(yfy2w _d@ SG?' );
define( 'AUTH_SALT',         '.@XtYsW(QP+4-3xXR}l]gng~<]qfaW GyDpIKwckXL8}@rlAA>5A375k{57.0}WX' );
define( 'SECURE_AUTH_SALT',  'q~Z8l)ttm`b#j:OY[]km38r>xFd=*BT,SeE/96- ^iI8`.@tZziNo=.KY_gHL3UI' );
define( 'LOGGED_IN_SALT',    '1SNwczDo/PvRs*y+R!a4qhWx>ZCMX.E{s-_gpo}Hvq@uWkXVAazny5k|dOaAG{o}' );
define( 'NONCE_SALT',        'v$x7Zo1BLun!hD9)3E<6|VjjiqFOhaGRhrG4aDsx+`KF7oG2O@GnJ*;6aJ*AO=k=' );
define( 'WP_CACHE_KEY_SALT', 'A>9ZhBI^A4&jjZ9P,gXCI:->b`ZiImk(5B>!47,)90JY4KMoGv}1ox9+-S&nCVG2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
