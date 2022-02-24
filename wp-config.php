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
define( 'DB_NAME', 'dbdevrcdcolombia' );

/** MySQL database username */
define( 'DB_USER', 'usrdevrcdcol' );

/** MySQL database password */
define( 'DB_PASSWORD', 'R0mp3c4bez4_!?' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.rcd-col.rcdigital.cl' );

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
define( 'AUTH_KEY',         '6.D0avelZnnTushOZ}uoFWgpq?..l}qJc$3c?9uJ+zAnFn<dk Zhg3]`xP$930S1' );
define( 'SECURE_AUTH_KEY',  'G%PD$P!.#mS,E,5Y>*={R<5[[rs7c$}R.u/[Q=a:O!62EPgvuyYNo[&%jyo:zF{K' );
define( 'LOGGED_IN_KEY',    'ZIE[_uNdaR+W]&Ac@-d#WrNU)#Yr,sw4y-<nB|I>_O/k*iAgcwo},q!5!8yyXeD^' );
define( 'NONCE_KEY',        'e&S=_k,uYQ9]+LiD.mF= Sx*rT>{iKWn4Y=`,}AFaP~0%:+1I/Sq?U7X]=ApLe/3' );
define( 'AUTH_SALT',        'ZBH@Jobgro]-K?}p[Q|itjd_9uket0L:L#Mj7~zK1nb.#pMY.2d(IUQxSE!rX,%r' );
define( 'SECURE_AUTH_SALT', '5tHax@P8# !M>G(ymacvDlv?| :NTG6hAA+<zCHj GghNE9~yIQLN*?(Ws1aR>w:' );
define( 'LOGGED_IN_SALT',   'Ms}|v[4YHV{/VTS R<:RdA,caPSw#tLuLhfA!,jo9U/PB^X3,tBf<WYfV<)/i=e}' );
define( 'NONCE_SALT',       'N`e!@Rh)cN^;MK&&ScUC]vZCE;;;W*dqs.b6$vD]T8IG7og<UC9|rfIZ>kG|p#$m' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
