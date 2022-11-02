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
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '(Ey iOF++-Gk1[PtL;CnYm?n&e!<+m;x-vge7=^Uoo(8TLa6NmtnZV?FYfUNUT6t' );
define( 'SECURE_AUTH_KEY',  '0n&MkNt.1G3f|ey1F2h%0Yxr*c{L9 {/_UP3E|Xld9.]g>l|f#O@;:;/5< 3`w^I' );
define( 'LOGGED_IN_KEY',    '3wSUZX<Ua7.>F`#m+Y5.Fl(B>?An`?{*MJy`Z:&x;3l*SMvt!KShhu{w2-!J 8aC' );
define( 'NONCE_KEY',        '<mavIB%GY*.$:ln#{<~aL#(qo.UIa#2[D~X!CiJAmN[O<=-s,m(NCp&ah`MXsL)X' );
define( 'AUTH_SALT',        'K1`x),HG#FhUe#z&Zl<>5L#,ds+(,<nojV%tu,<pSH~o](Gw<8<. |q2Jb4CFNEd' );
define( 'SECURE_AUTH_SALT', ':,`Zf.>KY:)@=:9J(!Z}DEi^#K0(QJ<_p1P*.{Gkb=ntGXq)(1C]v3o-!z|kQ$9]' );
define( 'LOGGED_IN_SALT',   '<IKbF/Xy|ItS|@b#?^jn vq~F{2B2NcsxfqCh|6PQwqJTwK{#T^}e0S8~WQ=(_Q,' );
define( 'NONCE_SALT',       '-K(n6>*U#j4G$5|q:@NwW%G-xE5`.OC,k@EXS7e7gIpzW^~eJkdzP,WeypCfMu|U' );

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
