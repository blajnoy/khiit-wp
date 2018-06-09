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
define('DB_NAME', 'u273716417_ln');

/** MySQL database username */
define('DB_USER', 'u273716417_leha');

/** MySQL database password */
define('DB_PASSWORD', 'leha1234');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.ua');

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
define('AUTH_KEY',         ':}BbB5q|Ir{;$av@LP8^<R^+}SCoSsYtgp(/xrW4}>rN2#*3V`D{] #MFcL5F Jw');
define('SECURE_AUTH_KEY',  'hPvOZ:Y,1Zw!2KWeNXF]Hr|-W(/_%WUVqC<%}Lnfac-w*Icj$[Rg7HL{0I>$~(4#');
define('LOGGED_IN_KEY',    'YVs:c5tM1yD`O(RTH{XTC5$*7&ofH-gr>*+B)t+L*.HMSXlmb:nw?5)Uz^8vD?`N');
define('NONCE_KEY',        'WjjQv;z*3:)sr^W>si0TZv<:zp<gnLmX <=Q=5eL*=:YN=a@-<}JjLV}2.d==vEh');
define('AUTH_SALT',        '[K^=,L rtr&AaNA>d`h6@K~%sgcxX#Tz~c~&Ix-Le3COnDPLTvarffXt9UitD*!c');
define('SECURE_AUTH_SALT', '(?%-t609rg ^vRK:iBdQ=>+Y@-IvhQwUoWteVOnXOAsyF9|}kTi4<[J</tCF#lGq');
define('LOGGED_IN_SALT',   ',7Fk> gdW=ozAd0 H6&Fq9&]=0c} a$ $<HBY<B-tPr~7GRdbw/vd`t1w)`+^R*:');
define('NONCE_SALT',       'j?$&S2ra{!w&i@Ev37 qA| gWjm$ZDuj-?.0fJ.Sbjcp:tkMsO6dQGT&>Iw22L!n');

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
