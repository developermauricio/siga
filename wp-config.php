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
define( 'DB_NAME', 'siga' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', '7YnLAWmuEsU4fBTjj78u' );

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
define( 'AUTH_KEY',         'T)c~3p?X^Li/ckS@UhW< lTfqXtd-LA}u2 yE/O/Jzb+xnQ.>/j{jyJ)?Y.O!vYE' );
define( 'SECURE_AUTH_KEY',  'A3e+c(L?=F]>M=]_*G5?+Co?wxV](pbxtSDl]:sJkNN56ioQzwW6$eT=u;0;qjV>' );
define( 'LOGGED_IN_KEY',    ')Nw>eyhe|&I>)WBw@yR5NAldn9@G2&:9@sq%5#nZ@aG;n2-!aey!f|(atpK:tsz|' );
define( 'NONCE_KEY',        'Lv*y=E HOZnd M@}^4}ME)^qsZjhHL5h5S/6#:W(^XHPVYCa%j7?*rA?q-X:gS]E' );
define( 'AUTH_SALT',        '=sv0L;xjYC_okiwz;ZB;e|${xS~^fjIfRoPZueoEfGC_ R9?ePldkBM5(l8Qo0dl' );
define( 'SECURE_AUTH_SALT', 'x3hRy6Kz @ojo S=6g?cQERd).T-[r3,vrKE@W)$c*yREm(aTKs=nlZN)oRhXqAn' );
define( 'LOGGED_IN_SALT',   '1=`~mt`WgVI<Z95`~P-c:7t9E?^4O%g<qn[8PVTvhj&d 1Xwr~pcUrxZBPZ7WO*Z' );
define( 'NONCE_SALT',       '<Ri|pPMgolH5xXO-s]sEfkTa?Ad8:A!_E2w%J[_SsM,H5S~KQ9Ksl-JO~24xYusQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sg_';

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
