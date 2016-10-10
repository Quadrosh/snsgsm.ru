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
define('DB_NAME', 'snsgsm.ru289df6');

/** MySQL database username */
define('DB_USER', 'u18091a');

/** MySQL database password */
define('DB_PASSWORD', 'KgxBtmtES5zs');

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
define('AUTH_KEY',         'du<N=0y0CDtMr$h;neeje.,VaafdBZs`#xvQXp)V*FW%1Q6T`*W)/M-18/W?xe`W');
define('SECURE_AUTH_KEY',  '+%RW]:&Lkmi.MalbkWBfNS?<`A)TNqY#gcd`OEqt]cw>)O80nk#)7qk($!)Q4.vI');
define('LOGGED_IN_KEY',    'Qfh)3}UW9|^MR{A^o7UhAgITuonv7[V>k+ eAz&sc8#i<}QQIPgiN5H!:IvnQO3r');
define('NONCE_KEY',        'fW1Q9e/xUAa7i48D1*oQnEiN=la#gT&|/>!+$6fFj0bg)YlCkhc}~#S21DQ}O_mL');
define('AUTH_SALT',        '.HZc)I{>7rGt$;BRfgu:~J?DQOE>s@*NP5/f.J3z>E$5%s.CB_)9.k B`Hqkgx[/');
define('SECURE_AUTH_SALT', 'SP:Ya]9JT<Om.sUohd `f 2OsT:2~w/dGo#wD 3RB3%LD/(HhnD0o4960vN`>3%F');
define('LOGGED_IN_SALT',   '1<)00GwG}Pw6aH~f3-C@L|dixRC~mRt2lc{5~b1a;h`v)Htcw,aH?A4*8S~lo5[>');
define('NONCE_SALT',       '>?^-C,>|>V0=R7|4K74-^3<Qk 2qWN/F-W(kEy| -jnK:V{5jlW5krqd35*d_}r|');

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
