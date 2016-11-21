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
define('DB_NAME', 'bkmea');

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
define('AUTH_KEY',         'qg@,+|_2O5YSsPN51=9,0eNK5JO9bHeq^#9K 7thdvKd.`-M)0f025pa{;E7AupO');
define('SECURE_AUTH_KEY',  'PxO)JzT_Z5u!}S@;eh`$VV%KE[(>.!?2xa*`?r_7G;vOY#GPOk.Sc$.ZIhAHvcHA');
define('LOGGED_IN_KEY',    'OUc{bi(H#HFGc$Dt+:O}XCi:thZXC*HnE=i19Js(]!_E>l_|U(otBHSm<z8tm_dp');
define('NONCE_KEY',        '+:B8H%/&L%YD[^Q@$cCy&g3-C(ZuLAZMR<}AR5=mJ06ZY}mUh2V%=h585+3((BTH');
define('AUTH_SALT',        'G87-W4(;g#lJ(o3gh8[c?g~yEV5MG<$#%_5%i-E?Joh6oi:Q9zzV:{jC$_*PToZU');
define('SECURE_AUTH_SALT', '[oD<jf^iAH{vK$uqhp]CNQNT(~*k$S_Adt?z-?F3-oJy6XN.5AR4*efe&}ppczC!');
define('LOGGED_IN_SALT',   '.:?YP>D]n3+H*LWsvGY<0<7]T3bG&3 ?SsU2NJf,av80yC$$K6q>w@Za1f=c^w{U');
define('NONCE_SALT',       'p`!)22<g+F;*d8Y4j%{8oRcsd.,;l]_Gyy*#wXN`<atu):)ND&y@,@D/,]g8OKb]');

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
