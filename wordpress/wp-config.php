<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '%nt=s-loI#N(r@T >9?|&VdGoLk9qr6:T0r(Thvtym;wqknEDevx|Gn@sEa^Vl+)' );
define( 'SECURE_AUTH_KEY',  '1-msGZQ@N/(PdCR`j{&=1{cYUAoaUPutp50Ju`UiF5vu R )K2`2W4l{ 6v-k*1J' );
define( 'LOGGED_IN_KEY',    'N<N+JiQI;7HEHW0o%6S v^D:2IoIU;-[MfnRno`$d8{8->scq/>>=.7_XPl.Nt:9' );
define( 'NONCE_KEY',        'D+tZz9[KFmI3?8e+>5@S<G.+1JQ):1y!M9aXI}Bt8:9HX>538(rYi5VqLdTkq:Z;' );
define( 'AUTH_SALT',        ':p=y=e8@hb8$G${ugn6F@#[*Un-7uD:E*Y;$2S01mdRZ:M`4bKkvg3xy`+6;bM@;' );
define( 'SECURE_AUTH_SALT', '>CXSkdv(f|,!DcV.G3l|j*v)fsAV:<8xjN+[Oc3`E(L0F9w7{D9QsJ$ain3XUbn7' );
define( 'LOGGED_IN_SALT',   'Rk+Y7rR1s7i`0>2>rd]ICCgBN8Bx7z3[o,<,UN]p]Lw|>zxovij0 @G^k8n}1+#N' );
define( 'NONCE_SALT',       '{B;`58-R~:K`}WX))6kZ?X38O!j9tQ)qF;BC zK{1a+*:|XDLT[&T>!wt*gV}CNw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
