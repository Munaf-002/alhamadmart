<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'alhamadmart' );

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
define( 'AUTH_KEY',         'B`P#:CUv%5`^eN4IgTysBc|#FaaeREsSS#(}j1SavM0^Re&5Eo~u0pw%3Xv~sH$V' );
define( 'SECURE_AUTH_KEY',  'sBWb73u3f|M(HrdesYxH(?&h`IKEX|/+j/jOdZ#6-RCgJ$y+y[^V6R>ES4~RVr+l' );
define( 'LOGGED_IN_KEY',    'LpJ{B)<7 b{Hr[mRTytOyP*KR1PALqNau7l+uCi#?#p?;hEp,g7]:QrU% mn]o?$' );
define( 'NONCE_KEY',        '9C[l>]Ie#73562|8AYoLv[(s{qx?@Q[nF1L9}yfJ4/Gv:a1-?)}Z)h/76w[bE&|/' );
define( 'AUTH_SALT',        'Q^C,oi=wfjc<~:aLu+#3(s]X$%VO5fZ&U_Lak~;O.2.0y15]CWIt?T<rg^?Vbp4w' );
define( 'SECURE_AUTH_SALT', 'B7:,({,R,<JJiqi:spb7v?%zTEf(|RT jB1M8T_cbQcLf~mCJ:#XX)zqK!c@`0GU' );
define( 'LOGGED_IN_SALT',   'XJg(_l<tMx63_Rr )EY~GMZND,2EEmF1lYI/AQ)ag?tS?=BLXzeS6[XKlX:eayo1' );
define( 'NONCE_SALT',       '>%6h$,jk9kZ1VkmgK!K.{&&)kp6T|DzqDSzxu%+o]d.:.<U63^=C{_eFIMSB!xRB' );

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
