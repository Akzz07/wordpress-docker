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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'BMY Cto}.S xLfe$!!gJm1t=M4i;`+emspRTw%*DIb:_!otDjY$wf+g^46?=53D(' );
define( 'SECURE_AUTH_KEY',  'cRxdCW|DQf_VW_.,Zf<:L)ZCUgo<` kIrR/ORbn<iXXwN/csgE/N<DA4WsO,,6C~' );
define( 'LOGGED_IN_KEY',    'wZ.vzfzg<9_R3u8vI:Ms%k-x-{s9thx:FN1.}Hp<u[./T>#q,Ye/4%)[PNhgo{/v' );
define( 'NONCE_KEY',        'uEpPp.ae/gI@J}!zREzK(Z(?c!b ok&SrmkXw?jC!+HGYK6m]cgl-5c`cwNq&MLT' );
define( 'AUTH_SALT',        '_;tGUYM$FVUjn$N*.QSk2U5<vk3Rw``?!]|_?Y<FB*!H=MLgUM=ld0LKJ{Cbvr$L' );
define( 'SECURE_AUTH_SALT', 'P[>9pHQgd L]iYpd. M)I)+@K9h b-t0Wa@]]ceb7MlNq`HQHdYTp%Z!@PYm(4|1' );
define( 'LOGGED_IN_SALT',   'BYE-T8Oy]qK3JYe|pxHL9<z#[w1K_6MMdu+qJhzJ.mT|;yGCl}9LzHLs(TjtljV*' );
define( 'NONCE_SALT',       'bE~7N:!EfwvF #nQ1tuyVxtn[O#D+p~6X?L9Kr{UQ=#S__q@W$>T;>}>he>38Y[U' );

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
define('WP_REDIS_HOST', 'redis-server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PREFIX', 'dolanan');
define('WP_REDIS_DATABASE', 0); // 0-15
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
