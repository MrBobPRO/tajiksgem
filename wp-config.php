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
define( 'WP_ALLOW_MULTISITE', true );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tsgem-admin' );

/** Database username */
define( 'DB_USER', 'tsgem-admin' );

/** Database password */
define( 'DB_PASSWORD', 'm-f_dwWtsgVeU1Kx' );

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
define( 'AUTH_KEY',         '03|``ailg;@}CSBuCP6KA+85|.G(JKm-x=gIJIwA&1}fe*Ts6)OSYf,%PbPmUOeJ' );
define( 'SECURE_AUTH_KEY',  '>nj3$]&D+Y@0X3_l/s^CC=L4d/3E~8lJ!h<|aQZ06S6d.*TsK-XhA?r0U%mU[{(N' );
define( 'LOGGED_IN_KEY',    'R#PyG>/ &j^;x-u +~mjFm|?J_g@KT<O>%d2M2woYB.1S9_#ZB=jV<lw*of+?OdQ' );
define( 'NONCE_KEY',        'j 1>7pH``6<<-y28N`,vf#vBljX1--[y yR|]:C6DT526`M01:m*zP&`FSp8&.Nj' );
define( 'AUTH_SALT',        'DzM7k~l=~#q13l[`6P9P]MU&h||Fdq3*ve*^xs0+q#$E$:p!H@!K_=woZdbUM[AJ' );
define( 'SECURE_AUTH_SALT', 'T?@]m7RLl(_ { Qg[sGq:/R)Ky(J:V?SNif_rf2[Y.<8NP&@u#LIH97~^NeWp8?V' );
define( 'LOGGED_IN_SALT',   'n.`z=W`V&Y_;pi]6rx<I0)oh|f17tYfZ8(D4AQ+5rqIoM_]l%itHWl^^RlIB+70S' );
define( 'NONCE_SALT',       't$)]l0~xGbLhrEjK6Ge{*c$a8X2:TBQZ(LKHVC44AddVF mx)ns<QydUO*nvbWe1' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'tajiksgem.tj' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
