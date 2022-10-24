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
define( 'DB_NAME', 'metrosystem' );

/** Database username */
define( 'DB_USER', 'metrosystem' );

/** Database password */
define( 'DB_PASSWORD', 'hoangthuat2009' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         't%8u_sW4MskMXTv/8XPG^RM?z;3&=sh2a|SLrX3x+Hstki*ToIV1@5&5jR5Aq>Mb' );
define( 'SECURE_AUTH_KEY',  '>!zl94<|}6kox>#EII)&kd?A=V86DIq&Y#^>ZEOqLY++sYZ;^n,qHCp3qLq&y7r(' );
define( 'LOGGED_IN_KEY',    '~M1Er@FLumKSi(H+<=Ar!FE{Xon&t()1-paXj))f&]gY~evkdge0Zp9||Al4Q!&%' );
define( 'NONCE_KEY',        '~`NRm}|q_]G[9^y<qF&f5]|#:bAK^a?mD9@fL/ly9ip_H>c6 #!5m4n5J.efO*aC' );
define( 'AUTH_SALT',        '*JW=BE|]2aZB]HEBfQb`d`rHgWf!sO:r|fzR[3o99/}d_$Thm{B$a:kPf9Y?9?-i' );
define( 'SECURE_AUTH_SALT', '<-1Qmd.+~mECSNLP-WK#Ey2W_N7ZN,5$f6uj}5/m~7H0g#vJyM&-l0C_j/~q:L?h' );
define( 'LOGGED_IN_SALT',   'D|J:l}_VxE=nUY0jlF / t/8XBC(7Fd$yE`2Z8K/RCo9iC]N!4 %Mt-(6peb8BhF' );
define( 'NONCE_SALT',       'BLPf[xoh5`GZL9ufN>^|jWEF%ANxM%RA(/7yw^1BgNQPL^#l!yV[5Zkwd,z0Y3z6' );

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
