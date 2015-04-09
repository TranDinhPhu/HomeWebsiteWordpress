<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'home_website_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-pOnd0h>J,#-r3w0Ty:?,ZOZjlIx-|Hv~G^+oO$lF![+|J5i%E+ KPS!1$gMz99}');
define('SECURE_AUTH_KEY',  '2w%M`l aDr-o#ca-_Em {K*K3)vxtjTTdY&ee+ENVaV35u{7N|%Ap|kX/-`*9~4j');
define('LOGGED_IN_KEY',    'S-:C}fN6,FsJ{ZC!: E)EZ%h-(f{ch%i#CTa/8kS-m-dt?h}.K`s]diq`W>j&C|c');
define('NONCE_KEY',        '2|$ZYE][51:OkBX_isXT(|U$2Bs&N{Yw*3<(*T}~`D=vDLRS=eoIfSv~!z9Vq,9`');
define('AUTH_SALT',        'A-R#`^K1?=4h.utJX}lT*pNslyC@(=<moSl6)6enh23+&SdkTVV0TnEhdkznr!+G');
define('SECURE_AUTH_SALT', '[Sj)/aH$+vrhmGwY9d}M`{)@-=<@Jb^:IvU9lA07FuM!1-:u1X)@(m0:+oDW<0{I');
define('LOGGED_IN_SALT',   '[]<*,Ai!:FI$tvIZC&,OuYLD<R&|$&C,C5eqA=|,:-(Lhf,G*5MA:iH^8tdv<h<e');
define('NONCE_SALT',       '@KI60He,~Nh`T)^<vxsq}S$-3XCF@~|gD`[63q -w>_ZW-r%M6B%WXr1bU+qx|jc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
