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
define( 'AUTH_KEY',         'JA}|clo^7R*h9E5s.~~a``5q<cM3/fpu_utLwRF4^z/79S?)lS|sFt!tuZsTO+hu' );
define( 'SECURE_AUTH_KEY',  '{O_|+*_/QiV97 #hk*h#Z&M6N/t9ru#x&fex9?=eBkJH#IlH=cC^O^~-;qq*;+;|' );
define( 'LOGGED_IN_KEY',    '0o.[OQ^t4{.`-+#M&#6v{^Bt`t]M07}132-Pxn4d?Rpo/*%EE~42A?P5Vki~0r [' );
define( 'NONCE_KEY',        'lNwO3FU3I^o.]O^as+h{O/r=m7 $PU3O(3Ki3.-S4v?}y;^Pg-iL3|-9i;!prRax' );
define( 'AUTH_SALT',        'W6mgW-PbHnD<*a,tm(K8_97tgZ`Woe>k6z7qd^&}94T7cR>gTYFBDjFrw&<2]kcE' );
define( 'SECURE_AUTH_SALT', 'J>bOpv#](1ykH`&WY,;->RTz@74<2jVrp_+A)Dd<%W}Ydyw^7K&<heLgf;X/]O<A' );
define( 'LOGGED_IN_SALT',   'Yx,:VpA1p_*9ayVPz6}J!{XD2S~[aw=e~qBqd`9fK@+C90?|oU#tejsikf94pdTz' );
define( 'NONCE_SALT',       'tOwY=B-5y1)brn^#6UP#MreUKKUok=KvGu&g~[RlX`knB^QU-JTZ&,TF^s3PwP?#' );

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
