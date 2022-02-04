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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         ';O^o{51n`1!iv10{k!xN*lyf+_OB~%^/}++qKG&cY*=MnFs+>~$<D~v{t=nI.mQk' );
define( 'SECURE_AUTH_KEY',  ' {o_k:S()EjNr{=LW;G!XLv&{pIf+aF]$M{POtBG wNY uJgy[2l|9`*Ifh*1JUL' );
define( 'LOGGED_IN_KEY',    'jS6x1nzD}?<lft?~[AF]ReFEjsP,a%fJe>.f.RT0Q[r,e|2SghPZl@9;+[G>IM$X' );
define( 'NONCE_KEY',        'Q=kJA9vaFB9.9[V~;cy2ms(=#b[r:<z$nm?H^YCw{^pHq*{ZfQ2vJ2onO$K!.eYo' );
define( 'AUTH_SALT',        '`y(1r0I6dh-W!#E!b1&xL+*v[2HKB!dmMtI(rP^%?l0B%(D%e2j/bt3=rnbSW{I/' );
define( 'SECURE_AUTH_SALT', '3E G2icV`~7olp7)kK*vId6(z=fB|l%k{yTGffD1wwvlY4P%vj9I4CR{|D[jSRd!' );
define( 'LOGGED_IN_SALT',   'Et|DrzLCy?f$zmAdYu1qCD[6Ci]GtZrCW$N*osd*SpeA?A K-0~(gKA[LW|6&VKk' );
define( 'NONCE_SALT',       '~GU}7G>C$,7ZF!+-,eN7+V>8S2usj/iRUK9J;AgL95{)I#Xe_@Dt*O.Tu{U=<lv[' );

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
