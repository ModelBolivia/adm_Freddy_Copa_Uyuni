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
define( 'DB_NAME', 'freddy_copa_uyuni_menu' );

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
define( 'AUTH_KEY',         '*IJ4A@t_iUiYl0nGlk=f%K65ih`QtG+?)6.dy1871C#|mR4W=~Z^ntpw7JPEP(hC' );
define( 'SECURE_AUTH_KEY',  '`_gPJTH2]{/B/bt97,l&)^0dtR|n&4g9lvReacHIdy lP}%``*edi?kn4YkTgl^&' );
define( 'LOGGED_IN_KEY',    '&}15.Q :dp6%PWAbCM=Zn0q+xmV+3PnpI/`EC^V2V0HWE5a1MD@M~&:u12F(*%<G' );
define( 'NONCE_KEY',        'qQ87<(-x8U1*Cb=v{f^L4pwc>|?H&^ww~&!PTM9lVe~95]Cr$1Db:#$2/j*s]-B^' );
define( 'AUTH_SALT',        'vJsEHRHI8i( ,ip)F7;f88P9?_R3>7C:*f9:fn}=1?Ko`8&0{WZ7wIm.pkkDHk]K' );
define( 'SECURE_AUTH_SALT', '#slF1WIC[E5?_/{llAKi]blzQ6ti**5(!p-AoW>Xn//Da|`f&fh0a$`gor%6b*4C' );
define( 'LOGGED_IN_SALT',   'Wzm._YBs%aJ8gtg3?OW5yB/:>0xKa`)L?Kws.c7KmD/#MPnVMs*@v/9g%7#3}R8E' );
define( 'NONCE_SALT',       'ni5RYYn;;ZU&N? QH@[iUvLVjT#KLAO2*4qI*D?n%[TeNm?pSt=x;K^zMyP=$!:!' );

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
