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
define( 'DB_NAME', 'prima' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         't%;a5@UPenY K,42rQXlj7(& shMxFNSBbr/9zng`^.~*(+>l6M[-l8?RE,E<Ij4' );
define( 'SECURE_AUTH_KEY',  'ay<kd8sm|p<zWuT8L<]J7sQi.>q@w^U]t4|e=/ZmW NyAk>B9OCc7fzV,wAT4iMR' );
define( 'LOGGED_IN_KEY',    '|b*(3 BAAz 3H(*@2GS;!e ]8Jf^[l3}+4hKwR$<R(qSEd9un}vyjnVntG5P2oUT' );
define( 'NONCE_KEY',        'm/^F@x9?uUn7Pb,7BW6#[O8f<Q1hi8n@mZmZXbV`PH^GSa7d/@)^`.|CWT^W=-ZR' );
define( 'AUTH_SALT',        'Fcfq*imAvUNLo$_K_j9Hy-7T2=,b/eA9(=6iu)Su ~a5^gKGwIk!X=ccLrSy0|!,' );
define( 'SECURE_AUTH_SALT', 'a${s|[yw$/z&n{y~Lm3TWcONcRb}xR#l$>GINbA/~x[< |}A=>QaK01bR|EaV@]8' );
define( 'LOGGED_IN_SALT',   'YG-NF?Y;)&kuwyt4>YN.0fo@8Paif?wq{7&Uo,PS047P6UH, Bb{Sc<D_P1iQ0F]' );
define( 'NONCE_SALT',       '0S<QOc*f+w)GUV?],d54pPm-%gIm(.T/Y}[#vr/N(_wG=pgSK}VM4DEf4Uf;Ws1&' );

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
