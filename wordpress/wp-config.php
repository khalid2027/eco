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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&&izwqdm(;dm$*%O%S1Ac!dxIK/+1mdj>Gqav.HZ^Mw$L*-F]LfD`7RO5G&cGEl1' );
define( 'SECURE_AUTH_KEY',  ' H(C$#8b :(sszr#CEi5&HaFz::[8XVJcE0Av%)n62Q,,!#eTl|pBwL_{PJF1S[;' );
define( 'LOGGED_IN_KEY',    'i+`NcNrazcB^Qs(Z/a`,_}5VDGLG9_~(J|&D9a l,[xaF3NF@fA<ecJvZcsxTF(z' );
define( 'NONCE_KEY',        'Hpq|Zp+[A2;Z0O8]wtf1zAsMY5-hsJF;Lkr0I^TK1w2gbwNlvW;6QDCrH9=!G^j4' );
define( 'AUTH_SALT',        'Hr++PX57UVdkSX4UD_@_?Kn7Jyrcaxk9S5d@bK@6FoXW;L g= U!~tpWJVmmmPV_' );
define( 'SECURE_AUTH_SALT', '4cXrE@YXY3Q95eL)m%_$)Irl/Vd:5v#Q*3}?bKwrw#=5=ij&=H~BK*8HJkd0U$P)' );
define( 'LOGGED_IN_SALT',   '4I7}:!*fT}UV~<^aeP1eDz@S4kQ`yzSr{ PDZ;%N]=&|`.MI y_jT!w1o`|-{`=^' );
define( 'NONCE_SALT',       'We|9W7PR$<F[kT0-o`&6khsM@SAn7.*-+tu]6H3Q5t7lO`XH0L&nm*S]42|4;`/|' );

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
