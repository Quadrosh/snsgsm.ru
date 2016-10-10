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
define('AUTH_KEY',         'eVHYPb`Qrg.WB4zpu~&0Jfl`+.U/NSm+w(o[^UpzQRhJA/iQ]]ljOwfE(y=9~qeF');
define('SECURE_AUTH_KEY',  '8To=-x(<5q(30>ZX89V$#v0V.<>.BgzHSnOlJ/,QN;zL`5Rm_M3.pR>j5LJkMzNo');
define('LOGGED_IN_KEY',    'p#On}KR*ohCGu:E]8TOjW{.UQ9O^D6~d*( LYAbMe:?k5j0e&|,H=>jc`htz>2Vu');
define('NONCE_KEY',        'c!dDgyp0t`FIBsP+m<h9r?/x0SwHuW0S{h).[{|P8X7mEE{s&hjhiHsDZrMC9_TY');
define('AUTH_SALT',        'gsPcrie8$d=BDm0V>,I`8a|A23_>TPII%(0{g^}Q|F8c!9a:vI3d~Uk(7A`k{.iH');
define('SECURE_AUTH_SALT', 'kp&H;s#fI}+v[vMR  WUx:}yW|3B2him4`Ho]Z0cpV~[V`5yxBvN+m+^/]BgO82.');
define('LOGGED_IN_SALT',   '5aZMu+gAv!(@RTFvjb@xA2P]SVtDWCaM^-IIbv<I$stdc4bN$Zr$p@IP$&Yq]scp');
define('NONCE_SALT',       'Ue-i2^WIo*Y`fw@}xhFbQ<N_U0PG@1cS>oONfk./M&8UNZ4^ciY*^6BI9=dJv0bA');

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
