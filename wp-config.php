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
define( 'DB_NAME', 'testpractice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '=uMA]}ScLyTP8;Z8RDVm>46_K4jZ4]b,_h6^Dy[ww^8WsNDoL;vm+<*8WO a^cW=' );
define( 'SECURE_AUTH_KEY',  'dB$0RtQ}+&C?Ukk29>w<~Q6M|o:9vM{+e28w,JQ%/pojOdD/rl]5q^-|x!o)86Vb' );
define( 'LOGGED_IN_KEY',    '85.qrsBj2c[BPMfTnyiG]SQv3zn&YUXyf{OpAS#cx&,A]UYpZ051*jVAS]eRB0)J' );
define( 'NONCE_KEY',        'BNVJXjTx;V_?h5$LMX2_Ms8Oi2x.Y<`sWn5o$/)sh/[4lJrh8[^SJm(dg<Iih7PU' );
define( 'AUTH_SALT',        'Pa9$@kR}OD2+.)OoX?Ha!;d^P]7tUQ]ZPp`T4HG9DFX9FJTYOZt<M4HJ^(N<Jhso' );
define( 'SECURE_AUTH_SALT', '>;LZ->?V?SXhn3](@+.|Uy<Mq-:iyKYN&cfn;PPdM0bqbNNGJ&2/yNHI4/oo9fE(' );
define( 'LOGGED_IN_SALT',   '1Thnr#npe`;<*;^l`$I:u{!$i.UreTA_5:8g[JDp8}&G;a:9y3#hsZ(XRN&,(GR1' );
define( 'NONCE_SALT',       'Xq02y3]ryi&{o?V+ !V=(lY8((pE%-=,]YeS{^8k{=+lqqwY+xuE6WgDqQG/)CyQ' );

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
