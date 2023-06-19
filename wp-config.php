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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avrora-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lPy#QXB{Dv85.xT${<#bRYqBAuYMZ^r1aUjoiEiK&2LOQgH.6CVf)-I#z9dhdtd ' );
define( 'SECURE_AUTH_KEY',  'Y*<C:%J-??jM]*`G=.x,r0iH~;8:jiY5B;wz7#K,a_+}:BE7,;bZp/u!bA9P{3Fo' );
define( 'LOGGED_IN_KEY',    'e~16T>GEI!g$/#Fp*V>[X?EZTDftT_I@qUV!H7}l#}De,Tcfit.HR x7Zcz%[IFY' );
define( 'NONCE_KEY',        'tMk|DJvdSSC9JffnL?3amKx HyNz]{lUTkNWS84FU`JxI1_?c<q&gxQ/W/7&{Or3' );
define( 'AUTH_SALT',        'inV*|/{[zAAL^g!|{a/z]Q#xi={4AMW7PKSh3ZIQ[Y]_~SpA= Gp)/H:xh`MslO^' );
define( 'SECURE_AUTH_SALT', 'fS_nG]%2Q[?Eqy4%2J5]59|u0&S<,&15[]M/=+f_/NQ1p^]zv6o2kp1l)b/~6[de' );
define( 'LOGGED_IN_SALT',   '>9zl*/QU|f}=.Lo9kZd&Jc*D-zE,w,wYfQPbCt;88bwO:l>_xjja3DGMBFX,O0[?' );
define( 'NONCE_SALT',       '/FQ0) cd+vq[zMQIL!PyZvDOHdJEr~+4&8IYjiKCi9m<+-dl<XRp*<we %_N/6Dk' );

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
