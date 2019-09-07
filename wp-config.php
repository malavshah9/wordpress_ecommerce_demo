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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'K;8%TJAz!^(-Mn^)1r)GbQv%2,P:1pHe7-Z2Y!W<t# ;-b.XwJu6@GeYSLQED,2H' );
define( 'SECURE_AUTH_KEY',  ')M/]pjlKLI^w!,tv_VGwThiwDXwP*w7SRsBec6CvN]&RK,1y(u>tC{tV.t9k)n?9' );
define( 'LOGGED_IN_KEY',    'M11td?zGXtz%g3<K5}DsV0OuJ7wgNcK``S}X?#H%-VuoXu|9to)j1_d5$fQo*UEW' );
define( 'NONCE_KEY',        'J:fad-^4KhHZoZ{.#<dv.`4I#P[Ihu@af*UN^ek%}~vY:1jH155Ez`a_py:h6oOX' );
define( 'AUTH_SALT',        '_nnn/iV*S5 =4a%;W~A_MGH;MsscCqA;kzkdo]u]Xr@5$| R&v<vnH9%7F&[_N^4' );
define( 'SECURE_AUTH_SALT', 'E83]g79o OJ13#HJQrOELc{{Pv 0a}Q;{^LWn2$Hx]BAH<x,GDn7[U`uubwL-9J>' );
define( 'LOGGED_IN_SALT',   'QS~8!nxBqVf,R]Ktkq:4a+sQe/gI!1m?4O_S-#P),ayGc{KnOA[W0z}@JkNXmFJ9' );
define( 'NONCE_SALT',       'jnn:W*;C>pp3qEtgf ?v8pOPsc0Lkp3zx{&]28+[?fFRAh#a,EWKimfLof~y%bU~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'malav_';

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
