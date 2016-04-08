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
define('DB_NAME', 'cecs300dDB7r1ro');

/** MySQL database username */
define('DB_USER', 'cecs300dDB7r1ro');

/** MySQL database password */
define('DB_PASSWORD', 'UuAjX5xVJv');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '3^vF0kV>@RC@nB}Fzk0!VK-oC:oY0@RGzg:_VG-l9[kV[-O8sd]-O9xe2~WhS_tD]');
define('SECURE_AUTH_KEY',  'O_5]eO_tO9td:~WGte2.WH+qL5pa2_WHT<yPAufA]eP.uH6jT<yMArfA{fP.uI3fQ');
define('LOGGED_IN_KEY',    'k|wD1lW]~SD~oC1l~p5HalWpD;pa;~SDxh;.XHxmA{mW]+P9te{$TEyj6<iT<yI2i');
define('NONCE_KEY',        'b}^UnY}$YI^rFjU!rJ4oY}@cN^rFYJwg4|dN!sNCvg4|ZJ-l9|dK-lC:8oZ[-KVC');
define('AUTH_SALT',        'Spa1_dO_sK5pZ#x]eP.tO9xh5#aObI$<yIfQb6.TAufqA<bM$n7,YjQ{yM3Eyf$');
define('SECURE_AUTH_SALT', ',gzk8>VK@oC:hR}!VCzk8[VG-l9[dO[-R8sZ:-HS9ta]+#aH_p9]5lW#x9L2mW<tH');
define('LOGGED_IN_SALT',   'p*WL*qD;t]+WH+m2.XI$mA{mX{+PAue{EAuf3,fP.6I3nX,7J3nY}MYI$nB{frco');
define('NONCE_SALT',       'D5lW]+;iS;~WH+l9;aL*qE2mX2*Wta;.PAuf3.XI.uI2mX{$M7nY{$QF^qEfQ,uB');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
