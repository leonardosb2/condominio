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
define( 'DB_NAME', 'condominio' );

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
define( 'AUTH_KEY',         '+]Li+&E@A>^KgB<BJ-ou!7L:th|ptJ#RFh+[!nhK.5eQ5+IGmgsp!;t^+vCooN`@' );
define( 'SECURE_AUTH_KEY',  '$,N=D?V8V&A_rA6Y24+ZY-yO<yFqpus@qe$FlaT[SLbQC:n/h?co&C(ob)0O RSZ' );
define( 'LOGGED_IN_KEY',    'Y&Nk}Z+y>x_xqlp@7RAk/l]<L?xd9=N;zFiR1(N,8/8x$.LbdXirl=8Gg*0^t;O|' );
define( 'NONCE_KEY',        '91c:-,;z[r(I%to/2Av945xxXabA1{4t/,)1LnY2|KEQPb#.l;N&6D3L(G~SoU4=' );
define( 'AUTH_SALT',        '}X#l5nUS!s?W+uK8hiI=aT])H7z<CNaFTx]K5[ VPBVheE@Uw],;Dq4Uu4)eMM;,' );
define( 'SECURE_AUTH_SALT', 'EoT<*8%2jHX6s$%yPL#P~<B zBNn<gz.uV w5(#Q:U}~.PDETT;Vhz^w02i4_ 0V' );
define( 'LOGGED_IN_SALT',   'q~20<|E~4S;]_[XPiZK-XP(E<SqN7+,](gI4P4EJXK}NL-cM6Dd0b2E_m)nHc*ji' );
define( 'NONCE_SALT',       '>RF%uzFE)!Z<15/@(zZZ+W-S^>87+U`JBoMAY38_mUOI>Z,odsu5;S:ATYe^~!Ar' );

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
