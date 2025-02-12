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
define( 'DB_NAME', 'nike_store' );

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
define( 'AUTH_KEY',         '_}:3Y3oZ6X:<m7vTeuPYJAc{2jOb*6.TFmN19pX8ij;n.=U8k64+OZpZq>qT9Mj0' );
define( 'SECURE_AUTH_KEY',  'D4MT)3_8cio@AU#N;kwbV[ODXKof@S ]AyEO;`S^~s`}>P41Wsm/r@:SE-P8]MYC' );
define( 'LOGGED_IN_KEY',    '`rd~6WMros_jT!+@KI[-q^`fz:v/1DUW m=a^2+l@X9Nez?&b.Sx}!8r>|~EQ_O[' );
define( 'NONCE_KEY',        'Y#K0=`8pLr._8w+v&v+_^(1VBtbR|p%r;`{*|T@+B K|-]1lg7Xm*y!X3_p<C8=6' );
define( 'AUTH_SALT',        '2|J&Dt,gzV=X_8@Lg?6]C?H`_ivq25.*J*v2o3)#Iu//oDrW[-[d*_*busG :.?s' );
define( 'SECURE_AUTH_SALT', 'u&P8p#B`uJq%0qe@&_HXJ+vQ>.q!#2;k06YRB|Xl<N&sp]hsZ(;Gjd!c~xH:}(nI' );
define( 'LOGGED_IN_SALT',   'I9qs3jWWHDnT|Ldzb-.Vxm 6y7rUB-jX(+wk1C]cZp+62?eVDn;Y{q,b=UYyPi`]' );
define( 'NONCE_SALT',       '*.#1rduwjwDU`ZvN;XQ@#P5YDdoNSmV.`r]k;c-JtR/sybqfRP.p{!bsuZUwo6lx' );

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
