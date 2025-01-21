<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'testcase_db' );

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
define( 'AUTH_KEY',         '$Gd?W9156<wx@$HCqiy0%sQV )+Qj0aPezbD|wFRQy|&(,eJ:1H(Uly}JV:^C7%;' );
define( 'SECURE_AUTH_KEY',  'z[nDz W,1B]m6QTai<g.+7JOyNowT0I^C?;,m0u]WV+^=:c>)F`{bwr0xC*qtGJJ' );
define( 'LOGGED_IN_KEY',    ']?Z{:(}~?+xQ-w3Z|WlgxiIX!L*LgG5AiFsYt f,(AmoTspc9D+=SG3BLZA<KWG`' );
define( 'NONCE_KEY',        'VzXA?$.`{SSzK_ZVQ:`^tAaSacvsv-Jo~>=IKQ pqLl}mSVY.i{T_fo{9PT|C4Ko' );
define( 'AUTH_SALT',        '5$n|otz.2BmQ ^B}0+xNdAx@eemyn0cx)!%oIWd9W,cjS`k>9pb-@lYP}/htwF_U' );
define( 'SECURE_AUTH_SALT', '1ZzYW8?jc[9rLSi^EvgoZ7?:a>0)_cX2fx^Se61vdZxX>dNGO1*A^|@f!0tYnuYa' );
define( 'LOGGED_IN_SALT',   'G]_bU;Y]}?9H(Kv9<u$g37`|a<!FA=?I<w8H8I QErQnzf.4rr<9dI)avmn5#,4t' );
define( 'NONCE_SALT',       'W9=)1BxXv.IH4q,`Tx,p[vXbVA4ODn5$k.Jp&4?1Voj(Tv[<Z/fpqrRU4U0>aWfF' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
