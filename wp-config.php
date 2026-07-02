<?php

// BEGIN Kadence Security - Do not modify or remove this line
// Kadence Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END Kadence Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'fmdBaE9yP2o4diZXVSZgNzEqeW03JnxKRE9WY2dGSHwzZE0kNHlCKEo+OUxVKEI3dzA+ND4lcX1XLGo3NCZHeQ==' );

//Begin Really Simple Security key
define('RSSSL_KEY', 'T3OgiXSuy3VLG2MT9iulBrPAkUSC9141oYl2nNV9nZWRRAbSC1qKxDju92ruXs5D');
//END Really Simple Security key

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'AUTH_KEY',          'jZ3Qi<V2>/g&9>3V!-8>x<C#@&^@Ljmw]s9Uy,myL@h2$QsfSz].lYF)Vnm/E,X ' );
define( 'SECURE_AUTH_KEY',   'A2X=nWFlz%`q|#]e/+(yxwBkKJ@>DD-%q:X[f1$2tR51PbJGO6KnlVMaBPf~k7Kf' );
define( 'LOGGED_IN_KEY',     'M=A;D5l&ke5I1X+8Q#r=eT/63Kh46uN=XVDO!`Iy5sjm#[^CF4JOYCE4Rj|te:cO' );
define( 'NONCE_KEY',         'aX37aI}FDM0HZEj2w#~z(R]wJC3waf,Usoc= jZ|k>TeystE.gxq;QK![7&l/Dw>' );
define( 'AUTH_SALT',         ']Cezub=o*O<`;%ZPont@Ny>y eKv-Nu~W.5gj%I)~-;{XKm!0OcuiHPT8dXUj3`l' );
define( 'SECURE_AUTH_SALT',  'ocg>2Ov[:$}g,EK /8BgzdR7y0%9(h{jbjEyA$xwPh|T+Z/RGamsVFY}w+->Vty^' );
define( 'LOGGED_IN_SALT',    '{s^*F5~L9a$n2ao7XWj?Wjia5N%W)B>L!P5u1-Cq%?qC=blvw_N;f,Ho71jfszI>' );
define( 'NONCE_SALT',        '}lEcU;]^L4,}mi{(Z`O^#QgMH/_sPH6.@y<;TD1L|Ibeu`!ILfR#)8GSEoeGQGKF' );
define( 'WP_CACHE_KEY_SALT', 'bzj`f]sY#|IHA*]:CeDP1j@*[SlIg3Y!$Hf^]&Qk2b)83dW<M19<ytXUu*/pfIG?' );


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
