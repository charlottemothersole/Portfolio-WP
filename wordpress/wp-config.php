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
define( 'DB_NAME', 'wordpresssite' );

/** MySQL database username */
define( 'DB_USER', 'brightminded' );

/** MySQL database password */
define( 'DB_PASSWORD', 'brightminded' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '?;{YrtFA?bbb*Ddj&wKh^+:4>&ftH&Z4,uAr|{i }+q9^b}{?/zOF`JuKee_W78/');
define('SECURE_AUTH_KEY',  ',Uv_D2)88*WhmB[n3G)g[~|y>=G(E?n h_xR%)/c-Z?x7rF0+ymqzT4*,9F F)Y<');
define('LOGGED_IN_KEY',    '9d_,:MpTg.Z.P|NL1xTAX|Q+)|%|SF-C)`J/JX<,/Pbl~:eb1CFJjh]+nzK;<0{t');
define('NONCE_KEY',        '3[eo,JA{nO`0KVpD9LB#Z#TVwA,1k|+g+3HLYS=Ln%8^h<-IP$e?HZ]Baf,tNjUf');
define('AUTH_SALT',        '7&|OzVt i/f@oq5#0heS;}5-&g$4D!)1bg7x!h&;>?a$/,@k75x(t(w~E5U4sc8V');
define('SECURE_AUTH_SALT', 'yRr q]0BnD!Yt<U/]HUR@IoY{:Z-(aL=#c>do;Khd.9T/}g{|(o4`v%7vh]>Bm08');
define('LOGGED_IN_SALT',   '=NmAK cG1$GHyA%wwvI_cMK[~G{[<x2n-Mi3/U}#9V>_?G:GS4U-+{I^&*B4~LUY');
define('NONCE_SALT',       ';2Y3`=[[P,Eva}Rjk.6Muqm] >,82 P5n!)<+Ir|Er_@<M9O,l:B}$U|`,:((t]u');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

/* Sets up WordPress vars and included files. /
require_once(ABSPATH . 'wp-settings.php');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
