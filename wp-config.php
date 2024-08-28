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
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' u?p4_&1*=2C<&J8k2A3Ew0SDp0{52z9XmfCZ<b6V]zgTJ&pV*8={anGYS>Lfm^.' );
define( 'SECURE_AUTH_KEY',  'caP^*]Rwy-X [8>e(n]k/Sm[dg|Bqs|Wq}7W;shQhb!c</o^%2j(tiD[~?:w~b([' );
define( 'LOGGED_IN_KEY',    'vw4yg=8uyBnVjCLOg;}^)U$%}@TJ>epMD*wLl?JIWa4rl0Ee~~oCR_C[k&dhg$_5' );
define( 'NONCE_KEY',        'jy9zmB)-=o=:frhG,YBUx]pCAm?B7wquC~7t(DidYn{vNTvJLp@I^4& Pe9~gevC' );
define( 'AUTH_SALT',        ',}% !BB1tYmWJgu2#FFr?2J,!ZIp_2`gCoeesQ_)%EKA0#Gv:1{sQwyn$Zv1.kuZ' );
define( 'SECURE_AUTH_SALT', 'UmIP4E33#,jV`y<<4wDEb1kjSYh+<Y)~?^E-_@f&B]Nvq%+|KA9ZA#3jQL-@8cp@' );
define( 'LOGGED_IN_SALT',   'N16{|(@`]ld9*-DDh3d61&)/9Pp ,>umPm{+f!L,+0[5]n$<e?gK?L`e):u}uLJ$' );
define( 'NONCE_SALT',       ',4>lS~7P?*XZf>L-Sz64+VoA89WUw{5`~^XzM|/3ZR|]Zn4lompx/v2kt~7y=*U*' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
