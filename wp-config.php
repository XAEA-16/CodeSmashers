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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'O@77oMDP E 25>YijB6m1;Y9k@x6!6I/cq4][;xLYr`4E3cvACJx.8c=m)|/8w8W' );
define( 'SECURE_AUTH_KEY',  'OH.Dmlw~qmrUiY`CCyC#?}rdo)n_,jdn6Z]w}&IA<7cM%PhTk~Rx2rr6B~G^xG5:' );
define( 'LOGGED_IN_KEY',    '-aKa2YuHda^pas*k^8)lfe)iIvkI4)SM?FyD&j^4;3sTHPy%5bMk:j?U0RO5uu5;' );
define( 'NONCE_KEY',        '6yoUwdny3F-99<-a5SnkIggK(f6gLH|LL,.^#{p7kA^cpxx_RjU:,=@u;su9|.+<' );
define( 'AUTH_SALT',        'r7B<<Gaz3L!6]gD5C.F Qkq1J.k>~y-$K(oSRJ(70Kn[Q#`S`&#OH3QUUs>6C5D_' );
define( 'SECURE_AUTH_SALT', '+sy/f}D3z:iHqS*nt>Ns<K}U&ri0 I)[Xk4x=|U|~FXoQlsDjo,Dy&)QU:vsQ#SE' );
define( 'LOGGED_IN_SALT',   'h%mp9|$N/n?QKNs0T^A+X5zziEntv%O@Bg*zXHh#k4VUM?[]v,jD~6m{`R,g7!<*' );
define( 'NONCE_SALT',       'Q?wV7EDG5oEgWf]x*)p0AN+H;=(vce>Q(q<D)<.FoRbetEK;(9~2*u_q$e:H-@EG' );

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
