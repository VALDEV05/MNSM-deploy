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
define( 'DB_NAME', 'mnsm' );

/** Database username */
define( 'DB_USER', 'mamp' );

/** Database password */
define( 'DB_PASSWORD', '2diligence$' );

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
define( 'AUTH_KEY',         '7Dvp6kn8lZqEc:{l1;BhZNa?di~}x,UWoXj_!TY6=e;*,Q@cctBgg.Tuj=Ch&=-g' );
define( 'SECURE_AUTH_KEY',  '9gW ^8|nk2aD6YboIff|g^yQqE%Jq{d!Nq2Dm6p/*|rsi](LRL[(9ZY=E`6sgTtA' );
define( 'LOGGED_IN_KEY',    'JoBYZgnq).L[)q6VQC8RWIs%dO@!%)i{av[8:^72RppY%^x)lc8&3hCZ{=XwQN-V' );
define( 'NONCE_KEY',        '8~_=5e=spCT=KN~CIT6Vk(z+F8^+ty3E|qqTeWDcOW2]0p4>VpFm!Ra%_Z5u[TKS' );
define( 'AUTH_SALT',        '6h%/$UNj;:z~-`1Z,z& ]`iuX%(b|x4E)*ZyF**LXooHCOd[C5H@BL1{QQQ18^Xg' );
define( 'SECURE_AUTH_SALT', '4;uuHaEWGo}[LuKm]K><<FSZMe-Kqf061;o-*`mq/L/E[b1n.r4A0tWNsvZ^HDHZ' );
define( 'LOGGED_IN_SALT',   '~% _L0V@aX@[2}t%%K_L dmO*=,B?XZW5f{jc0mI2&JLY_#)!yx?fp`(v!aY,u;z' );
define( 'NONCE_SALT',       'I>.xY-igo].*dUL`l& |y%JT^-psxF%Ll7d*.oR_8aVn77CqSLP./w5.OFMc5WuW' );

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
