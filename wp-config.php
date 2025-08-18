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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '*yawct52BM)`I-F>p~Pk6~S#o$7Y@uZ*@?8PBqmR$$.Wc2vo)Sj-!|%=:2_:q<~r' );
define( 'SECURE_AUTH_KEY',   ':B=`GT5($OACvZPF+|jd%|i*JhNu/t;pf2y11c}2nX7qz|&q?-B)cW}Ecn3b%j5T' );
define( 'LOGGED_IN_KEY',     '_DFtUR(tPB,7:ihPs]kslx=<,oX!9%v3P&GSI+knq/^I&I>9Q;!qT=o-.;b<9D`e' );
define( 'NONCE_KEY',         'd*spzeMFSX0~qB^pJpW.-F-Vx?1IBk!ce|N~6k^V#8zm3(V%~N0AZjld+n33Y`PF' );
define( 'AUTH_SALT',         'hr4t.@4<b$VuPFq^)nGvU!!,Z3Uw8OXZw/Gkbd`dl60&:;,5Y,~5(S0]tRGiZvss' );
define( 'SECURE_AUTH_SALT',  '.Pf4B:UG/ews[A#^pw k)PImusPWeg^P?H!aK/;TP_P+{+]|9|z[K cCRLmAJF!,' );
define( 'LOGGED_IN_SALT',    'f`E.!;ZN}|Uq`#07VW.l|5!c;ROMEQWn*:p ,Gt/4Ap(3lCG<^d-G{=m8ZwtP}WL' );
define( 'NONCE_SALT',        '24w^2]N#(6,;>W1;EaX%  ,MuEZp2|6O9);Uf?6*4.Pg;(NuOo>IV4Ifr8u2P^+i' );
define( 'WP_CACHE_KEY_SALT', 'Y02$/7&JPCA70AcI<p%fYvKT/=Uv_/E[[7&SyE20*$. C;_E),It#}d]927|$8Ow' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
