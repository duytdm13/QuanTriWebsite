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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\brofit\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'brofit_db' );

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
define( 'AUTH_KEY',         '*.EjajH_Gh]96F,,gE8xafG&QMR;jT7Q~dnQD~u ?^h.eBcs i%vM2qB!GM`1cU`' );
define( 'SECURE_AUTH_KEY',  'PEp]Zl?(WG/<<OmMD*Iv8wS&X5 S5KO! Otc3/0w;*I|9nf_3KC_>pb97c GChFk' );
define( 'LOGGED_IN_KEY',    'i[V}F<Fr_^0Q!u7(PK.JP2k<*n0<XP@Wm3;8<SQDD6O ,^_+j}2TD~saz^FHw+5y' );
define( 'NONCE_KEY',        'y,01lf[8GNokyv7f7uU5/6NXwjMJjhNEhnZ4B&0(A$3,zs%[VcM-| tohD^dL$ 2' );
define( 'AUTH_SALT',        '6jNv=!to4Q<0wA?x}tkJyme`VkGr/z2pT|$%S[F8M<2PAsL%FINzOyr)zw|^SQ5-' );
define( 'SECURE_AUTH_SALT', 'In]RL?PHk1[L+?~LL#x|S $t9:%_tCfVNGdW]6l}H-0kxyJXyuVpOS~Z4Qarj$Gg' );
define( 'LOGGED_IN_SALT',   'T.L%=e>dPJG!UytLJ`Bt 1E%U!u[`oBjX`-4Oz_/)QY;AWmZq6C{3AmCfF`ybRmu' );
define( 'NONCE_SALT',       ' |FP8ZV3^8YKP*-2>wI2a)dU{y>9>u+5Z0]%8K?gz:Fx>(@5I0Qi|8MTd,LX7It&' );

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
