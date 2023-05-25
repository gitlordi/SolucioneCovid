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
define( 'DB_NAME', 'epiz_33861218_w854' );

/** Database username */
define( 'DB_USER', '33861218_1' );

/** Database password */
define( 'DB_PASSWORD', '45]!KpIjS1' );

/** Database hostname */
define( 'DB_HOST', 'sql201.byetcluster.com' );

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
define( 'AUTH_KEY',         'zhaoj8kdsjivefhpmou0o3bw09xjbrouwcf1o49gityoqz4vmld2bgrmne9fyci2' );
define( 'SECURE_AUTH_KEY',  'pqnmq42ygar0shfsdifyxd03f8yo2keehsrfpijurlv02e7ibblptycghq1jtstz' );
define( 'LOGGED_IN_KEY',    'qxluhd78nb97m36i3dzmkzs4xu6o1ihff7lvwxqg5lzc8za28myvj2twlgyyndbi' );
define( 'NONCE_KEY',        'upze1lj3gvckhztocxoltp6tsfnamjfsenmxvrw57c20jztwbzohxw9ynzvyraqz' );
define( 'AUTH_SALT',        'p9rnca0u2khqfjytytyzzopftppm0n4wvgnr9yrz3zlphff37w4kgvqld2h2zaln' );
define( 'SECURE_AUTH_SALT', '6n4xb9bz6cqbtosqawokbrsxup3y9jyrwsvimoshg8viev7das1c3ux6pf4fouy5' );
define( 'LOGGED_IN_SALT',   'yozie8rdidxxvvfpgy7chgvko2h7kolxrlewhviemawq2ddcafqq7czsiewertfy' );
define( 'NONCE_SALT',       'ihuntii5suoyojvt25qzw0yfyfjzfxnrynv3flvve4z2iqvkizkkxjqswdm88mke' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpc9_';

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
