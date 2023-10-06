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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopaudio' );

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
define( 'AUTH_KEY',         '52nG}c9^B73ZhPeQZl~_Yi:>N4Gs52>]yE)hDqn8b2Ed#;TZ3Qy5/*3?Rg(0)@z/' );
define( 'SECURE_AUTH_KEY',  'd!)_ $hF;BBaUQFMv%]P@9|OIZ4_h;dT|U$)k-Hl1T:qt.$wMd:FDr0K$tE?|0-z' );
define( 'LOGGED_IN_KEY',    '_N>TUERfQrP>1u|1Z]X-8h;BGQD3lq]xFr0o;BR-B*LH2-vX1[=ap_c[67_;*ZLR' );
define( 'NONCE_KEY',        '{;y7Wz%YPLQtGU-I. E0]}_R|K&/2/fObd9?p+TokK5nE^T.inYQsi&<vu4wBa6l' );
define( 'AUTH_SALT',        'JBxeRPhpXdNrh~RUN9pZq5${4pBa~}-^1^217&qhsue=EIe=gGK4gP!fN;h000y/' );
define( 'SECURE_AUTH_SALT', 'MkG,Is0:nuzU]CR_o_:yhKN}P%?UuaU./`a,eV0&R`dT)[RCw~^k Kdu;eX&im;[' );
define( 'LOGGED_IN_SALT',   'gU#]I*f%16ze({PjfnLp*|@<>F)njYaAg6u]sW.RZ~8NZWrZ]>)=lp**?h}]CHz0' );
define( 'NONCE_SALT',       'o<8ElDPQ}:=5Usw:IKT4TL0&1t:Q9;{1p_&8yt-Q}C1RK:]lt%f|pL.4[;)LT&c:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
