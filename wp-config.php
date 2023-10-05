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
define( 'DB_NAME', 'abc_store' );

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
define( 'AUTH_KEY',         'no2oe<+Fv)F=YvCQUrqhAW@[7$nrj^$?]ik%?;5aA}-w/ ]4BfR6UuN@)>EUh]rp' );
define( 'SECURE_AUTH_KEY',  '5P%~I!zRBtVVM^;sb}<87H,V5m > s0o~f!CIDb}xMJWww>!*g&]chv/Xoz]]s <' );
define( 'LOGGED_IN_KEY',    '%n(;k,t1n<vd0|<@$KKpRiry^ 8Kb:F>a>4A>BNuOGHwaCLew4;JKAh5Y)tJ6$?_' );
define( 'NONCE_KEY',        'eIeXN{;.++d;m26iKJI@2X#r}hEXF?ZY(fYF&V0? 7NZS|u5W.>hDRmEO[ogJ<$#' );
define( 'AUTH_SALT',        'j8>!t]mA4]$#<?qt0DZ[W4iyPgYy:3c`LsHN7|aYI0LG:V7(>c.nx*}{Nhe4Ba)x' );
define( 'SECURE_AUTH_SALT', ':$G/+W35PfNu(_6KjZIST=wh6dow~/E+XLj-nuqpl,?Gw/qJZQK+@q0`bOytyCrJ' );
define( 'LOGGED_IN_SALT',   '|VR-uwK5fDWg |+4e6IA[VG*x<#EXl)=>BZp.(c@Narrjtccel^cP(L.tQ9/UmI/' );
define( 'NONCE_SALT',       '_uboJ7F!#Mi0F2@NzvxxH4}b_Wsu#Bqmyk(T*{@~($J(&e5dA^ QP#wL@~8Xs{j}' );

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
