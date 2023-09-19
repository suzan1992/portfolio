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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         ')b?nd_vHJA>~9&qW>@j/8?|H hY9Cej;:|qiKW$;OU@[tGv{> ;+]w;HnPNifj#Q' );
define( 'SECURE_AUTH_KEY',  '5Iy(~9]PVrdq>}];K!67rKt=V122Ofo;}F$8~+%bM2wwlA!g~{U.X@FKg@I$ZzuU' );
define( 'LOGGED_IN_KEY',    'PMFHtCPrlklpO;#5PX1*OuHA;Y%_9u?%h-#p3>5b}cW}t#GG%T4ZggF<<7)Z,Btx' );
define( 'NONCE_KEY',        'S;#(OXE0;&?5OFL?aK=fz]`K-kL5QeF*KjT/xw| 7g34y! =~`84Ri](9u:8aLn>' );
define( 'AUTH_SALT',        'd~X;;7jNX,OQxi7%/%:H~rfDZ__L=/)JxCfqk)E;8Z)?~Ma,Htj_ty_]:uio,XkY' );
define( 'SECURE_AUTH_SALT', 'w+n=;9`7`1P_B5S|?:gtYJ0g5b6bc}z|hpZjq/9D[8:w`cJW#&GLLNifGKko,+:8' );
define( 'LOGGED_IN_SALT',   '|(6;4%un#qR|:/C#/<l/rEZ~D;P%KgpoFJQEo{P+(/Xsbie(v@0%yfQT~2>dfq^q' );
define( 'NONCE_SALT',       'F5gE,#3wjw1dHc;IKDlRj=%C611;fBNr,V_:_a[qg_?xcDM+G1!?=z9FVW~>5C;d' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
