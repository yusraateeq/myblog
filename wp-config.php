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
define( 'DB_NAME', 'myblogs' );

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
define( 'AUTH_KEY',         'gg1T%Mqm9!>Y34;9|>|Qrl  ECA`2V)N==@#I scYim`6)ku%#qQyv5}CGf<`n}I' );
define( 'SECURE_AUTH_KEY',  '(UWiIs=t%>yH@~B-WGYoN=)bX$)[H4Y3eT<0t%WF3AIyD6^:)uJpbyzq=l&_J/y{' );
define( 'LOGGED_IN_KEY',    'gWW}L]_K$@:BMuF!}j0Fid~-k;[bvnz$;#E9YY&cu,N j%up|iAs7dh+sGqr$2Z@' );
define( 'NONCE_KEY',        '?]V*5@g^d)b}<~g=[=*Pb4cx>P9Udr[V<YaGd5>IW;*+TI>~[&/(cA.3AN:47[!0' );
define( 'AUTH_SALT',        'MM;TPz<+0h-59 EFvk.&;jSJ2;62CKpTrm#&#QhvDzzgxpNMQVU[L|%qh}dW6Aka' );
define( 'SECURE_AUTH_SALT', 'tx^{Was4M3elb|c6+C9$.dVqIMrK#YT1W<Ae-r;%7FI:^|D- UvU:q9f!FOx:h`|' );
define( 'LOGGED_IN_SALT',   'O~s7q^.AgxMOM*x^HC{gCC eJ[ITJ~nfD;ukv0A}1Q9#*2A?eQ&z7{&M=7EFnHJs' );
define( 'NONCE_SALT',       'DRLj{1H}3+<6uz%8JOPwfSr+?%4?8k~2f|]KV$_Z(-@rz_K__AGN+k:mFJ$evl9R' );

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
