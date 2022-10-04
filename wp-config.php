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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         '&R<H5r<]Jl6Ea:FOY3rVqIzl@i*$J6i3;SBuR,ToXM3[6avj+.C[SwJ3ne`Z6;DQ' );
define( 'SECURE_AUTH_KEY',  'U4mv +vpI+NmTR^DU3k0~u*1obQL:6JHEmgMugxg`OKTEJ0/`6n6RMm<E&KM*v&>' );
define( 'LOGGED_IN_KEY',    'ewPnEC,R|$D4 <6woWDdj^|O7BK4^`|n8#blTlm%`$ZO5(leUzu>>_#!`3UZx.[8' );
define( 'NONCE_KEY',        'eR|TwzLU9{IFE-U|pxHk=O_N?T5otCm{r $l?`MdIGj:ZBD7o,>&,SpJ%$8{3DP&' );
define( 'AUTH_SALT',        'G]o#Pm.iL_29f/]KiTvH|+P^/|$OTCTRI4&Zp?r_A$FT@_>YcEcOxM%aZ-Clb.vI' );
define( 'SECURE_AUTH_SALT', '!rf;eJ!zW axQA[wt{:#^io,d3Cs,iaRUF8bwun;4g=5oLT8Q=(jhE]Zq@iU e-E' );
define( 'LOGGED_IN_SALT',   '~-/*sq=SHkd|Qk=a!Cqns)R%bz->6Jjk*t1M &$N%9kC_t1QXQp@bf#a3rfj#gg{' );
define( 'NONCE_SALT',       '2}Wm4<QJQ<x9)Cn,5)&HI[0~USO)m;V;7Jfo||1:`J4GJ:mC#s?Jm3$MqQsvDc[4' );

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
