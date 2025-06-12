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
define( 'AUTH_KEY',          'Bv.uQ{W7e6fl1oal[w7vMbCmi[)J3.ELp`nhf>bK}sq9Wk6bAz|,{p=Sy2Fh~^uS' );
define( 'SECURE_AUTH_KEY',   'es91Ba;Eu/I6gKWD/H:fLrb<>(?1!~2~:hwnjA*/)rbc5)00n>@F[e/r<x$7(w-e' );
define( 'LOGGED_IN_KEY',     'Z}L:N;NAh}EGKS(?{x?~ph!/l2/4Wwrh:PxW^IEL`_c2x4,?Q-l2aXgQNKA!f,|U' );
define( 'NONCE_KEY',         'EA=>CBF%DqM1)hgUHV&yKc*>{A}brWBE*wG9OBx!};jjBfh,nhE;o3O1|iWe~;s<' );
define( 'AUTH_SALT',         'oN~g7#ivf7AsR (un#k8t+o9OD;}ka.6+)X9xsrP{!I?=RiPDc-Jm|xB92izB:~b' );
define( 'SECURE_AUTH_SALT',  '^8=_#FXonL4DT|fXvPShF~;;_yG?~l157H$zK*z?qY-6r<WE1O#uI2|hmn|C3zr|' );
define( 'LOGGED_IN_SALT',    '_#wb5=g}sy.[7O+!L =$Kzz5h#8OAEe>W6Aq+hh[0A|$_LOy4es[I7IpcKL%r~%<' );
define( 'NONCE_SALT',        ':Nq#QT;dL6*(-TN8C3mM?IC%-!NO(@5#-n*)6k=,rdq/a<wx2ss5J10+@<YcL KO' );
define( 'WP_CACHE_KEY_SALT', 'jN[]w=m)GM_&[R:uX<-=EF-/XUOredt=*n6%M6$lP8Lx1fZZ5PDhX.3} ?%O0fDH' );


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
