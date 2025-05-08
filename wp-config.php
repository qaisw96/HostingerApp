<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u191253903_ZNr4a' );

/** Database username */
define( 'DB_USER', 'u191253903_mlQ9Y' );

/** Database password */
define( 'DB_PASSWORD', 'v8Dr0jUxpA' );

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
define( 'AUTH_KEY',          'YQG{{`Oa.f74tXMF>lzX7)`fGcPd]nTE$ac]8vv2(S)f]Bx,STD=J./^lioI}M5E' );
define( 'SECURE_AUTH_KEY',   'f;Gc3Iw}/<pn?J]i68#>>^O`w*[GwOeT]({qDBarto0;>9oOH_&GzVRy>Hd>TUvD' );
define( 'LOGGED_IN_KEY',     ':+t9FR})8b:UT`~O&x83N5Kn1+_qT8,g=thu}Ff*r&9Cf7.>(8EfKWaI=vB-f)hb' );
define( 'NONCE_KEY',         '1jnf,WQ^*F8loTE}!_!<^M/|(T1YbJ({n0t?g[M19;tL5iqKB3%Dk {T99CNf6e7' );
define( 'AUTH_SALT',         'fRZl5q#&SI0{]B[)B@+ur8EZa1|cD1RR6J`h]zxEfS*)zeiV<-,^kZM[89r%h2nN' );
define( 'SECURE_AUTH_SALT',  '{;Mfs^Sic=?,q]j:tWZ4hL3~iI|$[f52Yw]v_-hy6[4LM 5x]@bK$1h_3;ssD>tO' );
define( 'LOGGED_IN_SALT',    '@q*j4gQvZY41^6ejb[9h>TgZQYJ%>VfdurU2=$-u# =57puak@gf7X]_`JKH#2:=' );
define( 'NONCE_SALT',        'W.QT/sRZQl*d<o_<eM^Fu]a,a8X/.|K2pMcO3xAw@!VqRRkM$:s0*-,8M=ALPC&l' );
define( 'WP_CACHE_KEY_SALT', 'b^4VGB-,Mz5lkd^eL:l,{i=x<=@KB~@EUY4*6J0qWeK}RH>|lV{Fria7AiuzeNI1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '96ce96b3d8be57a2662e350950afb863' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
