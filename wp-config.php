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
define( 'AUTH_KEY',          '+Qc#HQTu<$>Yxj3n7>GxG4rUsKM$B?8zg5M5u/RB{#kf|j5nsqtBK&}D;pUB;lC0' );
define( 'SECURE_AUTH_KEY',   'N=-S&#k3?[B!9Dj71:AVnDL`Lj+6!1?Gv0dxK=lCI2G0n,Nobd;UF@7T%BG>%Eq7' );
define( 'LOGGED_IN_KEY',     'aod CyQ4kU-G.wT x f~`TYUq7)T+AMfIxr}+LXKsy,23p5?# nBKZ-bhi_utJKx' );
define( 'NONCE_KEY',         '8)^om>:gv<f^5f}@jHbe=p;B:5(yc<2G%ZedG,dS1q>DElABoTnZ+U0x!OSgF?KU' );
define( 'AUTH_SALT',         'L~<AF$2bU1u@NRF&3}jB$Zry54G]]%CjDx/SI[4?qEb]yF~Oly+;5DJt&/!cfnbP' );
define( 'SECURE_AUTH_SALT',  'DeVUJ7|{0NAMiys&1OCRLIlQ]#G9Tax&ri.kCK(i-$o%W_yViULVYlGdo_ 43!If' );
define( 'LOGGED_IN_SALT',    '=@@RWgN7j ZBjyDT9s2^6b)rC>U9/!FHs`pin?km]$8<]O1oB-YQI6C|Rf^hQoci' );
define( 'NONCE_SALT',        'wFG uAl*q~seqWe}?p!;xe4B|gsMYAr1dEKU5oOl&3mm(<}1W0WZ.,aWKIYg+qS2' );
define( 'WP_CACHE_KEY_SALT', '|t,Z6jYwBb5.H?fs|q%Tbv#nuX?>=/>Vv&.n[AJ?&&+^E2[_d_c6s4kld!fe DnW' );


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
