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
define('DB_NAME', 'backyard-astrophotography_wp');

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
define('AUTH_KEY',         'Qz=26}5+sz?o;z5fi;fYR[C8$Ag+RG60QOQ?fI``+ciuJ#R?Kka_c_R{3oTw|;S1');
define('SECURE_AUTH_KEY',  '$CpBcB0K kG2H%#-,V+eWKNwDH2D-,J3v@y~L_Qtf$,%V=hE)LzYjy[YI%m+S:y{');
define('LOGGED_IN_KEY',    'd43po<3ib!P#Stz/BjzDN6[HvE#G){M!Ie>#K;6m+NukX)81@4hpX1>NzU$[wrVs');
define('NONCE_KEY',        '%J-Tn{hhhTj8O_+97EPSwta0]Jm?kU*&2CZ2-?$-yqSempN*>eO: 7=`wYUQ&:W:');
define('AUTH_SALT',        'u&+:<(svD-NwVE5c1liyH,ORQQhE>op&Y0VCL)-.VaMJ?zXi#K>0wjuTP8Ha$]ty');
define('SECURE_AUTH_SALT', 'fs<T-jZl1DY69|`k[]T82xqSe,VB=,vF{fOxG-p;nAZEZi58W)KEYTbqI(&oNdGu');
define('LOGGED_IN_SALT',   '!5Jlu@XF7J-O`K%^gJT]tBYtI61]J>m89p`.fNBZUiOo}[+|/^N}?be1C)Tov5E=');
define('NONCE_SALT',       'q<|Q]jQP+;&WJ:1P1hk/XdCg#kF^F@xw>wse,EDzlg79w}ev6Q?&&wIo>a{G~1D?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpba_';

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
