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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'N`Mkh|9nIQS_%[/pb<w3YV^9lsGqwK3M*C*8Ut+!_cTlYVc?lYNr$t0N@Kp&%| 5' );
define( 'SECURE_AUTH_KEY',  'R!!{%>WOATVPgBXenv+:|!ZbF}w`o)%SOYGnf)w&UnF!I$G9BtD)cq`2: 3?s7f}' );
define( 'LOGGED_IN_KEY',    'oRp_<vF/P,<0aB_wEd1_#]dFQTvvT]e_`ZBk)s-[Ki-)v8/^;j?gaLdwFcqp0vf]' );
define( 'NONCE_KEY',        '3<7EZgaf($rcwD0)(kX^t_jGS%YMOectTJ@F;Z*C^se.oB&_C:@Qeb)Sh?g2QrOy' );
define( 'AUTH_SALT',        'ner]^m.e6cP&RRyv!3V9tQt%yHJM(W/;Z(5c8A*1AKVWBM03F<Q?sNW_gyUj.=ft' );
define( 'SECURE_AUTH_SALT', 'z.D-LEScSpIvZ.h~nf^oE5Xww7J#Ytgq0,0O?C(Y]oGEYN.F))tL<#bD(0@}f#av' );
define( 'LOGGED_IN_SALT',   '7$W(Z_f`o:X4m{Eytt}|r?mG/Q1Cz]D>H$JIKsdSfgXGWZ.o|-JGQT*?C:~}ubeW' );
define( 'NONCE_SALT',       'HoWdXC<_rBiT(soNyR`Sm6b?Lcm;)3Ll ap|%RVsj)kZT~ {hEI}flk!{=vyRhlT' );

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
