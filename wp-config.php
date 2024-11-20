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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// Aumentar el tiempo máximo de ejecución
set_time_limit(1024);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'darwing' );

/** Database password */
define( 'DB_PASSWORD', 'dssp0781@.' );

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
define( 'AUTH_KEY',         '1Z#zaXzO[`7-S1hw/EPBDd7 KF6#TeDlRj0T?f-R. OThI,%rQhzre=h_<dl?>nr' );
define( 'SECURE_AUTH_KEY',  'CKr~U3dUDAatJ6&F5|eEt;UW_=EW@{c_m,gf!ua9~cVD*z7>CRUm8UPC<+$2bEOk' );
define( 'LOGGED_IN_KEY',    '@m7/Ok$,KQ~ b7),U% .Kj$y^jyuu*,*,:/iZaFrk_K]KY*UjYHbu[1X,?0ce/^s' );
define( 'NONCE_KEY',        '_uFfd zMB+2H!HpMD`=|[!A5RK84=-GMj<0n&)`0)F0nTl$JKGO/lm):b<=fV^W.' );
define( 'AUTH_SALT',        '*c67/QF7C_6@5@Jz2 S-U. O|T[%P7+m-zl@O5F=D_r`]hGV,B(k_o{`n~ZFv!KX' );
define( 'SECURE_AUTH_SALT', 'a,);wWt*[Fhj=Fp^;v}F+21K[c#Z[c8wK[Uz&C)zOzWuD&lxp$.]#0l>N51>Oi%=' );
define( 'LOGGED_IN_SALT',   '<rq msL`ZKl>?.W);0CC7A ZL!xt7.fk*Y$^6H3{}>Pd^G,$S]^^[#[b|pI8BUSs' );
define( 'NONCE_SALT',       '{.t0]:8mn+o}ugsq<vYa_V5(`/&8<>73)1~wrib=G,EPh71?zXy2^TOU4BRo+zgg' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define( 'JETPACK_DEV_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
