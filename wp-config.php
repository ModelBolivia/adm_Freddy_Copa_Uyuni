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
define( 'AUTH_KEY',         '?nVMdi~B[O Q#QsQlp,m^KVb:K~2!SHz,hqHPwM2%-m%LCf$p(n#PvjtR`lYwC$Q' );
define( 'SECURE_AUTH_KEY',  'khPhm>uOtUIC72+4)$Q$H+cJU|gSu=oq@-~P:AS}~-oMnE[9vB ,$M|%`FLH1$2I' );
define( 'LOGGED_IN_KEY',    ',O?pMh#wuv1M8=C/@o~(2Lv:.J0pl5@^*nI|) JzM_JCqOs/5sl:z3WXA):Y`.f~' );
define( 'NONCE_KEY',        '{$T%!0X=|>}C6fNUA<s4?IUVm(RiPE8}X}w?rjZfov~e*Tfj)bsRQ:}2zX>:+$Ph' );
define( 'AUTH_SALT',        '#UcIVM7lHvX/4=Szv|jOGO M-^j8a,$$4;)tCVfaFFuz{`6 *~{CboDbcxp4iE@f' );
define( 'SECURE_AUTH_SALT', ']{@iKO(250tLqGpZ b=2uz8o?vp7s []veGs?TB2>B|Q`X<$z+v_1%S|F_OS&Aq]' );
define( 'LOGGED_IN_SALT',   'p@5OIeoH!8V2xNkm)e/O4JX,3()UPbTc[ZvUx7z>~9ogsNJ)hs[Ci1a?^?(.baSD' );
define( 'NONCE_SALT',       '[CxA=Lk^X<_v~p|Ab/Pv=ewGf,o86:Jh(YI3bAN<&i`-(_/$l+q^g<jZQs]vX@d?' );

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
