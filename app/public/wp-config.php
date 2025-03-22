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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Q:`{,JW>lgD(l,xp(4D69DvJ@W [LU]6{;!A uY7]?<B)}h}:EYU?[-EoFBMaMpF' );
define( 'SECURE_AUTH_KEY',   'WgVnhojN[iYcS`QO_TP/5y&CJHwMMZ6x+vk[2T)S^&5F3UrTXP=! 804$?]Bc5#s' );
define( 'LOGGED_IN_KEY',     '#kQH~(PM9O-H]!K~GpRR|:+U^SR-GSaVkj2=^wU}m=m7sQv|{8Z^b21HU`uP-@Yt' );
define( 'NONCE_KEY',         'BkrI0^IFSA Jx53obmC,GpZ&m:@p8^tu,Y&OYJ@y5B(i?j%5*KAc6ma-{7gLf0gs' );
define( 'AUTH_SALT',         '^K@lO)GF2`K4UnlOo:Y9J+@kneMz}e},k=_vMQ#YI4o$NtCp#488tN<4s/ @=O0%' );
define( 'SECURE_AUTH_SALT',  ';Z;[P(K#.HY@q1 JO9GB5#V~X<eFE7kT)#hqrT8 q-AXf=*rxhdr19e8*?!D2x%&' );
define( 'LOGGED_IN_SALT',    'y:;& >tp{I`(hYe=v1hBBH:L<wpyKe2$e}BHV65sMnkRDUUTJBfSUpF9n1)-By%D' );
define( 'NONCE_SALT',        'v@KDC3AGMPKh69,/Vc^IqrRdvLj@eNB=iVLS8<ylI_!`z46ekwI2t%:z7THbc0G4' );
define( 'WP_CACHE_KEY_SALT', 'imp.EcPa~&;vfBkA2mwPu,k+DSiYY2hc%<~vL<qos00ivhd^a<GJyh nKe/WAt%b' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
