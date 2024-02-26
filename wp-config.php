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
define( 'DB_NAME', 'mr_handsome_db' );

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
define( 'AUTH_KEY',         '&oL9ry^}x]$CsgMPd`#]B72!gy8/Hwe:q{`5Qo6-,f81@huWgnkFrz]gj[TTA./b' );
define( 'SECURE_AUTH_KEY',  'P+Mg-.]Lw&uyZ@.|WDJ):Ihk8^&O]{x,3#CDi.FLS]AG28VS3;a42:FH+/juuesG' );
define( 'LOGGED_IN_KEY',    '0!1<gD:%_~lB7j,$v(bAJ6K.yY=$[>Hu=0(Ns8#i:nH1lX;M0A{-WIgXD`#]u(je' );
define( 'NONCE_KEY',        '?sp&Vc-7t>E&g!+^.Lik{I&eBXa#,_NBGgkB`oXMP1j3N@DXzN?iIXExss[v+arv' );
define( 'AUTH_SALT',        '{`GNnauq,VZ* K&C[NRBS.~m;6u?Wy(/gro-J_sa[{7uq/k%g+[K.7=:&p?/Q/R<' );
define( 'SECURE_AUTH_SALT', '$Ym#*t[Q$wzdSdL6HAaGkF~_}T!:Y$(Mce*DU-Zi}uiQ)s!o2e}[h1X!g)k}R;9>' );
define( 'LOGGED_IN_SALT',   '_uT#V,RyA2>?%Iv|a$YwguewtePR[O5a@+Hk!&H@?gUx9?2P9v>(,@IVMA<3j]xF' );
define( 'NONCE_SALT',       '0;E</:5EDJWgP+DGF@Ks}%0Wc5^Em5R%z:C|@m@C6s9m;ZM@X3~+%=5/6bt.-^P=' );

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
