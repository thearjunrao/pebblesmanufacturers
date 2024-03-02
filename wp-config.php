<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/u670142601/domains/pebblesmanufacturers.com/public_html/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u670142601_aI8Wp' );

/** Database username */
define( 'DB_USER', 'u670142601_cClWF' );

/** Database password */
define( 'DB_PASSWORD', 'x0drEWmjgw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'lj)0^:|j%)G-sw-?/$>cUM-Rat<{.4;|98}=ztn!;/aZ;HvS@#Vt}{J$t>|SD)V;' );
define( 'SECURE_AUTH_KEY',   'n1Q z+PND{I4lR[W0*Atgpumi^~]q}w|S]b@!xRvbb666.xXzK%@LYc.yc]56_x^' );
define( 'LOGGED_IN_KEY',     '&OXRv6~v%vn#yxT1!`f&>4=+[Qd^b:TW>*!;pX.|_Av}3zaKe`RZ_O|i-+(a&ikS' );
define( 'NONCE_KEY',         '/KI~+Y+5cPd/JK5oeG|sry*2z5GUs/fdj/)paz6I@b=v:&Qh3Ze^ybDP?u=wq&}%' );
define( 'AUTH_SALT',         'RyIB6hUAhvrA,9eS8xI+wY10mSc;4d2u7GYQkV>^}9w/u_vsT%2|e&%?#DC=LKAH' );
define( 'SECURE_AUTH_SALT',  'dW^Wa[XN<[WC4NOP,m$[h7xE*UAau/Wl#j671U^]>UZt/Lb5sJ03;;*FSQV3d{4e' );
define( 'LOGGED_IN_SALT',    'jt<P^kjqoK]$(-/HsPH9-`SW MCV >p(hEiKut]w]/Y9}uTnaA|Rmm]{XrBR|0{C' );
define( 'NONCE_SALT',        'Aibhd)1)$$0D-5{1#Bq|%hhjPOYR!MX #vivb}M9E]&4,Yc:62;hTs!YWH<:[/Q`' );
define( 'WP_CACHE_KEY_SALT', 'r[F)R~x579 j<M*T;XY0}k|?o:SbZ)HM;Houl!sQlD-lBI9n>M~EiPW%V a] RtM' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
