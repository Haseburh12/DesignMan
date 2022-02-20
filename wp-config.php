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
define( 'DB_NAME', 'designman-db' );

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
define( 'AUTH_KEY',         '~C PK/1sX06&$eu;lwc2%)|]/9e#ugh*$[jUQn}(K$1Ue3i?h,^s|/ijL}~nXd`W' );
define( 'SECURE_AUTH_KEY',  'LS;mS?`~Txw.F>Xi>!K`1R{>=1JptfFv<*y4GOz,pqOe`OyQNi!rfP~)h^=Xk}Cz' );
define( 'LOGGED_IN_KEY',    '>%!-k[xOJZw}hv6fu3{*2ftkRt)zT]80mYrTyDibP&{f5u`g(g(P1vyef_aFE:!v' );
define( 'NONCE_KEY',        'li[]Oam.0a}@#a7$}fAfJcq?e~k+QK=OhJ@U#W$yy|#{S5fYn#_i@96d]kZNy%rF' );
define( 'AUTH_SALT',        '0jQi!gi:O6<WxmK^H[Im|ellJ$M 2@NH~b^@Pw]Qy3,v`|JG&F[YH$@(fc;3-`k>' );
define( 'SECURE_AUTH_SALT', 'U=dubsB*^|%[_sYRsA[OB!.y?{|sf~dy&pt1VfEW8Y0l0|/5V@~4Z ++|eCRwRfQ' );
define( 'LOGGED_IN_SALT',   '6eS?J6ppJ%o(v| Ywo.]x.3@@gH3_<_Ne[c;$ciL;`uN&CqL<]>74w5gI9g|r93G' );
define( 'NONCE_SALT',       ')~+SE|+S^=k0hIZT%G+C.KHU_k(JCf%F(b<0z)0%:pg@#bv3DnASCai+xxb?;nns' );

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
