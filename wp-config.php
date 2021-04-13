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
define( 'DB_NAME', 'wp_CustomPostType' );

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
define( 'AUTH_KEY',         '3H-39._M/3Stv~Z;Az&hh6hX]kb;2ij_i?wfMH#yfr`yo!h,,YS;L/7O0%2#ZAr=' );
define( 'SECURE_AUTH_KEY',  'TSXrc?Mk3R/ RJ6O:[rj{l=zu95GfQ[?}/4FV`i6v$)_/IeWSlAbIzyjt(S;.YWa' );
define( 'LOGGED_IN_KEY',    'V1=4E{ju=H!;J$~|G8g[$cI18ee&drGhPF^<I?~B)wSUMxI_VrBkls4H0@VtPgU&' );
define( 'NONCE_KEY',        '<+F|uW(+<2,thn[z2pA}z{nc-7c4YBEy>N~d*1u2idhg-:!P;.otr6`d*Yw%Je%j' );
define( 'AUTH_SALT',        'F1-w-uVF(YK#Q%5%wl:%Mi!;fA*L_/LxhmF=:g96iD1w#xPEexq<!s)r G>8Rl:y' );
define( 'SECURE_AUTH_SALT', 'a1jec+A(TkDm%I{o,3,wt7!/(d(9>Fytutg!NP2mw|~GxDBCv2FkfsME53~/096N' );
define( 'LOGGED_IN_SALT',   ' jJ5B|6,Mm#z[^,s!m!_#?Lz>#$Y#Qhf };qm82~nJ`{NAe=P%^#?:4!)NX4}m1t' );
define( 'NONCE_SALT',       'Uq8)jlxNMDS{mlTqPb*6^Ei}40J:1?RP^>n}g#LZ~;Va{)~[L3}1upV6zrD(C>|S' );

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
