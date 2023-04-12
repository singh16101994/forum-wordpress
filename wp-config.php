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
define( 'DB_NAME', 'truefirms-forum' );

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
define( 'AUTH_KEY',         'TP#gwXY&1DzTF{o2UV>@1!g|ufpa}jqT!n_a[L&m/q.56=GFuQ44<ZD169,pwcX_' );
define( 'SECURE_AUTH_KEY',  'z`>&rc!i|B:AAPR!6A%Lv`wTTL7KPf#7soVr/JaH<l5cvsswd=?3aiCbrh V9x1b' );
define( 'LOGGED_IN_KEY',    'ZDv-)eom7}9ECax*!v)J}?t}w^E^!a1Hs fx),,7(2<rBuo}dut~2%<G.#Q}KU=)' );
define( 'NONCE_KEY',        'vUIF^?0VOObzdE.qbOL_IICC)S[mo (Y.}wI@z{<0G1e2j,uJ6IgEBCD!I]4Iyl8' );
define( 'AUTH_SALT',        'ycc>d/1OTBnJUZnlsvR_X(kX/*@;T}[MH!{o9q*DGj0-]%GPU^Py)tFS)BU3H|=~' );
define( 'SECURE_AUTH_SALT', '~GcxVhSTnTa!yx_v{P-q&ux9+Y]nxrbM@gB8duIb(LT+sE#oTyRK_p?XZ/**.o%2' );
define( 'LOGGED_IN_SALT',   'J_)ChFjy+<9]JD/Sg`sh:*O({Q1<ncC%vA-<s(~c1Us.~g@7`=iG5V:V`vwC !0%' );
define( 'NONCE_SALT',       'InMj}DJp]7PDK0V%q6taw9q#fclSah~#9k@`og! UhQno/nu$N0amA5-{p$zHXLY' );

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
