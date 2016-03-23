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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demoforc_blogging');

/** MySQL database username */
define('DB_USER', 'demoforc_dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'Cjs38760MB');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'f9u68U]P+d4@>+s`Qi~+U=F 8?g%gdhQ%[z5@<s;1KhW,}}]x*7}pZbcBYkY[F-F');
define('SECURE_AUTH_KEY',  'T*{a1(ldFz-+*;ZyD-<`F}]*ENmxmrL#YG*L}7b4XBnaw=nCjka5rcqB+V*p;k7W');
define('LOGGED_IN_KEY',    '$2@Kmvsm=RP)VNOtv>4M-Q]IA$`9ONjf$otrt}u83)mF>Tnhd32(r|-H-S-%suL5');
define('NONCE_KEY',        'J,2G{m=Za8EPHE:zr+.NSG&VNt~z,rg^Ox-qU-(Lw*<9~m VNh~;F1_Lk;0^,ke-');
define('AUTH_SALT',        'OCsHOst~6t`8;=N9p#YRk$PFEJ-G#2JqeI#+GPx[%g-yZ)^N2`-a$_sE|hAxtsmj');
define('SECURE_AUTH_SALT', 'R*bAwttq+@LeKErVOk75[<[?d~R~|c2~&px{K&b5m}C9O=tHUQ.)L-2Wl#.+?5R-');
define('LOGGED_IN_SALT',   '|K+hxZd@H+OpB#3]Sq4rEM2E-+)Tv!K7JlM1M0,3Jmb?dn!3mA<g(QfekJ-&*R0x');
define('NONCE_SALT',       'yBh?4u(&8kTk#OSj}<Hsmc]sb.qnN]+w]u3Nr0ph$Nw+9K^|rm|61%eB0e9BDN?:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
