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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bunny' );

/** Database username */
define( 'DB_USER', 'bunny' );

/** Database password */
define( 'DB_PASSWORD', 'Test@2022' );

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
define( 'AUTH_KEY',         'z8D|f?Ir*oHlNg^)tHM!ihI8-%=$mdLVbdxZnK72`{S{ R(v?myy9&L8`?m6QNF)' );
define( 'SECURE_AUTH_KEY',  '=^4.2/)~n?CzPDrmr11O~Oy`IWN+E<vP/JiHyks5_)@0X*F(#r!9/L{I&8Tn2;}[' );
define( 'LOGGED_IN_KEY',    'p@O|%FPX5q`b`B8JX^Z-fOB?-(idlXExQ.Z^PH}Am==4Pt0@|aHy=G.a=6cr&U} ' );
define( 'NONCE_KEY',        '{*hE*Gx ciM[~9YpW-e ic!zyS@uV+dA?z[9[)Ec4pFrHg*H&xnD_fmWviO;(8{W' );
define( 'AUTH_SALT',        'oVls/d,f7eJ{P$XK4]4YV<lV*2yE4Gc_ou`MI*tpfKdG44DfN)O3!&}CF %DWvH4' );
define( 'SECURE_AUTH_SALT', '0TH&NNpbBNDm)Fm<9)!R@:~m:po#%4@xh.X |5p%rk 0cxuy|!{DD%BgtcQdCL:7' );
define( 'LOGGED_IN_SALT',   '/l/=PNE:kr}eW10GZBNbFLi<K.IxL{;D1*}[Um56y>PJGgx<9.hiviIdhFE9j~-h' );
define( 'NONCE_SALT',       'ZFr%wEouM:LFL)`+@;zI~!Z4VHFwPqFul5V`PqF]fVJ|Q`HeqT}vgxb96}uy|&#N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
