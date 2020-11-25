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
define( 'DB_NAME', 'db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ',5&Lz(%(&legw=~HO?@vDP. 2p):c{<t,t~ZxI7`TDz._*%2g5LSd*GgXL{Q}d-!' );
define( 'SECURE_AUTH_KEY',  'r,k1EEVhMjK{Nz7Zkmk/+bfs;Fz/i}>Q3,nJhpk~IUdr-2@I|z}~Z/ixJiR([uQc' );
define( 'LOGGED_IN_KEY',    'fQkYE4$.[E}hdJtUBqj~Qgk;5j_UNj_7YyFM|poLT,%=2)tI8hN9k2ELnS1fO1}A' );
define( 'NONCE_KEY',        'sl{LS_N#}^K82*}$GQ@anHM?diw}}0Dg9;{(J(Hr<P _KEr?dvrgh2d4y)3LZX{n' );
define( 'AUTH_SALT',        'QCG0,)WEN+e&l1(hi>5N4m9Gob&pyN>G49KcvEg b+*jiXv}t5ZoU:{8<G8W)W!&' );
define( 'SECURE_AUTH_SALT', 't$[y7g7FNx?:dQy%{u!$>n=|}[QKPG_] p%e{Tl,,`-Jf42 [19aK05d-is7+w w' );
define( 'LOGGED_IN_SALT',   'z7Wmw:?Hb,!kuqLM&mHv,$ud_RALwU<E4qWq5RNA+z9lw}*Dzx0gIkk^Nk vH2dJ' );
define( 'NONCE_SALT',       'GyitW?!pT>cv/V,obKSo+fc-obLL@zKkrc@/PyF#?U]:h+rH~hbH/.EVN-~GW5;l' );

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
