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
define( 'DB_NAME', 'hackdog' );

/** Database username */
define( 'DB_USER', 'SBC' );

/** Database password */
define( 'DB_PASSWORD', 'shandon#30' );

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
define( 'AUTH_KEY',         '[3tn1%:%qUr-5P%4cqPOIJ[ipkNzKcd@I4aYGb~~K61qwi{Z6b=?s68K5}}XV<QC' );
define( 'SECURE_AUTH_KEY',  'h)QI_<I_^[t-5l#{qui-7~HzV)m<DRhNYgmZzu5}jfYsI>qL4yDUucDlLPbZye$1' );
define( 'LOGGED_IN_KEY',    '/>|%0T;$$9=5rCj+3u1*I)[L&!cB5&{J2`qI-kYQDF7;pO9eTAMYT3fTek>/o=Yv' );
define( 'NONCE_KEY',        'F:`=1o3?)Y!QTHniqF3(_t##GN49-S9_RxNti)9Y/i<?d7LHz9{|?Asp.{49&?8a' );
define( 'AUTH_SALT',        '|47`L>!hNM9Z-G)P(FpP=]0=d$U!;[{Q#K/qm@SqT[BMb*3.&7zDD<WDa?7z$[K_' );
define( 'SECURE_AUTH_SALT', 'k7x}lbdJ#H=![;YjOhb}?5#LG@;#,wtz>1-g_2-/ciJ2V4ot?rnP&U>xiF>?4Yuk' );
define( 'LOGGED_IN_SALT',   'k,*h.W6${y{mr#fqC/A=RQxPxA>!{koK4=tlZ_;;Qn5b*@weL0DN3xz}hhdhV@G<' );
define( 'NONCE_SALT',       'G<8uiyJX Ud3JdhNg=)8,-;q6O|y.,r7/ImsSVzZP D%.Ig h()>HM0,37HIC:}x' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
