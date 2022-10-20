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
define( 'DB_NAME', 'hairdoctornyc' );

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
define( 'AUTH_KEY',         'CGpeoETaFJ4b5]6ugy.T1Iv!5W#UIK}bYUV:DkM&Z76WnyJck=OM)b6zgY%/om?J' );
define( 'SECURE_AUTH_KEY',  '%5NQ%8k&Qg9UP>Dk;,/Vy8X6T,vC}fZp?/9Dt7Dn.Yi:)]asi?S@bY@PO}edx t2' );
define( 'LOGGED_IN_KEY',    'LxCqOB_J-U`yLXy.M#lD/m<j]t>)gLGpRZNNozs8j$%.Y-<.FH%du=WMf~~6XbJe' );
define( 'NONCE_KEY',        '{j0<: H7V1d@.y-A9J>_5jsy/yTI/WkT%goi.4}jxqOLbvg`k 5W,IXdy<@[OIt^' );
define( 'AUTH_SALT',        'G9:kIx+YlL(U$%V#}; Wx3zHAUT5N[SiOO^OKM,CQ{5OX16Uo;?Z:y /kpC`{?Xa' );
define( 'SECURE_AUTH_SALT', '(.kjI~4(sX1]%+ofQxsu$AkK7/m:PV>cd];WV&$4)Ad<)UI_)#Q**` nCDk)dJ|)' );
define( 'LOGGED_IN_SALT',   'G%:N]+1t@JfVeo,lOg.h%][hU[8l:EdV;xWyg]).sXCM]VzS?5UOV>^CL_iJ24gV' );
define( 'NONCE_SALT',       'Gkc31p^;-B29_,7eydl8k)Dj tb^VN!YSURWx*mn7esfoE0[4^o=Krj2=N1uuse#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// custom code for bypass ftp credentials
define( 'FS_METHOD', 'direct' );
