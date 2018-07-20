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
define('DB_NAME', 'agency_blog');

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
define('AUTH_KEY',         'b7GS,+;%~{A:6m6d}bn6HnjM_?+zR?IP/_fJWI}<#~$5J;S}VvNTEegnuVUfYV{x');
define('SECURE_AUTH_KEY',  'us0ier.a#5~0,;&Gjz`<&(?8gT9-7>?~BToXO73kUsDL`Z@!vG#W_m*<1>8!.S#P');
define('LOGGED_IN_KEY',    'xS{%MO=>@6m+~*kX|*kHuG$~MM^`xE3+[z [zcz]m?e}VV{UDjc3L:l[HP?nMhY_');
define('NONCE_KEY',        '}=zB66+;y2ryL.kII:8[=p;s?*J]gb!Ivy9`i[Pa$_b^c~By{Ne)1L7Ab[D:>cL%');
define('AUTH_SALT',        'a!bd::=`CBxK,5$oYC!m%eB>a3$R|}t?#:5}x-lQWC6W0 pw6Lmdu*>&}Ns CApj');
define('SECURE_AUTH_SALT', 'U),gBr};{Wi~-%?4Wm*&Y6_w](uGyVld`sakH>!fs%g[7WOK9wTn7s+8|M@7UnSX');
define('LOGGED_IN_SALT',   'jN`VzYC,2La35dQ.oUxCRuS/Haa8[3qeI?yV8WlD4#a(D7JP(;KMa]5SwfP9k0&o');
define('NONCE_SALT',       'NlbQTGDH{p>d.[RO}E)<v!SD6v3+td@8tmN[cdjxuW?fRy6g4.C`l$*1[nc^Hr2u');

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
