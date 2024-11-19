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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fashionstore' );

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
define( 'AUTH_KEY',         'MH)A% PmdL_*pr%>1HGl?z+CwXZoU$MLXA}[nF4{8Zz={_V9cld}dZ|]t]Fl4-aO' );
define( 'SECURE_AUTH_KEY',  'vZW@[lL3|HP?`,`[|UyfHFL,d8<pkhW)Ny-MV`gBQPUJqSF3w>]p[Aow%e &!y(j' );
define( 'LOGGED_IN_KEY',    'P?yE_=rBoR]Tr17/l_7wL]4LcT+J6!CdL8YKC^mZ;ZS&t>}[G7?VqOa~)su+93%%' );
define( 'NONCE_KEY',        '})Cc//*FHz;!GFHAZ%kCR&Vm5b=-i8LsURY#.l=B LA$ynKuc#_#~( NVMg~ZB& ' );
define( 'AUTH_SALT',        'NjFpO2^gYtX54p7iYb^i0=ori647GyTi/H-%QI<]%4;cIeMq[F-crI`b;Q>15E;Y' );
define( 'SECURE_AUTH_SALT', 'tXpvvgxun^:4xPtM)SvVPHx3v J1+c6W5Q#f+y>la=G*x(Lw_VvBaSlCq1H^8#VD' );
define( 'LOGGED_IN_SALT',   '}%BTYbv22rXXpd:.OZ)PsqeH!7}se7g9Y$:NH:$D,EG]cCK~~!lr-Y1_OiRS0@7S' );
define( 'NONCE_SALT',       '.:jgaG(LA0@Y`QtGdd3v5xN?:m%ORMz#wXDo<snIc[>>VP)K8)7/z1X6}c%.ZB|u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
