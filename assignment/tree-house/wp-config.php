<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '64d.qB`)$-v$Ti}ULxC-@>-&iAp?c=5UPuV9JBTH+^J>M IExzO[:fZBgT@!N54>' );
define( 'SECURE_AUTH_KEY',  'XwN@yA?Whg`{2{ICu/uMQl~7scx8Qj VVkSmhu_!6y `#1mq!d+VJ)f%I,&Q;oWG' );
define( 'LOGGED_IN_KEY',    'E]}wdA*,Z<#Fw.@:)Zju&CPTF>V@(~Trt2k-WDj5b,>Q(*jRkag7N,sYG)W<m%uJ' );
define( 'NONCE_KEY',        '%BwZloNEfk#O,c~acV<94t6tiD;>.)rJ0;??eTP.SEBST$CyLM(/72R/dhgS4@IU' );
define( 'AUTH_SALT',        '[Xm.nt!cGeC3D4N=j)~LNf|aEV+wcSWB<%<j.q:`5D>Lm -[[#Xw;croLQYPW70^' );
define( 'SECURE_AUTH_SALT', 'BY3ctC*n1K12n-b%go]>U.ZFCnR%LzQh~lj_Lg^A@V)^JE.JgRJbp$hWKp<kgjVv' );
define( 'LOGGED_IN_SALT',   '1^-J=bQ5LC>Xe3Hu(BD_16;?=;4MWcJ.zcR<xHlP@HOJWSMj`+Xg>lx^3{SKhhU_' );
define( 'NONCE_SALT',       '_38PJjACVksuv5nDx6B~_%}-^.4@x_Xr0@;|{?]S>5)6]C0/jD=tY+_+zGrz:J]v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
