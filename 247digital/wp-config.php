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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '247digital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's.[D@l=RW7ApPb>C59%1vfix1L|E^XusSD`f5wUWfPGL-L|:Uh|x`H-~&9>Z4bIF');
define('SECURE_AUTH_KEY',  'Ax.;Ck^s6mQ^sK>JDNx{Qks~XrM[<[~B#RP:@{wtHsj.|<uGkv;+^:l<K*n:,#4+');
define('LOGGED_IN_KEY',    'w^ `7*!ZiUJkmh/:QAOQ(*Q|64{VgpE}w+6./PN>luc5tIB5b .ERKJEjJ}%_@1+');
define('NONCE_KEY',        'SCVF$phpNYva*Pjd7!vKS{BuPADY2;KI,vUir~^jgx@}n0toAxd:|H^?w%*5;>/K');
define('AUTH_SALT',        '5^]b:)_/qH5,%`E*8RNn>NpjSaXH~FiD8z_esQ0rz/k3$Ou?5q8HLZ#xKIRZERE9');
define('SECURE_AUTH_SALT', 'zB}k$EoXv(#C=6q&6F~2L5}sy)<aqn%nY/V1<f:H;4Rc%tbLJpMRnYXS9j8C-E`w');
define('LOGGED_IN_SALT',   'q!P9>fB#> 0*;S>HTR~_R&YcfB,oMar+u%j/R=0#~UO(m>?G, u6J|?LaNV[h1i1');
define('NONCE_SALT',       '|)2j[#pAT` pHy)g{|U+16mmBz`,2$)D=5M(#km/l?B,5Yv4?/eixU~y&_7u@FrU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
