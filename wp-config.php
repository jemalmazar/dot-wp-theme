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
define('DB_NAME', 'doorsopen2tech');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tvVuzy5#$aomvE[?2Y%!9:Xm@l5pv48:]2g@k|XT&r_rY3Z]0(cg}4F+6YgcAl{|');
define('SECURE_AUTH_KEY',  'H!BrZXVp<YWk]i9`_wvSqc<=tIktVcC>*@>jqf872N&;bjDWw#2k)hzP3^t!Vg{x');
define('LOGGED_IN_KEY',    '?veB$isCfpwKgUER,~a{WzQ]#YmV%U$y^vPQ?N*j}R`WNMQW{ue&BIjb668Olwq[');
define('NONCE_KEY',        'G2D<P1/.4:igmQMGMA^3qPHf3E6_:};c%jvKt{CJ5a60;(xtPiUFkU;e^d*Y5*6U');
define('AUTH_SALT',        'x=kD40R8s^so=Rqnm&eZx6[)J}(A48:?V3YxI[qi.[LJn^Yd0HiK-!c_,WoQ1+u=');
define('SECURE_AUTH_SALT', 'oD!F^=+xQf=m*)^h#a`4$bIV,hg_ePZpR=IWiU<;J(stVTx1n=TWLwUvqjcW%TzI');
define('LOGGED_IN_SALT',   'Ea}kV<(k1MtWwmQt.We0BJpjM*=]a-|NQhTR)oyF,h@mC0e;kfO9,hq1|MYgIFDO');
define('NONCE_SALT',       'FNXw{& ^+q96&/X7n{7+@B6nVn|11EsoA7Z&3f5*Nt+ SngTaIs/QU@a0W@>k|,H');

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
