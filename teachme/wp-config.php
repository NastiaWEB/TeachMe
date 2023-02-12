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
define( 'DB_NAME', 'teachme' );

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
define( 'AUTH_KEY',         '. &^SZ,MPoq;<gpxYdXi-7mTV>R:Fp 3[k2b6^_5OAn3s^Ku|X9U|:N}.>f&u?yT' );
define( 'SECURE_AUTH_KEY',  'qKW4mwMfRu*`<5GKsst;IfDt8)J~D{HN9m=McG6}_,}sj/-Unp IKhxk+f&uz`fz' );
define( 'LOGGED_IN_KEY',    '_j8)t6HcNFYakzFH+vArt#ED%f4F~0@A2F<Tj8XGR*xL##uJ!7Yuz1*n4 q/YC4G' );
define( 'NONCE_KEY',        'W|5]@iaiNJx b1rf@S)//44pqryF65uW7T/^ZUt~(X*@I@8*V7Gx05r(KC*98[i$' );
define( 'AUTH_SALT',        'pic]o{l<%dPr^DPDlBgo*A:80W@-.3[I,9P.5l^6-Vn2xk:Sr@nX^|aaZ?tF5B=h' );
define( 'SECURE_AUTH_SALT', 'APpW${~e(NLBxCz3?N_h9G3.O|H,nPn57o6VyW+{Mj0DQ`M$zWXqisTCgm!0[^$b' );
define( 'LOGGED_IN_SALT',   'GOYH]{c9],<AJ50D:coXA(Y}9%zYAX_]5T;5*P@J:,[~d-2QlK2kqcjZUt<<F8?-' );
define( 'NONCE_SALT',       '3A*RbMQ;W4.KDEkunAwbhlu9>C|e/NU?Tjqr~AyM-w=UR:NPb{0A^wY05*OmK0v>' );

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
