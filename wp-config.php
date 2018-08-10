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
define('DB_NAME', 'wpd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'r*TUV9#jGHALom>CaMMw.SnEL6YJl@8D.mIdnO;H7~NQos3;o<o^(iXjn-<1o5M_');
define('SECURE_AUTH_KEY',  '@4W|;7H;(S(Ne}sY[<;r^YJ,#$F(4`pL|}TD t%(t[ 4j>^ bs/b)DZ)xU[.]mOS');
define('LOGGED_IN_KEY',    'cM~l~fZ,5A]a5M@wIqlGmvZ1c0Xg=H?#vC5K=N53amioDaS2P,A:q)]H>W.$WSh2');
define('NONCE_KEY',        'Z87#S2KYRI}(E*X4F=.x{E$ud zc6mo+!sB:CG]y*8hO30iSVv&[VGZ>P%`}WgV ');
define('AUTH_SALT',        'Si[:wZ}9Gb<8Nu_U|md9qxgcusC3)w?(}kb`$8:I5V)qAmVJyQd{ajk`)`{oSEF}');
define('SECURE_AUTH_SALT', 'Ah an0bBnoDZh<ggC|^DD,+o4l$KG@!]^HLn<(.s9Z/D7iB!~sTB{k$EVA(LZl{p');
define('LOGGED_IN_SALT',   'C?xkbzBC]q%8w,*U((~~>*)u.tE?Niv`_@6UDas<hfcuDuSeh#R6AGIVn|Bz7D6^');
define('NONCE_SALT',       'y-uKy5SJ ,^sWA3oT{*beh4r~D09v#1%Da(`1)XH3l^];G7!Qg*n|]?6>zm0gq u');

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
