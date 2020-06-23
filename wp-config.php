<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swierkutest_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9E3K#9d~f6jiJw-#A8Qj@A93H$pLN2|I4=nxK:.jvVx5Y|Wh0^<kOJKZd5s%*Nw%' );
define( 'SECURE_AUTH_KEY',  'uaO^e1}<8uK9vmn TI;D,w:oX)`w!,(PM|7kIfkN,SB4/=FvWPF3Ue*jjDxW<BUV' );
define( 'LOGGED_IN_KEY',    'og_1#.c<4wBEC08xWZ|40p:M:v*j;EjpRGoNzOe#%N_t6|l.@C-uvHO8PSE@WAZt' );
define( 'NONCE_KEY',        'K@Y n=a/.#pF0pz.+sYQlt;mBkGy8jM|P=*Ruz.$vpo$Lpx<7:Ztk$r Zk}}1b}^' );
define( 'AUTH_SALT',        '9%*.[Wz``g9.sb7-.Aedk;VN4| ^_K}n(r@-(-MQW0L>!L6m)F{ySkTV;@Wv*#Y^' );
define( 'SECURE_AUTH_SALT', 'AQalcMEl=xtrW*{*91-7&0?lDT<o]q29bb%eIczMm,v+gXE8/TeLk~Hf$}G|sjk^' );
define( 'LOGGED_IN_SALT',   'Nu!p1366_GtoEg0 hDuw;E1Mb{B#wogrVFVA@]^kb&7p&NihQic/d:$H}vz~JK{H' );
define( 'NONCE_SALT',       'o3 ?:wAOs?m>jZ&WmFDO/~6}Bv@:V[vnKk8w,?zso1#ED.8?)VWS~c`Rrm_2;l*3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
