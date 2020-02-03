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
define( 'DB_NAME', 'tutorialsdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?-i,-kXP{LPM%=qkLx?~rMVHGet{+tk!<.yxza;$/a3Ewfx[jy0OFqmvk^+g0Mkw' );
define( 'SECURE_AUTH_KEY',  '[/L)]3g4z$jb`}X-u[j#p=~w^[%u7PrAXF-zWf/{:q5:`50NF?h(dHY6Wf.M 9)E' );
define( 'LOGGED_IN_KEY',    'PKRt%S-`9V+K<z IBDR+*jNmU4ZyAOE&Lh.{UXDn`3pG{:Xo6D*osD(R$A E7k9@' );
define( 'NONCE_KEY',        '$x<s+8+uo@DkYe`;16nrBBGqr0|`H{KQx;P[Z>eU?&S>KbmUCogy}s:X[`{k9^C9' );
define( 'AUTH_SALT',        '1nl&=`FA4$ynM0p*7ZVNeMx+GkdF|C65$P`,d341@U[j$=2=+j/`#@l9E!O/C-di' );
define( 'SECURE_AUTH_SALT', '-;Cf,i-`[g+Vlq72,:SMwQ./-dLwf|4>kIO=OC!*9^$cf!:jW-e0?GJb!bj*Q,nj' );
define( 'LOGGED_IN_SALT',   '&C[zJM3H@gs;p]]|mrKh[Dw8GpM40iaRv:-Tx(WLCCWGrwx2FBC>lwm<e]|i#ULu' );
define( 'NONCE_SALT',       'ZlNE,vq>A-&-V>tODD<Nj/A]aW.H1Im:]aK&o0|7pwHEzvi!uQR#IdBC&ERQ3lQF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
