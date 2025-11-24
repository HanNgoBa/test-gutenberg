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
define( 'AUTH_KEY',          'r_^ov=RA Ttl1K+nZ+g3U>F1J4jm!mCM] kee&0CuqE2px.bb[!o+SX$EIjja89S' );
define( 'SECURE_AUTH_KEY',   'XU=q5f]b&rr9T=bQmEs{fH&[<^ZCk*&QAtdEspO%jA#P~tE{,^ iJO)hl<Wa3@XM' );
define( 'LOGGED_IN_KEY',     'GXJ})j#FM3[zp7H??r7?bMq!..)cP6__,5;aHo<Zm-=r%C^U-Pk|WR{oUl?:AMw$' );
define( 'NONCE_KEY',         'L^!$gEQ#)!TTJ-N`>=.=<kL_IV|U56:IG!}W?0Q&B9*c^w@mccFn!!+jFq<2+:p$' );
define( 'AUTH_SALT',         'G?/ATLig)Z1f|i|YT2dj,}<6<|}&3)Sm5P$Y2B4.^sD>{I123W$rY!a7V]TDns&:' );
define( 'SECURE_AUTH_SALT',  'O9=ES^P2?AcVvJG>IW^-!}N_&2]h%4`GWp~Z?Gl.8%Rr@!^eT+GWd,.Nk]x2O{X_' );
define( 'LOGGED_IN_SALT',    'CA@&geA-iHk)=0O9]um!Y/^}%2EH@ ._^4?B:`8;Hh?>K:]]w/]) ~dtSDt:2Db|' );
define( 'NONCE_SALT',        '*,Rt)&zJtO<%zDA,hn}8>Bp,S<q{C~5i=CiqYckyd0L,19?0e:~Fpt)af;^TNK!~' );
define( 'WP_CACHE_KEY_SALT', 'Z_2vMSw2PplD49-,U6,3!fXnVLjV=v>K}?;Dia@O|#UW+.F|-|oNtd{Ry-(RmXM<' );


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
