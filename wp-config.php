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
define( 'DB_NAME', 'KidsWhoKode' );

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
define( 'AUTH_KEY',         'iyKz^.um(iV8%2z*)*@^c)Uq#e=[qfm(v<ySQ1%L0=)eQHWA`H$.]|ma-c4o/wNn' );
define( 'SECURE_AUTH_KEY',  'olPclNzz^4UgQfX{M*:2+5;={nN 7%eehI)w=skP__^Xu7)Qwh%2K#tk d=6K]2!' );
define( 'LOGGED_IN_KEY',    '4.&v^Z$f;<x~{UR8pMlOeO)GSY)%I*nxoZe{jV=IGVG!_#5Z[AlqG3cfvR%jd?yV' );
define( 'NONCE_KEY',        'TrlHj_j2$$z4[F?}O&LTjv.;&c#e^A~+#gU<:S5Mbo5 401QY)4D7i4Lk-^xa~rG' );
define( 'AUTH_SALT',        'ML0gGlR}!oJGH)%cRLtzM(UY}A&D4f8ccsaL68>=iDYE&QKDgP]FX-G-^JCFqJYx' );
define( 'SECURE_AUTH_SALT', 'ran;m`m>GGjv7eH-$@=5M!@z</u9lHjA1p>7^k`1z5}!;fM03mv7gxeRV:np/yI_' );
define( 'LOGGED_IN_SALT',   'g70O3Ro^-os(E+`C~wzqozYT}R=v^]e5jF{0v-|dE@ho,+h97r:mjK/9Y qHWIXK' );
define( 'NONCE_SALT',       'r!KuhlN0~(~#Xm~Q*=lA)q.$ULgDoLsyi7_y/{~ll2U`pUo6r^_NuV^~B+5EtXRP' );

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
