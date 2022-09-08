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
define( 'DB_NAME', 'post_test' );

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
define( 'AUTH_KEY',         'p.V;j56IMXf>IQ-2 Oq^ohS[h3?T+O!g`dYUZ[Ewy|jx?,yoS!v%q>~!DNQKs&>z' );
define( 'SECURE_AUTH_KEY',  'p:S4.{wWoNZZy;=?9<:liem{8v~aYy>Y{~*&jg7?@-3:SFB 8WC,0n&4.V,2ZW>p' );
define( 'LOGGED_IN_KEY',    '^J OLuOCeavunTrBrX#[jQgN1(yUMoy%CV~P|`h_,BDT(XzR#O?*oU:z##OfiPPX' );
define( 'NONCE_KEY',        '|3HjFA/rz!0<I:}cDnQ1Pahx=JW5b6nWXC^G7*r=Yzd)TRE3TtYzTQ,evW{6 7u#' );
define( 'AUTH_SALT',        '>z])52ARpWwQj0MRm#Opr]3(Jfh&EA/;Mpan9#52dp6Z.o4w[-~+UZ7oxDO4Z)_{' );
define( 'SECURE_AUTH_SALT', 'hA.&Nvy~}bqie_(6FTfMIVQp1/<QUsN*W]&A<V[a0&=0yrJu,6Zt[aa+:v2Kl`!_' );
define( 'LOGGED_IN_SALT',   'g.@lZ:3I8a LFK_G`AS4$60!r`HJB0LSz|n ty<YjW{eEbB+(Of[>H:TX;zkKG!N' );
define( 'NONCE_SALT',       '{/Vp=lNO>.pd$b0aeEbL.Vj@M0pveF<[R6f%m!;N%RQJ#MN3VD;Wc~i+1fpdVo1%' );

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
