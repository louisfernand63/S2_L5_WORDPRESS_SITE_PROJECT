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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 's2_l5_wordpress_site_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'vu-86s7qLe-bDRW@' );

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
define( 'AUTH_KEY',         ']VfT~_):g&S}N|m4<,leIEQ(Dwn5QyrH75.b=TQrlut>V[JVH sk=Eem#pg!JALQ' );
define( 'SECURE_AUTH_KEY',  '9qcCQ6`Z>!V o4^:@=QG/B44BP1^e2OPwa0jeP1J-DSp9}6,) X<69RWl^ZT,:FM' );
define( 'LOGGED_IN_KEY',    'FV,GJrBGThrF%!ru8*Gzl3r,?!Z0<d[?,Uuk`2-qGd=R:rRO-|.{M9=hO68i0+p-' );
define( 'NONCE_KEY',        'w5x2<iJ5toyCrH1KT~Hh@@QN%6jk=#:BZJ.Udc) <y].7YUvZFgJfYyh]1i:G$VX' );
define( 'AUTH_SALT',        '*Yw,asa*OxWU~w8](?N;Lw:QTASGJC}z|qPPmY0[Bit6v&CpY(O>q&Kk`k^vQ|QH' );
define( 'SECURE_AUTH_SALT', '>Q_V8?%XtnLt~n]0X-C2#25OuUHR(.^T[N>([)HDlGt^2McG3;L5%>K;FNZi{]-?' );
define( 'LOGGED_IN_SALT',   'GrouevY*SB>(>!q_eDF1o^cTL2vzW[iE?uZpo70u.m!+g&gv;]iSib( H2(3=Agk' );
define( 'NONCE_SALT',       'yZ4o_B,%sbjdbemTW4>,rkRVr[I.tqg=4Q2/*dgsm_@d?s$b/m9zkL]kIZ.kmbHf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dlf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
