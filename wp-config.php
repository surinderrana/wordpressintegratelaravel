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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'headless' );

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
define( 'AUTH_KEY',         'rVP_@w?PbG~(@:MM7IO4,_5(mvCTZUtX*bc,nE;FqWYrP4OTgb?r@erwoaEZvDb5' );
define( 'SECURE_AUTH_KEY',  'fKa/6,jC.(,+RmoeS(,Cj<xcXPNk}]aS{So}gAhw}3>}jPz9RJGZeM]7R1G0SpJ}' );
define( 'LOGGED_IN_KEY',    'FZ~K(5zzec.j%Q0]C&ir1lR$ G~r$!Vo,=wDHRs9B]5i0HG)1tYc(ouf@QY{8}:K' );
define( 'NONCE_KEY',        'cV1LY63+]!|6)v6[.Ya~6RYK(+a3v)z8S=Mn;nhAS nG&N1.b`puZ~m;NUD!a[ ;' );
define( 'AUTH_SALT',        'zH_NkVtIYfvs.NZ$Xo^y<~O:Dv+L)43=Fw}0}LSZowlXn#$fa I[vYOw;u: ZWe2' );
define( 'SECURE_AUTH_SALT', 'b{{s&LcD|`4q1Tj(s@a9xD#mIQf.AZ/0phRpDKu_p{HkMcy5grPg]bPFr4CmI:@6' );
define( 'LOGGED_IN_SALT',   'V7Z`vr&c`Vs[YjO>AS` o,eF[rpdvjyx-OrS%T.d*!n+e&n[,c1DeRvb8CH1GMyz' );
define( 'NONCE_SALT',       '|YO/?*Q{tC^z}NW%>@y]&`~zQR6-=fAe<x}LrDYpAdxu|* s.9,4;fQ>7|bH`}J8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
