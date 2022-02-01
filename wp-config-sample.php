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
$cleardb_url=parse_url(getenv("CLEARDB_DATABASE_URL"));

$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

define('DB_NAME', $cleardb_db);

define('DB_USER', $cleardb_username);

define('DB_PASSWORD', $cleardb_password);

define('DB_HOST', $cleardb_server);

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'K7=CePNHQf4SM#jqJtec2n_LEN3.&k0DAkTFGc_#IhE)Zu,|We*V1|a_/5-!LZ)+');
define('SECURE_AUTH_KEY',  '1vne.v-1k]p4#n6`l2-yxJ>0iXJlmN 9I9i|0YXBVxpAd[<CON/:;[9r6L+l}DRj');
define('LOGGED_IN_KEY',    '=B=-;K,|ZPFVm|C]c@|-M1XS^ 5a#A:IqvdUAtLJ7*#~CM.v=R7KU5q1-_PJM/.@');
define('NONCE_KEY',        'qxuZ|-769aV=Nh/f]eNb+vy{;-e9N8+GsI-q&RAsyl>vx=G}8@O/*0^s:UiKT3~4');
define('AUTH_SALT',        '2I& .;~{=m-]`:bFHS/W+}~X%~Q~dv]V*NKiu]<WyB?#?ReGzlHs#?M5a5-*9EHb');
define('SECURE_AUTH_SALT', '>l}Z#Z17[2Tm(_2T b&<iOf1hE}+cQAbTY-3:W`[{V7iRCv_+%tvJqM~x8;&*48`');
define('LOGGED_IN_SALT',   'J>S9)SmEU6RLX58C9YME&R0:FyHZyoTHqbeD.;kjA<45As9H3[p=?4U/Mho|_yy~');
define('NONCE_SALT',       '3W;{jLg;gA5--T9TZ|Tu FrPA^c) (r9qh-dokcJXP7L+Rh72W-3|~Fz,f[HpI#|');

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
